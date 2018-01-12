<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 08.10.2017
 * Time: 14:39
 */

namespace service;

use dao\UserDAO;
use domain\User;
use domain\AuthToken;
use dao\AgentDAO;
use http\HTTPException;
use http\HTTPStatusCode;
use dao\AuthTokenDAO;

/**
 * @access public
 * @author andreas.martin
 */
class AuthServiceImpl implements AuthService
{
    /**
     * @AttributeType AuthServiceImpl
     */
    private static $instance = null;
    /**
     * @AttributeType int
     */
    private $currentUserId;

    /**
     * @access public
     * @return AuthServiceImpl
     * @static
     * @ReturnType AuthServiceImpl
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @access protected
     */
    protected function __construct()
    {
    }

    /**
     * @access private
     */
    private function __clone()
    {
    }

    /**
     * @access public
     * @return boolean
     * @ReturnType boolean
     */
    public function verifyAuth()
    {
        if (isset($this->currentUserId))
            return true;
        return false;
    }

    /**
     * @access public
     * @return int
     * @ReturnType int
     */
    public function getCurrentUserId()
    {
        return $this->currentUserId;
    }

    /**
     * @access public
     * @param String email
     * @param String password
     * @return boolean
     * @ParamType email String
     * @ParamType password String
     * @ReturnType boolean
     */
    public function verifyUser($email, $password)
    {
        $userDAO = new UserDAO();
        $user = $userDAO->findByEmail($email);
        if (isset($user)) {
            if (password_verify($password, $user->getPassword())) {
                if (password_needs_rehash($user->getPassword(), PASSWORD_DEFAULT)) {
                    $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
                    $userDAO->update($user);
                }
                $this->currentUserId = $user->getId();
                return true;
            }
        }
        return false;
    }

    /**
     * @access public
     * @return User
     * @ReturnType Agent
     * @throws HTTPException
     */
    public function readUser()
    {
        if ($this->verifyAuth()) {
            $userDAO = new UserDAO();
            return $userDAO->read($this->currentUserId);
        }
        throw new HTTPException(HTTPStatusCode::HTTP_401_UNAUTHORIZED);
    }

    /**
     * @access public
     * @param null $user
     * @return boolean
     * @ParamType name string
     * @ParamType email String
     * @ParamType password String
     * @ReturnType boolean
     */
    public function editUser($user)
    {
        $password = $user->getPassword();
        $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
        $userDAO = new UserDAO();
        if ($this->verifyAuth()) {
            $user->set($this->currentUserId);
            if ($userDAO->read($this->currentUserId)->getEmail() !== $user->getEmail() || $userDAO->read($this->currentUserId)->getUserName() !== $user->getUserName()) {
                if (!is_null($userDAO->findByEmail($user->getEmail()))) {
                    $user->setEmailError(true);
                    return false;
                } else
                    if (!is_null($userDAO->findByUserName($user->getUserName()))) {
                        $user->setUserNameError(true);
                        return false;
                    }
            }
            $userDAO->update($user);
            return true;
        } else {
            if (!is_null($userDAO->findByEmail($user->getEmail()))) {
                $user->setEmailError(true);
                return false;
            }
            if (!is_null($userDAO->findByUserName($user->getUserName()))) {
                $user->setUserNameError(true);
                return false;
            }
            $userDAO->create($user);
            return true;
        }
    }

    /**
     * @access public
     * @param String token
     * @return boolean
     * @ParamType token String
     * @ReturnType boolean
     */
    public
    function validateToken($token)
    {
        $tokenArray = explode(":", $token);
        $authTokenDAO = new AuthTokenDAO();
        $authToken = $authTokenDAO->findBySelector($tokenArray[0]);
        if (!empty($authToken)) {
            if (time() <= (new \DateTime($authToken->getExpiration()))->getTimestamp()) {
                if (hash_equals(hash('sha384', hex2bin($tokenArray[1])), $authToken->getValidator())) {
                    $this->currentUserId = $authToken->getAgentid();
                    if ($authToken->getType() === self::RESET_TOKEN) {
                        $authTokenDAO->delete($authToken);
                    }
                    return true;
                }
            }
            $authTokenDAO->delete($authToken);
        }
        return false;
    }

    /**
     * @access public
     * @param int type
     * @param String email
     * @return String
     * @ParamType type int
     * @ParamType email String
     * @ReturnType String
     * @throws HTTPException
     *
     * https://paragonie.com/blog/2015/04/secure-authentication-php-with-long-term-persistence
     * https://www.owasp.org/index.php/PHP_Security_Cheat_Sheet#Authentication
     * https://stackoverflow.com/a/31419246
     * @throws \Exception
     */
    public
    function issueToken($type = self::AGENT_TOKEN, $email = null)
    {
        $token = new AuthToken();
        $token->setSelector(bin2hex(random_bytes(5)));
        if ($type === self::AGENT_TOKEN) {
            $token->setType(self::AGENT_TOKEN);
            $token->setAgentid($this->currentUserId);
            $timestamp = (new \DateTime('now'))->modify('+30 days');
        } elseif (isset($email)) {
            $token->setType(self::RESET_TOKEN);
            $token->setAgentid((new AgentDAO())->findByEmail($email)->getId());
            $timestamp = (new \DateTime('now'))->modify('+1 hour');
        } else {
            throw new HTTPException(HTTPStatusCode::HTTP_406_NOT_ACCEPTABLE, 'RESET_TOKEN without email');
        }
        $token->setExpiration($timestamp->format("Y-m-d H:i:s"));
        $validator = random_bytes(20);
        $token->setValidator(hash('sha384', $validator));
        $authTokenDAO = new AuthTokenDAO();
        $authTokenDAO->create($token);
        return $token->getSelector() . ":" . bin2hex($validator);
    }
}