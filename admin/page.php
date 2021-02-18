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

//you can write the above code in the if modern way

$do = isset($_GET['do'])? $do = $_GET['do'] : $do = 'manage';

//if the page is main page


if ($do == 'main'){
    echo 'welcome to add main';
    echo 'add new category by following the below link: <a href="/page.php/do=add">Add Category</a>'
}
elseif($do == 'edit'){
    echo 'welcome to edit page';
}
elseif($do == 'add'){
    echo 'welcome to add page';
}
else{
    echo '<h1>ERROR there is no page with this name</h1>';
}