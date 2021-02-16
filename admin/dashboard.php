<?php 
//always start with session 
session_start();
if(isset($_SESSION['username'])){

    include 'init.php';

    echo 'welcome ';

    include $tpl . "footer.php";
}else{
    // echo 'Your are not authorized to view this page';

    //to redirect non authorized users to index page
    header ('location: index.php'); //route
    exit();
}