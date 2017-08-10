<?php
	
	require ($_SERVER["DOCUMENT_ROOT"] . '\chatApplication\includes\database\messengerconnect.db.php');
	
	function get_msg(){
		global $connection;
		/*Note to self: In the implementation this function will only return messages as per the selected friend.
		  Add a WHERE clause to the query*/ 
		$query="SELECT Sender,Message,Reciever FROM chat";
		
		$run= mysqli_query($connection,$query) or die("Query could not be processed:".mysqli_error($connection));
		
		$messages = array();
		
		while($row = mysqli_fetch_assoc($run)){
			$messages[] = array('sender'=>$row['Sender'],'message'=>$row['Message'],'reciever'=>['Reciever']);
		}
		
		return $messages;
	}
	function send_msg($sender,$message,$reciever){
		global $connection;
		if(!empty($sender) && !empty($message) && !empty($reciever))
		{
			$sender= mysqli_real_escape_string($connection,$sender);
			$message= mysqli_real_escape_string($connection,$message);
			$reciever= mysqli_real_escape_string($connection,$reciever);
			
			$query="INSERT INTO chat (Msg_ID,Sender,Message,Reciever,Msg_Time)VALUES(null,'$sender','$message','$reciever',null)";
			if($run = mysqli_query($connection,$query) or die("Query could not be processed".mysqli_error($connection))){
				return true;
			}else{
				return false;
			}
		
		}else{
			return false;
		}
	}
?>