 <?php
 /*  portal-config.php 

 Used to store all of the configuration information

 */

 //echo basename($_SERVER['PHP_SELF']);


 define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

 //echo THIS_PAGE;

 //die;

switch(THIS_PAGE){

    case 'index.php':
            $title = "Activated Productions";
            $headerClass= "main-header";
    break;

    case 'template.php':
            $title = "Template";
            $headerClass= "main-header";
    break;

    case 'work.php':

            $title = "Check out our work";
            $headerClass= "second-header";
    break;

    case 'services.php':

             $title = "Our Services";
             $headerClass= "second-header";
    break;

    case 'about.php':

            $title = "Work";
            $headerClass= "second-header";
    break;

    case 'contact.php':

        $title = "Contact Us";
        $headerClass= "main-header";
    break;

    default:
        $title = THIS_PAGE;
        $headerClass= "main-header";

}


// An associative array of nav items that will be used in the makeLinks function

$nav1['work.php'] = 'Work';
$nav1['services.php'] = 'Services';
$nav1['about.php'] = 'About';
$nav1['contact.php'] = 'Contact';

// here we are creating a function to generate links and keep the highlight on the current page

function makeLinks($nav1){
      
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