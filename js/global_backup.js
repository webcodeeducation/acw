/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
$(function() {

    $("#signupForm input,#signupForm textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // something to have when submit produces an error ?
            // Not decided if I need it yet
        },
        submitSuccess: function($form, event) {
            event.preventDefault(); // prevent default submit behaviour
            // get values from FORM
		//var formdata = $('form').serialize();
		//alert('a'+formdata);
            var firstname = $("input#firstname").val();
            var lastname = $("input#lastname").val();
            var passwrd = $("input#passwrd").val();
			var gender = $("input#gender").val();
            var userdob = $("input#dob").val();
            var usercontact = $("input#contactno").val();
		var usercountry = $("input#country").val();
            var userintro = $("textarea#userintro").val();
            var userimage = $("textarea#userimage").val();
            
            // Check for white space in name for Success/Fail message
            if (firstName.indexOf(' ') >= 0) {
                firstName = name.split(' ').slice(0, -1).join(' ');
            }

            $.ajax({
                url: "./bin/user-signup.php",
                type: "POST",
                data: {
                    firstname: firstname,
                    lastname: lastname,
                    userpassword: passwrd,
					gender:gender,
					userdob: userdob,
					contact: usercontact,
					country:usercountry,
					userintro:userintro,
					userphoto:userimage
					
                },
                cache: false,
                success: function() {
                    // Success message
                    $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>User Added Successfully... </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#signupForm').trigger("reset");
                },
                error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#signupForm').trigger("reset");
                },
            })
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });

    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
$('.usersubmit').click(function(){
	var formdata = $('form').serialize();
    $.ajax({url: "../bin/user-signup.php", 
	type: "POST",
    data: { formdata },
	success: function(result){
		alert(result);
console.log(result);
        $("#success").html(result);
    },
	error:function(){
		            $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry 111" + firstName + " it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com;>me@example.com</a> ? Sorry for the inconvenience!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#signupForm').trigger("reset");
		
	}});
});

    $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

});


/*When clicking on Full hide fail/success boxes */
$('#firstname').focus(function() {
    $('#success').html('');
});
