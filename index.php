<?php

require_once("config/Autoloader.php");

use controller\HomepageController;
use controller\ListingController;
use controller\RegisterController;
use router\Router;
use controller\AuthController;
use controller\ErrorController;
use controller\UserPasswordResetController;
use controller\PDFController;
use controller\SearchController;
use controller\UserController;
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

// Search path

Router::route("GET", "/search", function () {
    SearchController::show();
});

Router::route("POST", "/search", function () {
    SearchController::readAll();
});

Router::route("GET", "/search/{id}", function ($id) {
    SearchController::getListingById($id);
});

// Login path
Router::route("GET", "/login", function () {
    UserController::loginView();
});

Router::route("POST", "/login", function () {
    AuthController::login();
    Router::redirect("/user");
});


// Register path
Router::route("GET", "/register", function () {
    RegisterController::registerView();
});

Router::route("POST", "/register", function () {
    if (RegisterController::register()){
        AuthController::login();
        Router::redirect("/user");
    }
});

Router::route_auth("GET", "/editProfile", $authFunction, function () {
    RegisterController::editView();
});

Router::route_auth("POST", "/editProfile", $authFunction, function () {
    if (RegisterController::update())
        Router::redirect("/user");
});

// Logout path
Router::route("GET", "/logout", function () {
    AuthController::logout();
    Router::redirect("/");
});


// Password Request and Reset
Router::route("GET", "/password/request", function () {
    UserPasswordResetController::requestView();
});

Router::route("POST", "/password/request", function () {
    UserPasswordResetController::resetEmail();
    Router::redirect("/checkMail");
});

Router::route("GET", "/checkMail", function () {
    UserPasswordResetController::checkEmailView();
});

Router::route("POST", "/password/reset", function () {
    UserPasswordResetController::reset();
    Router::redirect("/login");
});

Router::route("GET", "/password/reset", function () {
    UserPasswordResetController::resetView();
});


// user paths
Router::route_auth("GET", '/user', $authFunction, function () {
    ListingController::readAll();
});

// Listing CRUD & Email
Router::route_auth("GET", "/listing/create", $authFunction, function () {
    ListingController::create();
});

Router::route_auth("GET", "/listing/edit", $authFunction, function () {
    ListingController::edit();
});

Router::route_auth("POST", "/listing/edit", $authFunction, function () {
    if (ListingController::update())
        Router::redirect("/user");
});

Router::route_auth("GET", "/listing/delete", $authFunction, function () {
    ListingController::delete();
    Router::redirect("/user");
});

Router::route_auth("POST", "/listing/update", $authFunction, function () {
    if (ListingController::update())
        Router::redirect("/user");
});

Router::route("GET", "/pdf/{id}", function ($id) {
    PDFController::generatePDFCustomers($id);
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