<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 06.01.2018
 * Time: 14:08
 */

namespace controller;

use domain\Listing;
use service\ListingServiceImpl;
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
        $listing = new Listing();
        $listing->setStreet($_POST["street"]);
        $listing->setPlz($_POST["plz"]);
        $listing->setCity($_POST["city"]);
        $listing->setCanton($_POST["canton"]);
        $listing->setNumberofrooms($_POST["rooms"]);
        $listing->setPrice($_POST["price"]);
        $listing->setSquaremeters($_POST["squareMeters"]);

        //$listing->setPublishedDate(($_POST["year"]."-".$_POST["month"]."-".$_POST["day"]));

        if (!($_POST["year"] == "-" || $_POST["month"] == "-" || $_POST["day"])){
            $listing->setMoveindate(($_POST["year"]."-".$_POST["month"]."-".$_POST["day"]));
        }

        //$listing->setMoveoutdate(($_POST["year"]."-".$_POST["month"]."-".$_POST["day"]));

        $contentView = new TemplateView("view/assets/landing/landing.php");
        $contentView->listings = (new ListingServiceImpl())->filterListings($listing);
        $contentView->result = true;
        LayoutRendering::basicLayout($contentView );
    }

    public static function getListingById($id)
    {
        $contentView = new TemplateView("view/assets/detailView/details.php");
        $contentView->listing = (new ListingServiceImpl())->findListingById($id);
        LayoutRendering::basicLayout($contentView );
    }
}