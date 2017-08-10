<?php
	
	require($_SERVER["DOCUMENT_ROOT"] . '\chatApplication\includes\functions\messengerchat.func.php');
	
	/*the echoes in this page will output to this page and not in index.php.
	
	And everytime we try to five this page's URL we get redirected to index.php 
	that is why these echo messages will not be displayed.
	
	For eg: If the vallues are empty, the send_msg() function won't work. This prevents insertion in the database.  
	It would return false, which would then cause the printing of 'Message not sent' which will not be displayed in index.php.

	Note: This trick only works when the form handling page is on the same directory as the page with the form.
	*/ 
	
	/* This file is no longer named form_handling because of ajax. We won't need to redirect to index.php. We simply use ajax to set the innerhtml of the object*/
	
	if(!empty($sender = $_GET['sender']) && !empty($message = $_GET['message']) && !empty($reciever = $_GET['reciever'])){
		
		if(send_msg($sender, $message, $reciever)){
			echo 'Message Sent';
		}else{
			echo 'Message Not Sent';
		}
	}else{
		echo 'Please fill out all the input fields';
	}
	
	//header('Location:index.php');
?>