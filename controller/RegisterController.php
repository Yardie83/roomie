<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 06.01.2018
 * Time: 16:36
 */

namespace controller;


use domain\User;
use service\AuthServiceImpl;
use validator\UserValidator;
use view\LayoutRendering;
use view\TemplateView;

class RegisterController
{
    public static function registerView()
    {
        $contentView = new TemplateView("view/assets/registration/register.php");
        LayoutRendering::basicLayout($contentView);
    }

    public static function editView(){
        $view = new TemplateView("view/assets/registration/register.php");
        $view->user = AuthServiceImpl::getInstance()->readUser();
        $view->pageHeading = "<strong>Update</strong> your account.";
        $view->pageSubmitText = "Update";
        $view->pageFormAction = "/editProfile";
        LayoutRendering::basicLayout($view);
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
        $userValidator = new UserValidator($user);
        if($userValidator->isValid()){
            if(AuthServiceImpl::getInstance()->editUser($user)){
                return true;
            }else if($user->getEmailError()){
                $userValidator->setEmailError("Email already exists");
            }
            else if($user->getUserNameError()){
                $userValidator->setUserNameError("Username already exists");
            }
        }
        $user->setPassword("");
        if (is_null($view))
            $view = new TemplateView("view/assets/registration/register.php");
        $view->user = $user;
        $view->userValidator = $userValidator;
        LayoutRendering::basicLayout($view);
        return false;
    }

    public static function loginView(){
        echo (new TemplateView("agentLogin.php"))->render();
    }



}