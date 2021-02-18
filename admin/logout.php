<?php
//start the session
session_start();

//unset db for the user 
session_unset(); //or you can use=> $_SESSION = array();

//destroy the session and normally we do action after that 
session_destroy();

//after destroy the session we will direct the user to index.php
header('location:index.php'); 