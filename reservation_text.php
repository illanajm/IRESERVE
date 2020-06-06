<?php
include('database_connect.php');
include('reservation_function.php');
if(isset($_POST["operation"]))
{
	
	if($_POST["operation"] == "Edit")
	{
		require('textlocal.class.php');

        $textlocal = new Textlocal('jomarillana@gmail.com', 'Mayfive2015');

        $numbers = array($_POST['mobile']);
        $sender = 'TXTLCL';
        $otp = mt_rand(10000, 99999);
        $message =  "iRESERVE: Thankyou for prescribing, please present your verification number to your bus! VERIFICATION #: " . $otp;

            try {
                $result = $textlocal->sendSms($numbers, $message, $sender);
                setcookie('otp', $otp);
                echo "Verification code successfully send..";
            } catch (Exception $e) {
                die('Error: ' . $e->getMessage());
            }
        
        
		
	}
}




?>