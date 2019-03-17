$(document).ready(function(){
/*********************JS to send request to login php script**************************/
	$('#notification-form').click(function(){
		$(".error_message").css("display","none");
		//validate
		var topic = $('#topic').val();
		var details = $('#detail').val();
		if (details == '') {
			details_result = 0;
			details_error = "Enter the details!";
		}else{
			details_result = 1;
			details_error = "";
			}

		if (topic == '') {
			topic_result = 0;
			topic_error = "Enter the topic!";
		}else{			
				topic_result = 1;
				topic_error = "";
			}
		if (details_result == "0" || topic_result == "0") {
			var error_message = topic_error + "<br>" + details_error ;
			$(".error_message").css("display","inline-block").html(error_message);
		 	return false;
		} else {
			///////Sending request
				url = "./lib/admin-actions-php.php";
				$.ajax({ 
						url: url,
						type: "POST",
						data: {
							action : "notice-form",
							topic : topic,
							details : details
						},
						dataType : "json",
						success: function(response){	
							if (response.success) {
								window.location.href = 'admin-dashboard.php';
							} else {
								$(".error_message").css("display","inline-block").html(response.error);
								return false;
							}
						} //success end
		    	});
    		}
		return false;
	}); //notice-submit-form end here

});