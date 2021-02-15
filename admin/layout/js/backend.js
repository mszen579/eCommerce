// jquery function

$(function(){
    'use strict';

    //hide placeholder on focus
    $('[placeholder]').focus(function(){
        $(this).attr('data-text', $(this).attr('placeholder'));

        $(this).attr('placeholder', '');

        }).blur(function(){
        $(this).attr('placeholder', $(this).attr('data-text'));
    });
});


//alert("Hello! I am an alert box!!");