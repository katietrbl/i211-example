<?php
/**
 *Author: Katie Stinson
 *Date: 1/12/23
 *File: index.php
 *Description:
 */


//load application settings
require_once("application/config.php");

//load autoloader
require_once("vendor/autoload.php");

//load the dispatcher that dissects a request URL
new Dispatcher();

