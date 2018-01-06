<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 06.01.2018
 * Time: 16:36
 */

namespace controller;


use view\LayoutRendering;
use view\TemplateView;

class RegisterController
{
    public static function registerView()
    {
        $contentView = new TemplateView("view/assets/registration/register.php");
        LayoutRendering::basicLayout($contentView);
    }
}