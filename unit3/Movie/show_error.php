<?php

/*
 * Author: your name
 * Date: today's date
 * File: show_error.php
 * Description: this script displays an error message.
 */
require_once 'classes/show_error.class.php';

//retrieve the error message from a querystring variable
$message = $_GET['eMsg'];

//create an Error object and then display the error message
$error = new ShowError();
$error->display($message);