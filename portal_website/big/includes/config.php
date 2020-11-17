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
        $logo_color = 'style="color: #f4f6f9)"';
        $PageID = 'Client Questionaire';
    break;

    case 'flexbox.php':
        $title = 'Introduction to Flexbox';
        $logo = 'fa-fw fa-cube';
        $logo_color = 'style="color: #f4f6f9)"';
        $PageID = 'Flexbox';
    break;

    case 'galleries.php':
        $title = 'Galleries';
        $logo = 'fa-fw fa-camera-retro';
        $logo_color = 'style="color: #f4f6f9"';
        $PageID = 'Galleries and Sliders';
    break;

    case 'shoppingcarts.php':
        $title = 'Shopping Carts';
        $logo = 'fa-fw fa-shopping-basket';
        $logo_color = 'style="color: #f4f6f9"';
        $PageID = 'Shopping Carts';
    break;

    case 'siteapp.php':
        $title = 'Responsive vs. Mobile';
        $logo = 'fa-fw fa-html5';
        $logo_color = 'style="color: #f4f6f9"';
        $PageID = 'Responsive Websites and Mobile Apps';
    break;

    case 'webcam.php':
        $title = 'Live Web Cam';
        $logo = 'fa-fw fa-eye';
        $logo_color = 'style="color: #f4f6f9"';
        $PageID = 'NASA Earth From Space - Earth Viewing cameras ISS feed';
    break;

    case 'map.php':
        $title = 'Google Maps';
        $logo = 'fa-fw fa-map-o';
        $logo_color = 'style="color: #f4f6f9"';
        $PageID = 'Embed Responsive Map';
    break;

    case 'calendar.php':
        $title = 'Responsive Calendar';
        $logo = 'fa-fw fa-calendar';
        $logo_color = 'style="color: #f4f6f9"';
        $PageID = 'Calendar';
    break;

    case 'youtube.php':
        $title = 'Responsive YouTube';
        $logo = 'fa-fw fa-youtube-square';
        $logo_color = 'style="color: #f4f6f9"';
        $PageID = 'Website Accessibility and why it\'s important';
    break;

    default:
    $title = THIS_PAGE;
    $logo = 'fa-code';
    $PageID = 'Welcome';
}







?>
