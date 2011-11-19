<?php


/*
 * Created on Jul 6, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 require_once ("../constants/Constants.php");
 
 $constants=new Constants();
 
?>
<script language="javascript" src="../js/GYKUtils.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

<div id="header">
	  <img src="/images/headerLeft.jpg" align="left" alt="" /><img src="/images/headerRight.jpg" align="right" alt="" /><a href="http://getyourvenue.com"><img src="/images/logo.png" class="logo" alt="Get Your Venue, Wedding Venues in Delhi NCR" /></a><img src="/images/hotlinenumber.png" class="hotlineNum" alt="Get Your Venue, Marriage Venues in Delhi NCR" />
      <div class="headerSlogan"><span>Book Your Venue Through Experts,</span> Best Deal Guaranteed</div>
      <div class="topNav"><img src="/images/topNavleft.jpg" align="left" alt="" /><img src="/images/topNavRight.jpg" align="right" alt="" />
        <ul>
          <li><a href="<?php echo $constants->DOMAIN_URL?>">Home</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL.'about-us'?>">About Us</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL.'allied-services'?>">Our Allied Services</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL.'addvenue'?>">Add Your Venue</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL.'non_wedding'?>">Non-Wedding Venues</a></li>
          <li><a href="<?php echo $constants->DOMAIN_URL.'book_now'?>">Book Now</a></li>
          <li class="last"><a href="<?php echo $constants->DOMAIN_URL.'contact_us'?>">Contact Us</a></li>
        </ul>
      </div>
    </div>
