/* For this to work, you'll need to add id to the form. select their value by the ID and then use POST, since we're not using mthod='post' in the form*/

$(document).ready(function(){
	$('#messengerform').submit(function(){
		var sender = $('#sender').val();
		var reciever = $('#reciever').val();
		var message = $('#message').val();
		
		$.ajax({
			type: 'GET',
			url: 'ajax/ajax_post.php',
			data: {sender:sender, reciever:reciever, message:message},
			success: function(feedback_data){
				$('#feedback').html(feedback_data);
				$('#sender').val('');
				$('#message').val('');
				$('#reciever').val('');
				$('#message').focus();
			}
		});
		
		return false;
	});
});