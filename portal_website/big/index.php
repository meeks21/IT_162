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
        
            
        </section>
<!-- END LEFT COL -->


<!-- START RIGHT COL -->
        <aside>
            <h3>Client Questionaire Resources</h3>
            <ul>
                <li><a href="https://www.seoptimer.com/blog/website-design-questionnaire/" target="_blank">The Ultimate Website Design Questionnaire</a></li>
                <li><a href="https://contentsnare.com/website-design-questionnaire/" target="_blank">Create a Website Design Questionnaire</a></li>
                <li><a href="https://www.freelancewebprogrammer.com/blog/website-development-questionnaire/" target="_blank">Questions To Answer For Planning a Successful Website</a></li>
            </ul>
            
        </aside>
<!-- END RIGHT COL -->


<?php include "includes/footer.php"?>
