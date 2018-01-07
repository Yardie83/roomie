<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 09.10.2017
 * Time: 11:07
 */

namespace view;

use controller\AuthController;


class LayoutRendering
{

    public static function basicLayout(TemplateView $contentView) {
        $view = new TemplateView("layout.php");
        if (AuthController::authenticate()) {
            $view->header = (new TemplateView("assets/header/header_loggedin/header_loggedin.php"))->render();
        } else {
            $view->header = (new TemplateView("assets/header/basic/header.php"))->render();
        }
        $view->content = $contentView->render();
        $view->footer = (new TemplateView("assets/footer/footer.php"))->render();
        echo $view->render();

    }
}