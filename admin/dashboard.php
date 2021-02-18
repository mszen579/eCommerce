<?php 
//always start with session 
session_start();
if(isset($_SESSION['username'])){
    $pageTitle = 'Dashboard';
    include 'init.php';

    // to display the user session
    print_r($_SESSION);
    include $tpl . "footer.php";

}else{
    // echo 'Your are not authorized to view this page';

    //to redirect non authorized users to index page
    header ('location: index.php'); //route
    exit();
}