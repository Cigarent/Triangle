<?php
        session_start();
	$name = $_POST["first_name"]." ".$_POST["last_name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$comment = $_POST["comment"];
	$date = date('Y-m-d');

	$name = clean_input( $name );
	$email = clean_input( $email );

        include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';

        $securimage = new Securimage();
        if ($securimage->check($_POST['captcha_code']) == false) {
          echo "The security code entered was incorrect.<br /><br />";
          echo "Please go <a href='javascript:history.go(-1)'>back</a> and try again.";
          exit;
        }
	const FILENAME = "res/mailingList.csv";

if(!file_exists(FILENAME)){
	$handle = fopen(FILENAME, 'w') or die('Cannot open file:  '.FILENAME);
	fwrite($handle, "Name, Email, Phone, Date, Comment\n");
}else{
	$handle = fopen(FILENAME, 'a') or die('Cannot open file:  '.FILENAME);
}
	fwrite($handle, "$name, $email, $phone, $date, $comment.\n");
	fclose($handle);

	$message_text = "This is a email informing you that a new potential- $name has subscribed to our mailing list. His email address: $email.";

	if($phone!=""){
		$message_text.=" PHONE NUMBER is $phone.";
	}

	// $recipients = "smcmanus2@wisc.edu";
	$recipients = "xhe66@wisc.edu, klare@wisc.edu, bgross3@wisc.edu, rtang37@wisc.edu";

	mail($recipients, "[Triangle Fraternity] New Potential", $message_text, $headers = 'From: recruitment@wis.triangle.org');

	header("Location: rush.php");

	function clean_input($data) {
  		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
  		return $data;
	}

?>
