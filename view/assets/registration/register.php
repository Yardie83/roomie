    <title>registration</title>
    <link rel="stylesheet" href="assets/registration/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/registration/assets/css/styles.css">

    <div class="register-photo">
        <div class="form-container">
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password-repeat" placeholder="Password (repeat)">
                </div>
                <div class="form-group">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Gender <span class="caret"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#">Male </a></li>
                            <li role="presentation"><a href="#">Female </a></li>
                        </ul>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label class="control-label">
                            <input type="checkbox">I agree to the license terms.</label>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                </div>
            </form>
            <div class="image-holder"></div>
        </div>
    </div>
    <script src="assets/registration/assets/js/jquery.min.js"></script>
    <script src="assets/registration/assets/bootstrap/js/bootstrap.min.js"></script>
