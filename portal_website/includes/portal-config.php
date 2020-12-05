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
        $title = 'Kemar\'s Portal Page';
        $logo = 'fa-code';
        $logo_color = 'style="color: rgb(28, 9, 48)"';
        $PageID = 'Welcome';
    break;

    case 'contactme.php':
        $title = 'Contact Kemar';
        $logo = 'fa-envelope';
        $logo_color = 'style="color: rgb(60, 21, 104)"';
        $PageID = 'Contact';
    break;

    default:
    $title = THIS_PAGE;
    $logo = 'fa-code';
    $PageID = 'Welcome';
}

$nav1['index.php'] = 'Welcome';
$nav1['big/index.php'] = 'Big';
$nav1['fp/index.php'] = 'Final Project';
$nav1['contactme.php'] = 'Contact Kemar';
$nav1['https://docs.google.com/document/d/1IoE9NOLgAzzqIK2QPTaaRn5t4Vq2vINusyyGw9ZMJkQ/edit?usp=sharing'] = 'Flowchart & WireFrame';

/*here were creating a function to generate links and keep the highlght on the current page
<li><a href="index.php" class="selected">Welcome</a></li>
                  <li><a href="big/index.php">Big</a></li>
                  <li><a href="fp/index.php">Final Project</a></li>
                  <li><a href="contactme.php">Contact Kemar</a></li>
*/

function makeLinks($nav1)
{ 
    $myReturn = '';
    foreach($nav1 as $url => $text){

        if($url == THIS_PAGE){

            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";

        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }

        

    }
    return $myReturn;
}











?>
