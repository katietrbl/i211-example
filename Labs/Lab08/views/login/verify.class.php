<?php
/*
 * Author: Katie Stinson
 * Date: march 29 23
 * Name: verify.class.php
 * Description: tell user if login is successful or failed, display links according to this
*/

class Verify extends View{

    public function display($result){
        parent::header();
        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
            <title>Verify Account</title>
            <link type="text/css" rel="stylesheet" href="includes/style.css"/>
        </head>

        <div>
            <?php
            if($result){
                echo "Your account has been verified!";
            } else {
                echo "Your account could not be verified, please try again";
            }
            ?>
        </div>

        <body>
        <h2>Input Account Login</h2>

        <table border="0">


        </table>

        </body>

        </html>

        <?php


        parent::footer();
    }
}