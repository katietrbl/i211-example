<?php
/*
 * Author: Katie Stinson
 * Date: march 29 23
 * Name: register.class.php
 * Description:
*/

class Register extends View{

    public function display($result){
        parent::header();

        ?>
        <!DOCTYPE HTML>
        <html>
        <head>
        <title>Register Account</title>
        <link type="text/css" rel="stylesheet" href="includes/style.css"/>
        </head>

        <div>
        <?php
        if($result){
            echo "Your account has been created!";
        } else {
            echo "Your account could not be created, please try again";
        }
        ?>
        </div>

        <body>


        <table border="0">


        </table>

        </body>

        </html>

<?php
        parent::footer();
    }
}
?>