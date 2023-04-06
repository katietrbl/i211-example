<?php
/*
 * Author: Katie Stinson
 * Date: march 29 23
 * Name: register.class.php
 * Description: display password reset FORM if user is logged in. should automatically fill the fields using cookie created when the user logs in
 * the user name field should be READ ONLY
 * form should use post method
 * if user isnt logged in, display error message
*/
class Reset extends View{

    public function display($result){
        parent::header();

        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
            <title>Register Account</title>
            <link type="text/css" rel="stylesheet" href="includes/style.css"/>
        </head>

        <!--header-->
        <div class="top-row"></div>

        <!-- content -->
        <div class="middle-row">
            <form method="post" action="index.php?action=do_reset">
                <p>Username: <input name="username" type="text"></p>
                <p>Password: <input name="password" type="text"></p>
                <button type="submit">Submit</button>
            </form>
                </div>

        <div class="bottom-row">
            <span style="float: left">Have an account?<a href="index.php?action=login">Log In</a> </span>
            <span style="float: left">Make an account!<a href="index.php">Create Account</a> </span>
        </div>

            <?php
            if($result){
                echo "Your password has been created!";
            } else {
                echo "Your password could not be reset, please try again";
            }
            ?>


        <?php
        parent::footer();
    }
}