$(document).ready(function(){
/*********************JS to send request to login php script**************************/
	$('#login-form').click(function(){
		
		//validate
		var username = $('#username').val();
		var password = $('#password').val();
		if (password == '') {
			password_result = 0;
			password_error = "Enter the password!";
		}else{
			password_result = 1;
			password_error = "";
			}

		if (username == '') {
			username_result = 0;
			username_error = "Enter the username!";
		}else{			
				username_result = 1;
				username_error = "";
			}
		if (password_result == "0" || username_result == "0") {
			var error_message = username_error + "<br>" + password_error ;
			$(".error_message").css("display","inline-block").html(error_message);
		 	return false;
		} else {
			///////Sending request
				url = "./lib/login_user.php";
				$.ajax({ 
						url: url,
						type: "POST",
						data: {
							action : "login-form",
							username : username,
							password : password
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
	}); //Login-submit-form end here

	/*Menu button toggle js*/
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
	/*Menu toggle end*/

});
// Preloader 
/*	$(window).on('load', function() {
		$("#status").delay(500).fadeOut();
		$("#preloader").delay(500).fadeOut("slow");
	});*/

/*
-------------JS for scroll up button
*/

  			/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/

