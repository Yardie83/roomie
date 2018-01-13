<?php

use view\TemplateView;

?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enterPassword</title>
    <link rel="stylesheet" href="view/assets/resetPassword/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/assets/resetPassword/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="view/assets/resetPassword/assets/css/styles.css">


    <div class="register-photo" style="background-color:rgb(252,253,254);">
        <div class="form-container">
            <form action="<?php echo $GLOBALS["ROOT_URL"]; ?>/password/reset" method="post">
            <h2 class="text-center">Reset your password</h2>
            <input type="hidden" name="token" value="<?php echo TemplateView::noHTML($this->token); ?>"/>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <input class="form-control" type="password" name="password" placeholder="Password" style="width:372px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group"></div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-3">
                            <div class="form-group" style="width:280px;">
                                <button class="btn btn-primary btn-block" type="submit" style="width:122px;margin-top:0px;height:30px;padding-top:5px;">Reset </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

