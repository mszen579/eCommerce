<!-- we use this built-in function "include" to include /templates/header.php, and other php files in each page -->
<?php 
include "init.php";
include $tpl . 'header.php';
include 'includes/languages/english.php';

//check if the user is coming from the http request NOT directly going to the page
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password);

// Check if the user exist in the DB using statement variable =$stmt

    $stmt = $con->prepare('SELECT username, password FROM users WHERE username=? AND password=? AND groupid=1');
    $stmt -> execute(array($username, $hashedPass));
    $count = $stmt->rowCount();

    //echo $count;

    if($count>0){
        echo '<h3 style="color:red;">' . 'welcome: ' . $username . '</h1>';
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


