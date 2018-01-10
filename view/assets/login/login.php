    <title>loginPage</title>
    <link rel="stylesheet" href="assets/login/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/login/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/login/assets/css/styles.css">

    <div class="login-clean" style="background-color:rgb(254,254,254);">
        <form action="<?php echo $GLOBALS["ROOT_URL"]; ?>/login" method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-log-in"></i></div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label class="control-label">
                        <input type="checkbox" name="remember" />Remember me for 30 days</label>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Log In</button>
            </div><a href="<?php echo $GLOBALS["ROOT_URL"]; ?>/password/request" class="forgot">Forgot your password?</a>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
