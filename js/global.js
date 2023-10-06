$(document).ready(function(){
	// menu hover effect
	$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
	
	//$('#response_here').load('../bin/displayComments.php');
	
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
	
 $('.btnlike').on('click', function(event) {
	 event.preventDefault();
	   var id1 = $(this).attr('id');
	   var txt1 = $(this).children('.counter').text();
	   var tmp = 'like';
	   //debugger;
        //alert('like'+id1+txt1);
		
		/*$.post( "../bin/updatelikeus.php", { 'likeordislike':tmp, 'updatelike':txt1 , 'id':id1 })
		  .done(function( data ) {
			alert( "Data Loaded: " + data );
		  });*/
		
				$.ajax({
				type: 'POST',
                url: 'bin/updatelikeus.php',
                data: { "likeordislike":tmp, "updatelike":txt1 , "id":id1 },
                success: function(result) {
				//alert(result);
				//$(this).children('.counter').text(result);
				txt1.html(result);
				},
				error: function(result) { 
				//alert('add error'+result); 
				}
				});
    });
	
	$('.btndislike').on('click', function(event) {
		event.preventDefault();
	   var id1 = $(this).attr('id');
	   var txt1 = $(this).children('.counter').text();
	   var tmp = 'dislike';
       //alert('dislike' +id1+txt1);
				$.ajax({
                url: 'bin/updatelikeus.php',
                type: 'POST',
                data: {"likeordislike":tmp, "updatelike":txt1 , "id":id1  },
                success: function(result) {
				//alert(result);
				$(this).children('.counter').text(result);
				},
				error: function(res) { 
				//alert('dislike error'+res); 
				}
				});
    });
	
	$(".searchBtn").click(function(){
	//show the loading bar
	//showLoader();
	//$('#sub_cont').fadeIn(1500);
	  
	//$("#content #sub_cont").load("search.php?val=" + $("#search").val(), hideLoader());
	/*
	jQuery.ajaxSetup({
  beforeSend: function() {
     $('#loader').show();
  },
  complete: function(){
     $('#loader').hide();
  },
  success: function() {}
});
	*/
	
	var term = $('.search').val();
	$.ajax({
                url: 'bin/search.php',
                type: 'POST',
                data: { 'searchitems':term },
                success: function(result) {
				alert(result);
				
				},
				error: function() { alert('not found'); }
				});
 
});
	    $(".btnreply").click(function(){
        $("#respond").toggle();
		//alert('aS');
    });
	$('#cancel-comment-reply-link').click(function(){
		//$("#respond").hide();
		$("#respond").hide();
	});

	$('.usersubmit').click(function(){
	var formdata = $('form').serialize();
	//alert(formdata);
		$.ajax({
                url: "../bin/user-signup.php",
                type: "POST",
                data: { formdata  },
                cache: false,
                success: function(result) {
				//alert(result);
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
                error: function() { }});

		});

		$('.commentform').on('submit', function(e) {
			e.preventDefault(); //Prevents default submit
			var form = $(this); 
			var post_data = form.serialize(); //Serialized the form data for sendComments.php
			//alert(post_data);
			
			$.ajax({
				type: 'POST',
				url: 'bin/sendComments.php', // Your form script
				data: {post_data},
				success: function(response) {
					//alert(response);
					$('.commentmsg').show('fast');
					$('.commentmsg').fadeOut(2000);
					$('.commentform')[0].reset();
					//$('.commentform').unbind('submit');
				},
			error: function() {  }
			});
				
			});
			
		//Subscribe
		
		$('.subscribeus').on('click', function(e) {
			//$('document').on('click','.subscribeus' function(e) {
			e.preventDefault(); //Prevents default submit
			var emailid = $('#email').val();
			var topic = $('#subscribetopic').val();
			//alert('thankyou'+emailid+topic);
			
			var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);
			var valid = emailRegex.test(emailid);			
			
			if(emailid.length == 0)
			{
				$('#email').css('border:1px solid red');
				return;
			}
			else if (!valid) {
					//alert("Invalid email address");	//border:1px solid red;
					$('#email').css('border:1px solid red');
					return;
	
			}
			else{
							//Submit Suscriber
							$.ajax({
							type: 'POST',
							url: 'bin/Subscribeus.php', // Your form script
							data: { 'email':emailid , 'sucribetopic': topic},
							success: function(response) {
							$('.subscribe').hide();
							//$('#subscribeform').hide();
							$(".subscribemsg").show('fast');
							//$(".msg").fadeOut(6000);
								
							},
						error: function() { }
						});
			}			
		});
		
		$('.helpfulyes').on('click', function(e) {
		var topc = $('#subscribetopic').val();
		var which_btn = $('.helpfulyes').text();
		//alert('yes'+which_btn+topc);
		
				$.ajax({
				type: 'POST',
				url: 'bin/helpfultopic.php', // Your form script
				data: {'helpful': which_btn, 'helpfultopic': topc},
				success: function(response) {
				$(".helpfultxt").hide();
				$(".helpfulmsg").show('fast');
				//$(".msg").fadeOut(6000);
					
				},
			error: function() { }
			});
		
		
		});
		
		$('.helpfulno').on('click', function(e) {
		var topc = $('#subscribetopic').val();
		var which_btn = $('.helpfulno').text();
		//alert('no'+which_btn+topc);
		
						$.ajax({
				type: 'POST',
				url: 'bin/helpfultopic.php', // Your form script
				data: {'helpful': which_btn, 'helpfultopic': topc},
				success: function(response) {
				$(".helpfultxt").hide();
				$(".helpfulmsg").show('fast');
				//$(".msg").fadeOut(6000);
					
				},
			error: function() { }
			});
		

		});


});
