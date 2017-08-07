$(document).ready(function(){
	var interval = setInterval(function(){
		$.ajax({
			url: 'ajax/ajax_get.php',
			success: function(feedback_data){
				$('#messages').html(feedback_data);
			}
		});
	},1000);
});

/*Remember here we're not using GET function, we're just naming the file ajax_get because it retrieves the messages in the database for us*/