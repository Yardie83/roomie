<?php

use domain\User;
use validator\UserValidator;

isset($this->user) ? $user = $this->user : $user = new User();
isset($this->userValidator) ? $userValidator = $this->userValidator : $userValidator = new UserValidator();
?>
<link rel="stylesheet" href="assets/registration/assets/css/Registration-Form-with-Photo.css">
<link rel="stylesheet" href="assets/registration/assets/css/styles.css">

<div class="register-photo">
    <div class="form-container">
        <form action="<?php echo $GLOBALS["ROOT_URL"]; ?><?php echo isset($this->pageFormAction) ? $this->pageFormAction : "/register"; ?>" method="post">
            <h2 class="text-center"><?php echo isset($this->pageHeading) ? $this->pageHeading : "<strong>Create</strong> an account. "; ?></h2>
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="Username" value="<?php echo $user->getUserName() ?>">
                <p class="help-block" style="color: rgb(244,71,107)"><?php echo $userValidator->getUserNameError() ?></p>
            </div>
            <div class="form-group">
                <input class="form-control" type="email" name="email" placeholder="Email" value="<?php echo $user->getEmail() ?>">
                <p class="help-block" style="color: rgb(244,71,107)"><?php echo $userValidator->getEmailError() ?></p>
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo $userValidator->getPasswordError() ?>">
                <p class="help-block" style="color: rgb(244,71,107)"><?php echo $userValidator->getPasswordError() ?></p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit"><?php echo isset($this->pageSubmitText) ? $this->pageSubmitText : "Sign up"; ?></button>
            </div>
        </form>
        <div class="image-holder"></div>
    </div>
</div>
