<?php

/*
 * Created on Aug 18, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>

<div id='errorMessages'></div>
<form  class="contactform" name="contactform"  method="post"><!-- action="contact-confirmation"-->
  <label>Name:</label>
  <input type="text" name="name" value="Enter Your Name" onblur="if(this.value==''){this.value='Enter Your Name'}" onfocus="if(this.value=='Enter Your Name'){this.value=''}" class="input-txt" />
  <label>Email Address:<font color="red">*</font></label>
  <input type="text" name="email" value="Enter your Email Address" onblur="if(this.value==''){this.value='Enter your Email Address'}" onfocus="if(this.value=='Enter your Email Address'){this.value=''}" class="input-txt" />
  <label>Contact Number:<font color="red">*</font></label>
  <input type="text" name="contact_num" value="Enter your Contact Number" onblur="if(this.value==''){this.value='Enter your Contact Number'}" onfocus="if(this.value=='Enter your Contact Number'){this.value=''}" class="input-txt" />
  <label>Message:</label>
  <textarea name="txt_area" class="txt-area" onblur="if(this.value==''){this.value='Type in your message here...'}" onfocus="if(this.value=='Type in your message here...'){this.value=''}">Type in your message here...</textarea>
  <!--
  <br><br><center><img src="../EasyCaptcha/easycaptcha.php" /></center>
  <label>Enter code from above image:<font color="red">*</font></label>
  <input type="text" class="input-txt" name="confirm_code" /><br />
  -->
  <input type="image" src="../images/send-us-btn.png" class="button"  onClick="return submitContactUsForm()" />
  <input type="hidden" name="action" value="contactUs" />
</form>
