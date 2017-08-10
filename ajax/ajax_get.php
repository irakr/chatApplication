<?php
	require($_SERVER["DOCUMENT_ROOT"] . '\chatApplication\includes\functions\messengerchat.func.php');
	
	$msg = get_msg();
	//change this for loop do not forget
	foreach($msg as $element){
		echo '<strong> From:'.$element['sender'].'</strong><br/>';
		echo $element['message'].'<br/><br/><hr/>';
		
	}
?>