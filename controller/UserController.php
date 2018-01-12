<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 06.01.2018
 * Time: 15:18
 */

namespace controller;



use view\LayoutRendering;
use view\TemplateView;

class UserController
{

    public static function loginView()
    {
        $contentView = new TemplateView("view/assets/login/login.php");
        LayoutRendering::basicLayout($contentView);
    }


}