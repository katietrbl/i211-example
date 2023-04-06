<?php
/*
 * Author: Katie Stinson
 * Date: march 29 23
 * Name: index_view.class.php
 * Description: the parent class for all view classes. The two functions display page header and footer.
Use HTML5 validation techniques to ensure all fields are required; the email field is
filled with an email address; and the password field is filled with 5 or more
characters.
• Use “post”, but not “get”, method to submit form data.
• The form should be sent to index.php along with the querystring variable called
action.
*/

class IndexView extends View{

    public function display(){
        parent::header();

    ?>

        <!--form-->
        <form action="index.php?action=register" method="post">
            <input name="username" type="text">
            <input name="password" type="text">
            <input name="email" type="text">
            <input name="fname" type="text">
            <input name="lname" type="text">

            <button type="submit">Submit</button>

        </form>

        <?php



        parent::footer();
    }



}