<?php

// 1- creating a function that echo the page title in case the page has a dynamic name => $pageTitle and echo a default title for all other pages

function getTitle(){
    // we have used global => to allow the below variable to be accessible in all pages
    global $pageTitle;

    if(isset($pageTitle)){
         echo $pageTitle;
    }
    else{
        echo 'page with no title';
    } 
}