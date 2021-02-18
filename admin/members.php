<?php

/*
- Manage members
- Add | Edit | Delete members
*/

/* we will copy the code from dashboard and paste it here as a start. dashboard.php is considered as a template for most of the pages because it has:
1- start session
2- If: there is a user logged in then  include the init.php and footer.php
3- Else: redirect to index.php
*/

session_start();
if(isset($_SESSION['username'])){

    include 'init.php';

    // like what we have done in the page.php page
    $do = isset($_GET['do']) ? $_GET['do'] : 'manage';
    // start the manage page
    if ($do == 'manage'){
       // manage page;
    }elseif($do == 'Edit'){
        //edit page;
        echo 'welcome to members edit page' . 'your id is: ' . $_GET['userid'];    
    }
    include $tpl . "footer.php";

}else{
    //to redirect non authorized users to index page
    header ('location: index.php'); //route
    exit();
}