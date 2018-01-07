<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 12.09.2017
 * Time: 21:30
 */
require_once("config/Autoloader.php");

use controller\HomepageController;
use controller\ListingController;
use controller\RegisterController;
use router\Router;
use controller\CustomerController;
use controller\AgentController;
use controller\AuthController;
use controller\ErrorController;
use controller\AgentPasswordResetController;
use controller\EmailController;
use controller\PDFController;
use controller\SearchController;
use controller\UserController;
use service\ServiceEndpoint;
use http\HTTPException;
use http\HTTPHeader;
use http\HTTPStatusCode;

session_start();

$authFunction = function () {
    if (AuthController::authenticate())
        return true;
    Router::redirect("/login");
    return false;
};

// Home path
Router::route("GET", "/", function () {
    HomepageController::show();
});

Router::route("POST", "/", function () {
});

// Search path

Router::route("GET", "/search", function () {
    SearchController::show();
});


// Login path
Router::route("GET", "/login", function () {
    UserController::loginView();

    //AgentController::loginView();
});

Router::route("POST", "/login", function () {
    AuthController::login();
    Router::redirect("/agent");
});


// Register path
Router::route("GET", "/register", function () {
    RegisterController::registerView();
});

Router::route("POST", "/register", function () {
    if (AgentController::register()){
        AuthController::login();
        Router::redirect("/agent");
    }
});


// Logout path

Router::route("GET", "/logout", function () {
    AuthController::logout();
    Router::redirect("/");
});


// Password request path
Router::route("POST", "/password/request", function () {
    AgentPasswordResetController::resetEmail();
    Router::redirect("/login");
});

Router::route("GET", "/password/request", function () {
    AgentPasswordResetController::requestView();
});


// Password reset path
Router::route("POST", "/password/reset", function () {
    AgentPasswordResetController::reset();
    Router::redirect("/login");
});

Router::route("GET", "/password/reset", function () {
    AgentPasswordResetController::resetView();
});


// Agent paths
Router::route_auth("GET", "/agent", $authFunction, function () {
    ListingController::readAll();
});

Router::route_auth("GET", "/agent/edit", $authFunction, function () {
    AgentController::editView();
});

Router::route_auth("POST", "/agent/edit", $authFunction, function () {
    if (AgentController::update())
        Router::redirect("/logout");
});

// Listing CRUD & Email
Router::route_auth("GET", "/listing/create", $authFunction, function () {
    ListingController::create();
});

Router::route_auth("GET", "/listing/edit", $authFunction, function () {
    ListingController::edit();
});

Router::route_auth("GET", "/listing/delete", $authFunction, function () {
    ListingController::delete();
    Router::redirect("/");
});

Router::route_auth("POST", "/listing/update", $authFunction, function () {
    if (ListingController::update())
        Router::redirect("/");
});

Router::route_auth("GET", "/listing/email", $authFunction, function () {
    EmailController::sendMeMyCustomers();
    Router::redirect("/");
});


// Customer paths
Router::route_auth("GET", "/customer/create", $authFunction, function () {
    CustomerController::create();
});

Router::route_auth("GET", "/customer/edit", $authFunction, function () {
    CustomerController::edit();
});

Router::route_auth("GET", "/customer/delete", $authFunction, function () {
    CustomerController::delete();
    Router::redirect("/");
});

Router::route_auth("POST", "/customer/update", $authFunction, function () {
    if (CustomerController::update())
        Router::redirect("/");
});

Router::route_auth("GET", "/customer/email", $authFunction, function () {
    EmailController::sendMeMyCustomers();
    Router::redirect("/");
});

Router::route_auth("GET", "/customer/pdf", $authFunction, function () {
    PDFController::generatePDFCustomers();
});

/*
 *
 * Web site entry point
 *
 */
try {
    HTTPHeader::setHeader("Access-Control-Allow-Origin: *");
    HTTPHeader::setHeader("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS, HEAD");
    HTTPHeader::setHeader("Access-Control-Allow-Headers: Authorization, Location, Origin, Content-Type, X-Requested-With");
    if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
        HTTPHeader::setStatusHeader(HTTPStatusCode::HTTP_204_NO_CONTENT);
    } else {
        Router::call_route($_SERVER['REQUEST_METHOD'], $_SERVER['PATH_INFO']);
    }
} catch (HTTPException $exception) {
    $exception->getHeader();
    ErrorController::show404();
}