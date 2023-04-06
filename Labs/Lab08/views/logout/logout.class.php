<?php
/*
 * Author: Katie Stinson
 * Date: march 29 23
 * Name: logout.class.php
 * Description: display confirmation message to logout
*/
class Logout extends View{

    public function display()
    {
        parent::header();

        if($result){
            echo "You are now logged out!";
        }

        parent::footer();
    }
}