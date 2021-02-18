<?php
/*
Below, we will manage request coming from HTML and link it with PARAMS => to do some 'action'
which will help us use this code for link params with CRUD
*/

// $do = "";
// if(isset($_GET['do'])){
//     $do = $_GET['do'];
// }else{
//     $do = 'manage';
// };

//you can write the above if condition in a modern way "CONDITION ? TRUE : FALSE"
// in case you type in the browser */page.php?blabla=blabla for example => you will be directed to manage page and be requested to go to link to add a new categories
$do = isset($_GET['do']) ? $_GET['do'] : 'manage';

//if the page is manage page
if ($do == 'manage'){
    echo 'welcome to manage page<br>';
    echo 'add new category by following the below link: <a href="page.php?do=add">Add Category</a>';
}
elseif($do == 'edit'){
    echo 'welcome to edit page';
}
elseif($do == 'add'){
    echo 'welcome to add page';
}
else{
    echo "<strong>ERROR there is no page with this name";
}