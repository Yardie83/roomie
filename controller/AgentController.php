<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 08.10.2017
 * Time: 22:20
 */

namespace controller;

use domain\User;
use service\AuthServiceImpl;
use validator\UserValidator;
use view\TemplateView;
use domain\Agent;

class AgentController
{
    public static function editView(){
        $view = new TemplateView("agentEdit.php");
        $view->agent = AuthServiceImpl::getInstance()->readUser();
        $view->pageTitle = "WE-CRM";
        $view->pageHeading = "<strong>WE-CRM | Update</strong> your account.";
        $view->pageSubmitText = "Update";
        $view->pageFormAction = "/agent/edit";
        echo $view->render();
    }

    public static function registerView(){
        echo (new TemplateView("agentEdit.php"))->render();
    }

    public static function update(){
        $view = new TemplateView("agentEdit.php");
        $view->pageTitle = "WE-CRM";
        $view->pageHeading = "<strong>WE-CRM | Update</strong> your account.";
        $view->pageSubmitText = "Update";
        $view->pageFormAction = "/agent/edit";
        return self::register($view);
    }

    public static function register($view = null){
        $user = new User();
        $user->setUserName($_POST["name"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["password"]);
        $agentValidator = new UserValidator($user);
        if($agentValidator->isValid()){
            if(AuthServiceImpl::getInstance()->editUser($user->getUserName(),$user->getEmail(), $user->getPassword())){
                return true;
            }else{
                $agentValidator->setEmailError("Email already exists");
            }
        }
        $user->setPassword("");
        if (is_null($view))
            $view = new TemplateView("agentEdit.php");
        $view->user = $user;
        $view->userValidator = $agentValidator;
        echo $view->render();
        return false;
    }

    public static function loginView(){
        echo (new TemplateView("agentLogin.php"))->render();
    }
}