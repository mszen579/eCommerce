<?php

function lang($phrase){
    //static => as this function is a static so the system will not call it every time we do something.
    static $lang = array(
    //    'key'   => 'value'
        'MESSAGE' => 'Welcome',
        'ADMIN' => 'Administrator'

    );
    return $lang[$phrase];
};


