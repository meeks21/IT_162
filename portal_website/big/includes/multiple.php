<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

<div>
    <label> Name:</label><br/>
    <input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
    
</div>

<div>	
    <label> Email:</label>
    <br />
    <input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    
</div>

<div>
    <label> What does your company do?</label>
    <br/>
    <input type="text" name="company_info" required="required" placeholder="" title="What does your company do?" tabindex="20" size="44" />
    
</div>

<div>
    <label> Who is your target audience?</label>
    <br/>
    <input type="text" name="target audience" required="required" placeholder="" title="Who is your target audience" tabindex="20" size="44" />   
</div>


<div>
    <label> Do you want your website to be optimized for SEO? </label><br/>
    <input type="radio" id="yes" name="optimized-yes" value="yes"/> Yes<br/>
    <input type="radio" id="no" name="optimized-no" value="no"/> No<br/>
</div>

<div>
    <label> If so do you have a list of keywords you’d like to target? </label><br/>
    <input type="radio" id="yes" name="keywords-yes" value="yes"> Yes<br/>
    <input type="radio" id="no" name="keywords-no" value="no"> No<br/>
</div>

<div>
    <label> Do you know what platform you want to use for your site? </label><br/>
    <input type="radio" id="yes" name="platform-yes" value="yes"> Yes<br/>
    <input type="radio" id="no" name="platform-no" value="no"> No<br/>
</div>

<div>
    <label> What goals do you have for your website? </label><br/>
    <textarea name="Goals" cols="36" rows="4" placeholder="Tell us about your goals for your website!" tabindex="60"></textarea>
</div>

<div>
    <label> What pages do you need on your website? </label><br/>
    <textarea name="Goals" cols="36" rows="4" placeholder="Tell us what pages you need on your website?" tabindex="60"></textarea>
</div>

<div>
    <label> What features do you need on your website? </label><br/>
    <textarea name="Goals" cols="36" rows="4" placeholder="Tell us what features do you need on your website?" tabindex="60"></textarea>
</div>

<div>
    <label> Do you have the content ready for your site? </label><br/>
    <input type="radio" id="yes" name="content-yes" value="yes"> Yes<br/>
    <input type="radio" id="no" name="content-no" value="no"> No<br/>
</div>

<div>
    <label> Does your company have a brand book covering things like colors and fonts? </label><br/>
    <input type="radio" id="yes" name="brand-yes" value="yes"> Yes<br/>
    <input type="radio" id="no" name="brand-no" value="no"> No<br/>
</div>

<div>
    <label> When would you like to launch your new site? </label><br/>
    <input type="text" name="launch_date" required="required"  title="launch_date" tabindex="10" size="44" autofocus />  
</div>

<div>
    <label> What is your budget for the website? </label><br/>
    <input type="text" name="launch_date" required="required"  title="launch_date" tabindex="10" size="44" autofocus />  
</div>

<div>
    <label>Do you need help updating and maintaining your website?</label><br/>
    <input type="radio" id="yes" name="maintaining-yes" value="yes"> Yes<br/>
    <input type="radio" id="no" name="maintaining-no" value="no"> No<br/>
</div>

<div>
    <label>Do you need help with blogging and content marketing?</label><br/>
    <input type="radio" id="yes" name="need-help-yes" value="yes"> Yes<br/>
    <input type="radio" id="no" name="need-help-no" value="no"> No<br/>
</div>

<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div>

<div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div>

    <div>	
    <fieldset>
        <legend>Would you like to join our mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div>
<div>	
    <label>Comments: <br />
    <textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>	
<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

