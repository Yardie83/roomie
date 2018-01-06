<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 05.01.2018
 * Time: 15:31
 */

namespace controller;

use view\LayoutRendering;
use view\TemplateView;

class HomepageController
{
    public static function show()
    {
        $contentView = new TemplateView("homepage.php");
        LayoutRendering::basicLayout($contentView);
    }
}