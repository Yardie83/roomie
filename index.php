<?php

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


// Password request path
Router::route("GET", "/password/request", function () {
    AgentPasswordResetController::requestView();
});

Router::route("POST", "/password/request", function () {
    AgentPasswordResetController::resetEmail();
    Router::redirect("/checkMail");
});

Router::route("GET", "/checkMail", function () {
    AgentPasswordResetController::checkEmailView();
});


// Password reset path
Router::route("POST", "/password/reset", function () {
    AgentPasswordResetController::reset();
    Router::redirect("/login");
});

Router::route("GET", "/password/reset", function () {
    AgentPasswordResetController::resetView();
});


// user paths
Router::route_auth("GET", '/user', $authFunction, function () {
    ListingController::readAll();
});

Router::route_auth("GET", "/user/edit", $authFunction, function () {
    AgentController::editView();
});

Router::route_auth("POST", "/user/edit", $authFunction, function () {
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

Router::route_auth("GET", "/listing/email", $authFunction, function () {
    EmailController::sendMeMyCustomers();
    Router::redirect("/");
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