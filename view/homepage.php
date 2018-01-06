<?php
/**
 * Created by PhpStorm.
 * User: Yardie
 * Date: 05.01.2018
 * Time: 15:36
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header_loggedout</title>
    <link rel="stylesheet" href="header/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="header/assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="header/assets/css/Good-login-dropdown-menu.css">
    <link rel="stylesheet" href="header/assets/css/Good-login-dropdown-menu1.css">
    <link rel="stylesheet" href="header/assets/css/styles.css">
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header"><a href="#" class="navbar-brand navbar-link">Roomie</a>
            <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown open"><a data-toggle="dropdown" aria-expanded="true" href="#"
                                             class="dropdown-toggle">Login</a>
                    <ul role="menu" class="dropdown-menu">
                        <form action="<?php echo $GLOBALS["ROOT_URL"]; ?>/login" method="post">
                            <div class="form-group">
                                <input type="email" class="input-login" name="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="input-login" name="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default login" type="submit">Login</button>
                            </div>
                            <div class="form-group">
                                <div class="checkbox checkbox-success">
                                    <label>
                                        <input class="styled" type="checkbox" name="remember"/>Remember me?
                                    </label>
                                </div>
                            </div>
                        </form>
                        <div class="remember">
                            <a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/password/request">Reset password</a>
                        </div>
                        <div class="register">
                            <a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/register">Register</a>
                        </div>
        </div>
        </ul>
        </li>
        </ul>
    </div>
    </div>
</nav>
<script src="header/assets/js/jquery.min.js"></script>
<script src="header/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
