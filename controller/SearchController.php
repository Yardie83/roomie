<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 06.01.2018
 * Time: 14:08
 */

namespace controller;

use view\TemplateView;
use view\LayoutRendering;

class SearchController
{
    public static function show()
    {
        $contentView = new TemplateView("view/assets/search_page/search.php");
        LayoutRendering::basicLayout($contentView);
    }

    public static function readAll(){
        $contentView = new TemplateView("customers.php");
        $contentView->customers = (new CustomerServiceImpl())->findAllCustomer();
        LayoutRendering::basicLayout($contentView );
    }

    public static function readNew(){

    }
}