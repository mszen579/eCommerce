<?php

$do = "";


if(isset($_GET['do'])){

    $do = $_GET['do'];
}else{
    $do = 'manage';
}

echo $do;
