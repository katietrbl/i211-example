<?php
/*
 * Author: Katie Stinson
 * Date: march 29 23
 * Name: login.class.php
 * Description: display log in
*/

class Login extends View{

    public function display($result){
        parent::header();

        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
            <title>Log in to Your Account</title>
            <!--header-->
            <div class="top-row"></div>

            <!-- content -->
            <div class="middle-row">
                <form method="post" action="index.php?action=verify">
                    <p>Username: <input name="username" type="text"></p>
                    <p>Password: <input name="password" type="text"></p>
                    <button type="submit">Submit</button>
                </form>
            </div>

            <div class="bottom-row">
                <span style="float: left">Have an account?<a href="index.php?action=login">Log In</a> </span>
                <span style="float: left">Make an account!<a href="index.php">Create Account</a> </span>
            </div>
        </head>

        <div>
            <?php
            if($result){
                echo "You were logged in!";
            } else {
                echo "Your account could not be logged in, please try again";
            }
            ?>


        <?php
        parent::footer();
    }
}