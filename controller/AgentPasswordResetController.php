<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 16.10.2017
 * Time: 14:26
 */

namespace controller;

use service\AuthServiceImpl;
use view\LayoutRendering;
use view\TemplateView;
use validator\UserValidator;
use service\EmailServiceClient;

class AgentPasswordResetController
{

    public static function resetView(){
        $resetView = new TemplateView("agentPasswordReset.php");
        $resetView->token = $_GET["token"];
        echo $resetView->render();
    }
    
    public static function requestView(){
        $view = new TemplateView("view/assets/requestPassword/requestPassword.php");
        LayoutRendering::basicLayout($view);
    }
    
    public static function reset(){
        if(AuthServiceImpl::getInstance()->validateToken($_POST["token"])){
            $agent = AuthServiceImpl::getInstance()->readUser();
            $agent->setPassword($_POST["password"]);
            $agentValidator = new UserValidator($agent);
            if($agentValidator->isValid()){
                if(AuthServiceImpl::getInstance()->editUser($agent->getName(),$agent->getEmail(), $agent->getPassword())){
                    return true;
                }
            }
            $agent->setPassword("");
            $resetView = new TemplateView("agentPasswordReset.php");
            $resetView->token = $_POST["token"];
            echo $resetView->render();
            return false;
        }
        return false;
    }

    public static function resetEmail(){
        $token = AuthServiceImpl::getInstance()->issueToken(AuthServiceImpl::RESET_TOKEN, $_POST["email"]);
        $emailView = new TemplateView("agentPasswordResetEmail.php");
        $emailView->resetLink = $GLOBALS["ROOT_URL"] . "/password/reset?token=" . $token;
        return EmailServiceClient::sendEmail($_POST["email"], "Password Reset Email", $emailView->render());
    }

    public static function checkEmailView()
    {
        $view = new TemplateView("view/assets/checkMails/checkMail.php");
        LayoutRendering::basicLayout($view);
    }

}