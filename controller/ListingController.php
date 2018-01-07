<?php
/**
 * Created by PhpStorm.
 * User: Hermann Grieder
 * Date: 07.01.2018
 * Time: 01:08
 */

namespace controller;


use view\LayoutRendering;
use view\TemplateView;

class ListingController
{
    public static function create(){
        $contentView = new TemplateView("assets/createAd/createAd.php");
        LayoutRendering::basicLayout($contentView);
    }

    public static function readAll(){
        $contentView = new TemplateView("customers.php");
        $contentView->customers = (new CustomerServiceImpl())->findAllCustomer();
        LayoutRendering::basicLayout($contentView);
    }

    public static function edit(){
        //$id = $_GET["id"];
        $contentView = new TemplateView("assets/createAd/createAd.php");
        //$contentView->customer = (new CustomerServiceImpl())->readCustomer($id);
        LayoutRendering::basicLayout($contentView);
    }

    public static function update(){
        $customer = new Customer();
        $customer->setId($_POST["id"]);
        $customer->setName($_POST["name"]);
        $customer->setEmail($_POST["email"]);
        $customer->setMobile($_POST["mobile"]);
        $customerValidator = new CustomerValidator($customer);
        if($customerValidator->isValid()) {
            if ($customer->getId() === "") {
                (new CustomerServiceImpl())->createCustomer($customer);
            } else {
                (new CustomerServiceImpl())->updateCustomer($customer);
            }
        }
        else{
            $contentView = new TemplateView("customerEdit.php");
            $contentView->customer = $customer;
            $contentView->customerValidator = $customerValidator;
            LayoutRendering::basicLayout($contentView);
            return false;
        }
        return true;
    }

    public static function delete(){
        $id = $_GET["id"];
        (new CustomerServiceImpl())->deleteCustomer($id);
    }
}