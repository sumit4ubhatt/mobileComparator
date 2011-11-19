<?php

/* Begin easycaptcha validate code */
if (isset($_REQUEST['confirm_code']))
{
        if ( isset($_COOKIE['Captcha']) )
        {
		list($Hash, $Time) = explode('.', $_COOKIE['Captcha']);
                if ( md5("OASDOIJQWOIJDASDOI".$_REQUEST['confirm_code'].$_SERVER['REMOTE_ADDR'].$Time) != $Hash )
                {
                        print "Confirm code is wrong.";
                }
		elseif( (time() - 5*60) > $Time)
		{
			print "Captcha code is only valid for 5 minutes";
		}
		else
		{
			print "Correct Captcha";
		}
	}
        else
        {
                print "No captcha cookie given. Make sure cookies are enabled.";
        }
}
/* End easycaptcha validate code */
?>