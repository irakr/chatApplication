<?php
	require($_SERVER["DOCUMENT_ROOT"] . '\chatApplication\includes\messengercore.inc.php');
?>
<!--https://github.com/Zim95/chatApplication.git-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>DevWorks-Messenger</title>

		<!-- Bootstrap -->
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		
		<!--Custom css-->
		<link href="css/messengerstyle.css" rel="stylesheet"/>
	
	</head>
	<body>
		<div class="container">
			<div class="rows">
				<div class="hidden-xs hidden-sm col-md-3" id="column1">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-9" id="column2">
					<div class="rows">
						<div class="col-xs-12">
							<div id="feedback">
							</div>
							<div id="messages">
							</div>
						</div>
					</div>
					<div class="rows">
						<div class="col-xs-12">
							<form id="messengerform">
								Name:<input type="text" id="sender" name="sender"/>
								To:<input type="text" id="reciever" name="reciever"/><br/><br/>
								<textarea id="message" name="message"></textarea><br/>
								<input type="submit" class="btn btn-warning"name="send" id="send_button" value="Send Message"/>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--bootstrap jquery for bootstrap and also for our own purposes-->
		<script src="Bootstrap/js/jquery.js"></script>
		
		<!--Custom jquery file for form handling-->
		<script src="ajax/ajax_get.js"></script>
		<script src="ajax/ajax_post.js"></script>
		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="Bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>