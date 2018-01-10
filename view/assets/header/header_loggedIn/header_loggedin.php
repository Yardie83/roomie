<?php


use service\AuthServiceImpl;

$user = AuthServiceImpl::getInstance()->readUser();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomie</title>
    <link rel="stylesheet" href="assets/header/header_loggedin/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/header/header_loggedin/assets/css/styles.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

    <nav class="navbar navbar-default navigation-clean-search" style="height:66px;">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/" data-bs-hover-animate="wobble" style="font-weight:bold;font-size:30px;padding:15px;height:50px;margin:6px;color:rgb(244,71,107);">Roomie </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown" style="height:66px;"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="padding: 20px;margin-top:1px;"><?php echo $user->getUserName()?> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/editProfile">Edit Profile</a></li>
                            <li role="presentation"><a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/listing/create">Create Ad</a></li>
                            <li role="presentation"><a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/agent">My Ads</a></li>
                            <li role="presentation"><a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/logout">Logout </a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav" style="height:66px;">
                    <li role="presentation" style="height:60px;margin:5px 5px;"><a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/search" style="margin:15px;padding: 17px 15px 17px 15px;">Search </a></li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="assets/header/header_loggedin/assets/js/jquery.min.js"></script>
    <script src="assets/header/header_loggedin/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/header/header_loggedin/assets/js/bs-animation.js"></script>


