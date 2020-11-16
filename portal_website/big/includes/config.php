<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/



//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = '';

switch(THIS_PAGE){ 

    case 'index.php':
        $title = 'Kemar\'s Web Dev Resources';
        $logo = 'fa-code';
        $logo_color = 'style="color: rgb(28, 9, 48)"';
        $PageID = 'Client Questionaire';
    break;

    case 'flexbox.php':
        $title = 'Introduction to Flexbox';
        $logo = 'fa-code';
        $logo_color = 'style="color: rgb(28, 9, 48)"';
        $PageID = 'Flexbox';
    break;

    case 'galleries.php':
        $title = 'Galleries';
        $logo = 'fa-envelope';
        $logo_color = 'style="color: rgb(60, 21, 104)"';
        $PageID = 'Galleries and Sliders';
    break;

    case 'shoppingcarts.php':
        $title = 'Kemar\'s Web Dev Resources';
        $logo = 'fa-envelope';
        $logo_color = 'style="color: rgb(60, 21, 104)"';
        $PageID = 'Contact';
    break;

    case 'siteapp.php':
        $title = 'Kemar\'s Web Dev Resources';
        $logo = 'fa-envelope';
        $logo_color = 'style="color: rgb(60, 21, 104)"';
        $PageID = 'Contact';
    break;

    case 'webcam.php':
        $title = 'Kemar\'s Web Dev Resources';
        $logo = 'fa-envelope';
        $logo_color = 'style="color: rgb(60, 21, 104)"';
        $PageID = 'Contact';
    break;

    case 'map.php':
        $title = 'Kemar\'s Web Dev Resources';
        $logo = 'fa-envelope';
        $logo_color = 'style="color: rgb(60, 21, 104)"';
        $PageID = 'Contact';
    break;

    case 'calendar.php':
        $title = 'Kemar\'s Web Dev Resources';
        $logo = 'fa-envelope';
        $logo_color = 'style="color: rgb(60, 21, 104)"';
        $PageID = 'Contact';
    break;

    case 'youtube.php':
        $title = 'Kemar\'s Web Dev Resources';
        $logo = 'fa-envelope';
        $logo_color = 'style="color: rgb(60, 21, 104)"';
        $PageID = 'Contact';
    break;

    default:
    $title = THIS_PAGE;
    $logo = 'fa-code';
    $PageID = 'Welcome';
}







?>
