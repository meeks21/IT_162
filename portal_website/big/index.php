<?php include "includes/header.php"?>
<!-- START LEFT COL -->
     
          
           <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_includes.php'; #site keys & code here
    
        $toAddress = "anthony.meeks3@gmail.com";  //place your/your client's email address here
        $toName = "Kemar Meeks"; //place your client's name here
        $website = "TEST";  //place NAME of your client's website

        echo loadContact('multiple.php');#demonstrates a simple contact form


	    ?>
            <p class="bio">Develop and place an updated version of the "multiple.php" contact form (located in your web120 includes folder) on this main page. Adjust its fields to ask the basic questions you'd always need to ask any client to help determine if you can help them with their website needs.
            </p>


        </section>
<!-- END LEFT COL -->


<!-- START RIGHT COL -->
        <aside>
            <h3>Basic Website Design Cycle</h3>
        
            <p>Provide at least 3 (linked) resources that help you and/or your web team with steps found in very basic website design and development cycle. For example, client surveys, wireframing tools, etc.</p>
            <p>Here's a website to help get you started,<a href="https://business.tutsplus.com/articles/..." /> https://business.tutsplus.com/articles/...</p>
        </aside>
<!-- END RIGHT COL -->


<?php include "includes/footer.php"?>