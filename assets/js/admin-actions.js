$(document).ready(function(){
/*********************************************
****To send request to notifiaction php script****
**********************************************/
	$('#notification-form').click(function(){
		$(".error_message").css("display","none");
		//validate
		var topic = $('#topic').val();
		var details = $('#detail').val();
		var status = $('#status option:selected').val();
		if (status != 'active'){
			if(status != 'disable') {
				alert("Something wrong with script! Refresh and try again.");
				return false;
			}
		}
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
							details : details,
							status : status
						},
						dataType : "json",
						success: function(response){	
							if (response.success) {
								$(".error_message").removeClass('alert-danger');
								$(".error_message").css("display","inline-block").html(response.msg+" <br/> <b>Refresh page to see changes!</b>");
								$(".error_message").addClass('alert-success');
								setTimeout(function() { $(".error_message").css("display","none") }, 4000);
  								$('#notice-form').toggle(400);
							} else {
								$(".error_message").css("display","inline-block").html(response.error);
								return false;
							}
						} //success end
		    	});
    		}
		return false;
	}); //notice-submit-form end here

/*******************************************
**********Delete a notification************
*******************************************/
$('button[name=delete_notice]').click(function(){
  		if( confirm("This action can not be undone! Click ok to Process.") ){
  			var noticeId = $(this).val();
		///////Sending request
			url = "./lib/admin-actions-php.php";
			$.ajax({ 
					url: url,
					type: "POST",
					data: {
						action : "delete-notification",
						noticeId : noticeId
					},
					dataType : "json",
					success: function(response){	
						if (response.success) {
							location.reload(true);
							return false;
						} else {
							$(".error_message").css("display","inline-block").html(response.error);
							return false;
						}
					} //success end
	    	});
  		}
  });

/*******************************************
**********Update a notification************
*******************************************/
$(document).on('click',"#update-notice-form",function (e) {  
 e.preventDefault();
    e.stopPropagation(); 
		$(".error_message").css("display","none");
		//validate
		debugger;
		var noticeId = $('#notice-id').val();
		var topic = $('#topic').val();
		var details = $('#detail').val();
		var status = $('#status option:selected').val();
		if (status != 'active'){
			if(status != 'disable') {
				alert("Something wrong with script! Refresh and try again.");
				return false;
			}
		}
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
					action : "update-notification",
					noticeId : noticeId,
					topic : topic,
					details : details,
					status : status
						},
						dataType : "json",
						error: function(ts) { alert(ts.responseText); },
						success: function(response){	
							if (response.success) {
								alert(response.msg);
								location.reload(true);
								return false;
							} else {
								$(".error_message").css("display","inline-block").html(response.error);
								return false;
							}
						} //success end
		    	});
    		}
    return false;
});
$('button[name=edit_notice]').click(function(){  

	$('#notice-form').show(400);
	$("#hide-notice").before('<button id="update-notice-form" class="btn btn-success">update</button>	');
	$("#notification-form").remove();

	var noticeId = $(this).val();
	$("#hide-notice").before('<input id="notice-id" name="notice-id" type="hidden" value="'+noticeId+'">	');
	var row = $(this).closest("tr");
    var topic = row.find("td:nth-child(2)").text();  // Find the text
    var details = row.find("td:nth-child(3)").text(); // Find the text
    var status = row.find("td:nth-child(5)").text(); // Find the text
    $("#topic").val(topic);
    $("#detail").val(details);
    $("#status").val(status);
    return false;

  });

/*********************************************
****Show / Hide Notice form ****
**********************************************/
$('#add-hide-notice , #hide-notice').click(function(){
  		$('#notice-form').toggle(400);
  });


});