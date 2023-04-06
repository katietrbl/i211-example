<?php

/**
 * Author: Val Cinbat
 * Date: 3/30/2023
 * File: user_controller.class.php
 * Description: Creating the UserController class
 */
class UserController extends UserModel{
    //Declares private property
    private $userModel;

    //Default constructor
    public function __construct()
    {
        //Creates an instance of the UserModel class
        $this->userModel = userModel::getUserModel();
    }

    private static function qsv($parameter, string $queryStringKey)
    {
        if (!$parameter) {
            if (isset($_GET[$queryStringKey])) {
                $qsv = trim(htmlspecialchars($_GET[$queryStringKey]));
                if ($qsv != '') {
                    $parameter = $qsv;
                }
            }
        }
        return $parameter;
    }

    //Index action that displays all users
    public function index()
    {
        //Creates a new instance of the index view
        $view = new index();
        //Displays all users
        $view->display();
    }

    //Register action that creates a user account and stores data in database
    public function register()
    {
        $status = $this->userModel->add_user(); //Calls the add_user method and stores the status in a variable
    }

    //Login action that displays the login form
    public function login()
    {
        //Creates a new instance of the login view
        $view = new login();
        //Displays the login form
        $view->display();
    }

    //Verify action that verifies username and password in a database record
    public function verify()
    {
        //Calls the verify_user method and store the status in a variable
        $status = $this->user_model->verify_user();
        //Creates a new instance of the verify view
        $view = new VerifyUser();
        //Displays the VerifyUser view
        $view->display($status);
    }

    //Logout action that logs a user out of the system
    public function logout()
    {
        //Calls the logout method and stores the status in a variable
        $status = $this->userModel->logout();

        if ($status) { //If logout is successful,
            $view = new Logout(); //Creates a new instance of the logout view
            $view->display(); //Displays the logout view
        }
    }

    //Reset action that displays the password reset form
    public function reset()
    {
        //Creates a new instance of the reset view
        $view = new Reset();
        //Displays the reset view
        $view->display();
    }

    //DoReset action that resets the password by updating a database record
    public function DoReset()
    {
        //Calls the reset_password method and stores the status in a variable
        $status = $this->userModel->reset_password();
        //Creates a new instance of the ResetConfirm view
        $view = new ResetConfirm();
        //Displays the ResetConfirm view
        $view->display($status);
    }

    //Error action that displays the custom error page
    public function error()
    {
        //Creates a new instance of the UserError view
        $view = new UserError();
        ///Displays the custom error page
        $view->display();
    }
}