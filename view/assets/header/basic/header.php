<?php



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roomie</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/header/basic/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/header/basic/assets/css/styles.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

<div>
    <nav class="navbar navbar-default navigation-clean-search" style="height:66px;">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/" data-bs-hover-animate="wobble" style="font-size:30px;font-weight:bold;font-style:normal;margin:6px;height:50px;color:rgb(244,71,107);">Roomie </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav"></ul>
                <p class="navbar-text navbar-right" style="width:160px;margin-right:-30px;height:66px;margin-top:0px;padding-top:23px;">
                    <a class="navbar-link login" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/login">Log In</a>
                    <a class="navbar-link login" href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register" style="padding-top:0px;padding-right:20px;">Register </a> </p>
                <ul class="nav navbar-nav" style="height:66px;">
                    <li role="presentation" style="margin:5px 5px;height:60px;"><a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/search" style="padding-top:17px;">Search </a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<script src="assets/header/basic/assets/js/jquery.min.js"></script>
<script src="assets/header/basic/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/header/basic/assets/js/bs-animation.js"></script>
