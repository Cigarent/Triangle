<?php
	$name = $_POST["name"];
	$email = $_POST["email"];

	$name = clean_input( $name );
	$email = clean_input( $email );

	const FILENAME = "res/mailingList.csv";

	if(!file_exists(FILENAME)){
	    file_put_contents(FILENAME, "name,email\n");
	}

	$txt = $name.",".$email.$PHP_EOL;

	file_put_contents(FILENAME, $txt.PHP_EOL , FILE_APPEND);

	$message_text = "This is a robotic communication informing you that " . $name . " has subscribed to our mailing list. His email address is " . $email . ".\n\nSincerely,\n\nThe Fruitoftheloins Bot";

	$recipients = "smcmanus2@wisc.edu";

	mail($recipients, "New Potential", $message_text);

	return;

	function clean_input($data) {
  		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
  		return $data;
	}
?>
