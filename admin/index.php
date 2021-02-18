<!-- we use this built-in function "include" to include /templates/header.php, and other php files in each page -->
<?php 
//always start with session 
session_start();
//excluding NAVBAR using variable
$noNavbar = '';
//including a function from functions.php for page title
$pageTitle = 'login';

if(isset($_SESSION['username'])){
     //location:dashboard.php is route => should forward the user after logging in to another page Ex. dashboard.php
     header ('location: dashboard.php');
}
//to check the session you can use print_r function
//print_r($_SESSION);
include "init.php";


//check if the user is coming from the http request NOT directly going to the page
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password);

// Check if the user exist in the DB using statement variable =$stmt

    $stmt = $con->prepare('SELECT
                                userid, username, password 
                           FROM 
                                users 
                           WHERE 
                                username=? 
                           AND 
                                password=? 
                           AND 
                                groupid=1
                           LIMIT 1');
    $stmt -> execute(array($username, $hashedPass));
    // we need to fetch the logged in user to allow use to edit his information 
    $row = $stmt -> fetch();
    $count = $stmt->rowCount();

    //echo $count;

    if($count>0){
        $_SESSION['username'] = $username;      // logged in user session and register it
        $_SESSION['ID'] = $row['userid'];   // Register session for userid
        header ('location: dashboard.php');
        exit();//to prevent any error
    }
    else{
        echo '<h3 style="color:red;">'. ' Sorry we do not have any admin with this username and password ' . '</h1>';
    }


    //just to check the post method
    //echo $hashedPass . ' ' . $password;
}


?>



<!-- login form -->
<!-- to send the information from this form inside PHP server -->
<form class='login' action='<?php echo $_SERVER['PHP_SELF']?>' method="POST">
<h4 class="text-center">Admin Login</h4>
    <!-- use auto complete = off => for google not to complete -->
    <input type="text" class='form-control form-control-lg' name='user' placeholder="Username" autocomplete="off"/>
    <!-- use new-password for google not to fill the password -->
    <input type="password" class='form-control form-control-lg' name='pass' placeholder="Password" autocomplete="new-password"/>
    <input type="submit" class='btn btn-primary btn-lg' value="Login" />
</form>


<!-- we use this built-in function "include" to include /templates/footer.php in each page -->
<?php include $tpl . "footer.php"; ?>


