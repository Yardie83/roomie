<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 09.10.2017
 * Time: 11:07
 */

namespace view;


class LayoutRendering
{

    public static function basicLayout(TemplateView $contentView, $isLoggedIn = false) {
        $view = new TemplateView("layout.php");
        if ($isLoggedIn) {
            $view->header = (new TemplateView("assets/header/header_loggedin/header_loggedin.php"))->render();
        } else {
            $view->header = (new TemplateView("assets/header/basic/header.php"))->render();
        }
        $view->content = $contentView->render();
        $view->footer = (new TemplateView("footer.php"))->render();
        echo $view->render();

    }
}