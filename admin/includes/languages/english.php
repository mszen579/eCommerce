<?php

function lang($phrase){
    //static => as this function is a static so the system will not call it every time we do something.
    static $lang = array(
    //we put the    'key'   => 'value'

    //dashboard words:

        "HOME_ADMIN"    => "Home",
        "Edit profile"  => "Edit Profile",
        "Sittings"      => "Edit Sittings",
        "Logout"        => "Log out",
        "Categories"    => "Categories",
        "Options"       => "Options",
        "Items"         => 'Items',
        "Members"       => 'Members',
        "Statistics"    => 'Statistics',
        "Logs"          => 'Logs',
    );
    return $lang[$phrase];
};


