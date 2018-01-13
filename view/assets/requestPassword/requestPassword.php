<link rel="stylesheet" href="view/assets/requestPassword/assets/css/Registration-Form-with-Photo.css">
<link rel="stylesheet" href="view/assets//requestPassword/assets/css/styles.css">

<div class="register-photo" style="background-color:rgb(252,253,254);">
    <div class="form-container">
        <form action="<?php echo $GLOBALS["ROOT_URL"]; ?>/password/request" method="post">
            <h2 class="text-center">Request a new password</h2>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email"
                                   style="width:372px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group"></div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-5 col-md-offset-3">
                        <div class="form-group" style="width:280px;">
                            <button class="btn btn-primary btn-block" type="submit"
                                    style="width:122px;margin-top:0px;height:30px;padding-top:5px;">Send
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>