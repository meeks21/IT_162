<?php include 'portal-config.php'?>
<!doctype html>
<html lang="en">
<head>
    <script src="https://use.fontawesome.com/4c9aa3438e.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css"/>
    <link rel="stylesheet" href="css/portal.css"/>
    <link rel="stylesheet" href="css/form.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    
    <title><?=$title?></title>
</head>


<body>
    <main class="wrapper">

        <header>

            <h1><a href="index.php"><i class="logo fa <?=$logo?>"<?=$logo_color?>></i> Kemar's SCC IT162 Portal</a></h1>

            <nav>
                <ul class="topnav" id="myTopnav">
                <?=makeLinks($nav1)?>
                  <!-- <li><a href="index.php" class="selected">Welcome</a></li>
                  <li><a href="big/index.php">Big</a></li>
                  <li><a href="fp/index.php">Final Project</a></li>
                  <li><a href="contactme.php">Contact Kemar</a></li> -->
                  <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
                </ul>
            </nav>
            
        </header>
        <section>
            <h2 class="pageID"><?=$PageID?></h2>  

<!-- START LEFT COL -->
