<!doctype html>
<html lang="en">

<?php
include('head.php');
?>
<title>Login</title>

<body>
    <div class="container font_jost mb-180">
        <div class="row mt-120">
            <div class="col-md-4 mx-auto">
                <div class="row">
                    <div class="col-md-12">
                        <a class="dec_none" href="index.php"><h1 class="h1_login">better<span class="h1_login_seo">SEO</span></h1></a>
                    </div>
                    <div class="col-md-12 mt-80">
                        <p class="welcome_text">Welcome Back..!</p>
                    </div>
                    <div class="col-md-12 mb-12">
                        <p class="singin_text">Sign in to your account</p>
                    </div>
                    <!--  -->
                    <form action="#" method="post">
                        <div class="form-group mb-0">
                            <label class="label_login" for="name">Full Name<span class="red_asterik">*</span></label><br>
                            <input type="text" class="input_login width_available" placeholder="samantha1234@gmail.com "
                                id="name">
                        </div>

                        <div class="form-group mb-0">
                            <label class="label_login" for="email">Email<span class="red_asterik">*</span></label><br>
                            <input type="text" class="input_login width_available" placeholder="samantha1234@gmail.com "
                                id="email">
                        </div>
                        <div class="form-group mb-0">
                            <label class="label_login" for="password">Password<span class="red_asterik">*</span></label><br>
                            <input type="password" class="input_login width_available" placeholder="************"
                                id="password">
                        </div>

                        <div class="form-group mb-0">
                            <label class="label_login" for="cnfrm_pass">Confirm Password<span class="red_asterik">*</span></label><br>
                            <input type="password" class="input_login width_available" placeholder="************"
                                id="cnfrm_pass">
                        </div>



                        <div class="d-sm-flex align-items-center m_after_input_login">
                            <input class="rembr_box" type="checkbox" checked="checked" />
                            <label class="control control--checkbox rembr_txt"><span class="caption">Remember
                                    me</span>

                                <div class="control__indicator"></div>
                            </label>
                            <span class="ml-auto"><a href="#" class="frgt_text">Forgot Password</a></span>
                        </div>

                        <input type="submit" value="Create New Account" class="login_btn_form width_available">
                        <div class="text_aft_btn_login">Already have an account? <a href="login.php"
                                class="signup_login_txt">Signin</span></a></div>


                    </form>
                    <!--  -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>