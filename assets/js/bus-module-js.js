$(document).ready(function() {
/*********************JS to send request to bus php script**************************/
    $('#bus-form-input').click(function(){
        //validate
        var plate_number = $('#plate-number').val();
        var bus_number = $('#bus-number').val();
        var driver_name = $('#driver-name').val();
        var contact = $('#contact').val();
        var status = $('#status').val();
        if (plate_number == '') {
            plate_number_result = 0;
            plate_number_error = "Enter the plate number!";
        }else{
            plate_number_result = 1;
            plate_number_error = "";
            }

        if (bus_number == '') {
            bus_number_result = 0;
            bus_number_error = "Enter the bus number!";
        }else{          
                bus_number_result = 1;
                bus_number_error = "";
            }

        if (driver_name == '') {
            driver_name_result = 0;
            driver_name_error = "Enter the driver name!";
        }else{          
                driver_name_result = 1;
                driver_name_error = "";
            }

        if (contact == '') {
            contact_result = 0;
            contact_error = "Enter the contact!";
        }else{
            if(contact.match(/[1-9]{1}[0-9]{9}/g)){
                contact_result = 1;
                contact_error = "";
            }else{
                contact_result = 0;
                contact_error = "Enter the correct mobile number!";
                }
            }
        if (plate_number_result == "0" || bus_number_result == "0" || driver_name_result == "0" || contact_result == "0") {
            var error_message = plate_number_error + "<br>" + bus_number_error + "<br>" + driver_name_error + "<br>" + contact_error ;
            $(".error_message").css("display","inline-block").html(error_message);
            return false;
        } else {
            ///////Sending request
                url = "./lib/admin-actions-php.php";
                $.ajax({ 
                        url: url,
                        type: "POST",
                        data: {
                            action : "add-bus-form",
                            plate_number : plate_number,
                            bus_number : bus_number,
                            driver_name : driver_name,
                            contact : contact,
                            status : status 
                        },
                        dataType : "json",
                        success: function(response){    
    
                            if (response.success) {
                                window.location.href = 'bus_route_admin.php';
                            } else {
                                $(".error_message").css("display","inline-block").html(response.error);
                                return false;
                            }
                        } //success end
                });
            }
        return false;
    }); //add bus form end here
     $('#bus-stop-input').click(function(){        
        var bus_number = $('#bus-number').val();
        var stop_names = JSON.stringify($("input[name='stop_name[]']").serializeArray());
        var stop_times = JSON.stringify($("input[name='stop_time[]']").serializeArray());

        url = "./lib/admin-actions-php.php";
        $.ajax({ 
                url: url,
                type: "POST",
                data: {
                    action : "bus-stop-form",
                    bus_number : bus_number,
                    stop_names : stop_names,
                    stop_times : stop_times
                },
                dataType : "json",
                success: function(response){    

                    if (response.success) {
                        window.location.href = 'bus_route.php?bus_number='+bus_number+'';
                    } else {
                        $(".error_message").css("display","inline-block").html(response.error);
                        return false;
                    }
                } //success end
        });
        return false;
    }); //add bus stop form end here

    /*******************************************
    **********Delete a bus************
    *******************************************/
    $('button[name=delete_bus]').click(function(){
            if( confirm("This action will delete bus route too! Click ok to Process.") ){
                var busNumber = $(this).val();
            ///////Sending request
                url = "./lib/admin-actions-php.php";
                $.ajax({ 
                        url: url,
                        type: "POST",
                        data: {
                            action : "delete-bus",
                            busNumber : busNumber
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
    **********Delete a bus stop************
    *******************************************/
    $('button[name=delete_bus_stop]').click(function(){
            if( confirm("This action will delete bus route too! Click ok to Process.") ){
                var stopId = $(this).val();
            ///////Sending request
                url = "./lib/admin-actions-php.php";
                $.ajax({ 
                        url: url,
                        type: "POST",
                        data: {
                            action : "delete-bus-stop",
                            stopId : stopId
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

    $('button[name=edit_bus]').click(function(){  

        $('#bus-form').toggle(400);
        $('#bus-info-table').toggle(400);
        $('#bus-form-input').remove();
        $("#hide-bus-form").before('<button id="update-bus-form" class="btn btn-success">update</button> ');

        var busId = $(this).val();
        $("#hide-bus-form").before('<input id="bus-id" name="bus-id" type="hidden" value="'+busId+'">    ');
        var row = $(this).closest("tr");
        var bus_number = row.find("td:nth-child(2)").text();  // Find the text
        var plate_number = row.find("td:nth-child(3)").text(); // Find the text
        var driver_name = row.find("td:nth-child(4)").text(); // Find the text
        var contact = row.find("td:nth-child(5)").text(); // Find the text
        var status = row.find("td:nth-child(6)").text(); // Find the text
        $("#bus-number").val(bus_number);
        $("#plate-number").val(plate_number);
        $("#driver-name").val(driver_name);
        $("#contact").val(contact);
        $("#status").val(status);
        return false;

    });

/*******************************************
**********Update a bus************
*******************************************/
$(document).on('click',"#update-bus-form",function (e) {  
 e.preventDefault();
    e.stopPropagation(); 
        $(".error_message").css("display","none");
        //validate
        var plate_number = $('#plate-number').val();
        var bus_number = $('#bus-number').val();
        var driver_name = $('#driver-name').val();
        var contact = $('#contact').val();
        var status = $('#status').val();
        if (plate_number == '') {
            plate_number_result = 0;
            plate_number_error = "Enter the plate number!";
        }else{
            plate_number_result = 1;
            plate_number_error = "";
            }

        if (bus_number == '') {
            bus_number_result = 0;
            bus_number_error = "Enter the bus number!";
        }else{          
                bus_number_result = 1;
                bus_number_error = "";
            }

        if (driver_name == '') {
            driver_name_result = 0;
            driver_name_error = "Enter the driver name!";
        }else{          
                driver_name_result = 1;
                driver_name_error = "";
            }

        if (contact == '') {
            contact_result = 0;
            contact_error = "Enter the contact!";
        }else{
            if(contact.match(/[1-9]{1}[0-9]{9}/g)){
                contact_result = 1;
                contact_error = "";
            }else{
                contact_result = 0;
                contact_error = "Enter the correct mobile number!";
                }
            }
        if (plate_number_result == "0" || bus_number_result == "0" || driver_name_result == "0" || contact_result == "0") {
            var error_message = plate_number_error + "<br>" + bus_number_error + "<br>" + driver_name_error + "<br>" + contact_error ;
            $(".error_message").css("display","inline-block").html(error_message);
            return false;
        } else {
            ///////Sending request
                url = "./lib/admin-actions-php.php";
                $.ajax({ 
                        url: url,
                        type: "POST",
                        data: {
                            action : "update-bus",
                            plate_number : plate_number,
                            bus_number : bus_number,
                            driver_name : driver_name,
                            contact : contact,
                            status : status 
                        },
                        dataType : "json",
                        success: function(response){    
    
                            if (response.success) {
                                window.location.href = 'bus_route_admin.php';
                            } else {
                                $(".error_message").css("display","inline-block").html(response.error);
                                return false;
                            }
                        } //success end
                });
            }
        return false;
});

    var max_fields = 40;
    var wrapper = $("#stop-table-form");
    var add_button = $(".add_form_field");

    var x = $('#stop-table-form tr').length;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            $('#stop-table-form tr:last').after('<tr>\
                                                    <td>'+ x +'</td>\
                                                    <td><input type="text" class="form-control" placeholder="Stop name" name="stop_name[]"/></td>\
                                                    <td><input type="text" class="form-control" placeholder="12:12 AM" name="stop_time[]"/></td>\
                                                    <td><a href="#" class="delete">Delete</a></td>\
                                                </tr>'); //add input box

            x++;
        } else {
            alert('You Reached the limits')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).closest('tr').remove();
        x--;
    });
    /*********************************************
    ****Show / Hide ADD bus form ****
    **********************************************/
    $('#add-hide-bus-form , #hide-bus-form').click(function(){
        $('#bus-form').toggle(400);
        $('#bus-info-table').toggle(400);
    });

    /*********************************************
    ****Show / Hide bus Stop form ****
    **********************************************/
    $('#add-stop-form, #cancel-bus-stop').click(function(){
        $('#bus-stops-table').toggle(400);
        $('#bus-stop-form').toggle(400);
    });

});	