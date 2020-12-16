<?php include 'includes/header.php';?>        
            <div class="row form-box">
                <?php
                /*
                * Below are 2 different forms to be re-used       
                * 
                * Only use one at a time, comment out the other!       
                *
                */

                include 'includes/contact_include.php'; #site keys & code here
            
                $toAddress = "anthony.meeks3@gmail.com";  //place your/your client's email address here
                $toName = "Contact Form Submission"; //place your client's name here
                $website = "www.activated.productions";  //place NAME of your client's website

                //echo loadContact('simple.php');#demonstrates a simple contact form
                echo loadContact('multiple.php');#demonstrates multiple form elements

                ?>
            </div>
        </header>
<?php include 'includes/footer.php';?>