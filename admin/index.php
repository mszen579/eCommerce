<!-- we use this built-in function "include" to include header and footer in each page -->
<?php 
include "init.php";
include $tpl . 'header.php';
include 'includes/languages/english.php';
?>



<?php
// We have called the function "lang" from the english.php
echo '<h1 style="color:red;">'. lang('MESSAGE') .' ' . lang('ADMIN') . '</h1>'; 

?>



<?php include $tpl . "footer.php"; ?>