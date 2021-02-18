<!-- this is the main file to call all libraries -->
<?php


// including the db connection
include 'connect.php';// to connect to db

//routes
$tpl =  'includes/templates/';  //the routes for templates directory
$lang = 'includes/languages/'; //language directory
$func = 'includes/functions/'; //include function directory
$css =  'layout/css/';//css directory 
$js =   'layout/js/';//java script directory


//include important files after allocate the route for it
include $func . 'functions.php';//
include $lang . 'english.php';//including english language
include $tpl . 'header.php';//including header

// excluding some pages from nav bar
if(!isset($noNavbar)){ include $tpl . 'navbar.php';}



        