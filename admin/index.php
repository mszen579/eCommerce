<!-- we use this built-in function "include" to include /templates/header.php, and other php files in each page -->
<?php 
include "init.php";
include $tpl . 'header.php';
include 'includes/languages/english.php';
?>


<!-- login form -->
<form class='login'>
<h4 class="text-center">Admin Login</h4>
    <!-- use auto complete = off => for google not to complete -->
    <input type="text" class='form-control form-control-lg' name='user' placeholder="Username" autocomplete="off"/>
    <!-- use new-password for google not to fill the password -->
    <input type="password" class='form-control form-control-lg' name='pass' placeholder="Password" autocomplete="new-password"/>
    <input type="submit" class='btn btn-primary btn-lg' value="Login" />
</form>


<!-- we use this built-in function "include" to include /templates/footer.php in each page -->
<?php include $tpl . "footer.php"; ?>


