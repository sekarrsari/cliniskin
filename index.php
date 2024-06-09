<?php
// Enable error reporting
error_reporting(E_ALL);

session_start();
// Display errors on screen
ini_set('display_errors', 1);
date_default_timezone_set('Asia/Jakarta');
include_once 'app/config/static.php';
include_once 'app/config/env.php';
include_once 'models/main.php';
include_once 'controllers/main.php';
include_once 'function/main.php';
include_once 'controllers/routes.php';
new Router();