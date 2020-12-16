<?php include 'portal-config.php'?>
<!-----------------Makes a reference to portal-config.php------------------->

<!------------------------- Header Starts Here ----------------------------->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="noindex,nofollow">
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/grid.css">
        <link rel="stylesheet" type="text/css" href="resources/css/nav.css">
        <link rel="stylesheet" type="text/css" href="resources/css/form.css">
        <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
        <link rel="stylesheet" type="text/css" href="resources/css/video.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
        <title><?=$title?></title>
    </head>

    <body>
        <header class="<?=$headerClass?>">   
            <nav>
                <div class="row">
                    <a href="index.php">
                        <img src="resources/images/AP_logo366x351.png" alt="logo" class="logo full-logo">
                    </a>
                    <ul class="main-nav js--main-nav">
                        <?=makeLinks($nav1)?>
                        
                    </ul>
                    

                    <a class="mobile-nav-icon js--nav-icon"><ion-icon name="menu"></ion-icon></a>
                </div>
            </nav>
            
            
<!------------------------- Heaer Ends Here ----------------------------->  