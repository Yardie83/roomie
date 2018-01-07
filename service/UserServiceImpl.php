<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 07.01.2018
 * Time: 11:07
 */

namespace service;


use domain\User;
use dao\UserDAO;
use http\HTTPException;
use http\HTTPStatusCode;

class UserServiceImpl implements UserService
{

    /**
     * @access public
     * @param User user
     * @return User
     * @ParamType user User
     * @ReturnType User
     */
    public function createUser(User $user)
    {
        // TODO: Implement createUser() method.
    }

    /**
     * @access public
     * @param int userId
     * @return User
     * @ParamType userId int
     * @ReturnType User
     */
    public function readUser($userID)
    {

        $userDAO = new UserDAO();
        return $userDAO->read($userID);
    }

    /**
     * @access public
     * @param User user
     * @return User
     * @ParamType user User
     * @ReturnType User
     */
    public function updateUser(User $user)
    {
        // TODO: Implement updateUser() method.
    }

    /**
     * @access public
     * @param int userId
     * @ParamType userId int
     */
    public function deleteUser($userId)
    {
        // TODO: Implement deleteUser() method.
    }

    /**
     * @access public
     * @return User[]
     * @ReturnType User[]
     */
    public function findAllUser()
    {
        // TODO: Implement findAllUser() method.
    }
}