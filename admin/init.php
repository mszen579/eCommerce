<!-- this is the main file to call all libraries -->
<?php


// including the db connection
include 'connect.php';// to connect to db

//routes
$tpl =  'includes/templates/';  //the routes for templates directory
$css =  'layout/css/';//css directory 
$js =   'layout/js/';//java script directory
$lang = 'includes/languages/'; //language directory

//include important files
include $lang . 'english.php';//including english language
include $tpl . 'header.php';//including header

// excluding some pages from nav bar
if(!isset($noNavbar)){ include $tpl . 'navbar.php';}



        