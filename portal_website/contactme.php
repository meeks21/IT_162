    <?php include "includes/header.php";?>
           
           <!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
        <section>
        <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "anthony.meeks3@gmail.com";  //place your/your client's email address here
        $toName = "Kemar Meeks"; //place your client's name here
        $website = "TEST";  //place NAME of your client's website

        echo loadContact('myform.php');#demonstrates a simple contact form


	    ?>
        </section>


    <?php include "includes/footer.php";?>