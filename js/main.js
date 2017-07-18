jQuery(document).ready(function($)	{

	// Animations for the home contact form 
	$("#home-contact form input:not([type=submit]), #home-contact form textarea").on('click focus', function()	{
		$(this).parent().animate({
			fontSize: '0.6rem'
		}, { duration: 150, queue: false });
		$(this).animate({
			paddingTop: '0.4rem'
		}, { duration: 150, queue: false });	
	})

	$("#home-contact form input:not([type=submit]), #home-contact form textarea").on('blur', function()	{
		$(this).parent().animate({
			fontSize: '0.8rem'
		}, { duration: 150, queue: false });	
		$(this).animate({
			paddingTop: '0'
		}, { duration: 150, queue: false })
	})

	// Home contact form validation and AJAX send
	$("#home-form").submit(function(e)	{

		e.preventDefault();

		var name = $(this).find("input[name=name]");
		var email = $(this).find("input[name=email]");
		var message = $(this).find("textarea");

		// Validate all the inputs
		if(name.val() == '' && name.next().length == 0) {
			$("<p style='color: red; position: absolute; bottom: 17px; font-size: 0.6rem; margin: 0;'>Please fill in this field.</p>").insertAfter(name);
			return false;
		}
		else if(name.val() == '' && name.next().length != 0) {
			return false;
		}
		else {
			name.next().detach();
		}
		
		if(email.val() == '' && email.next().length == 0) {
			$("<p style='color: red; position: absolute; bottom: 17px; font-size: 0.6rem; margin: 0;'>Please fill in this field.</p>").insertAfter(email);
			return false;
		}
		else if(email.val() == '' && email.next().length != 0) {
			return false;
		}
		else {
			email.next().detach();
		}
		
		if(message.val() == '' && message.next().length == 0) {
			$("<p style='color: red; position: absolute; bottom: 17px; font-size: 0.6rem; margin: 0;'>Please fill in this field.</p>").insertAfter(message);
			return false;
		}
		else if(message.val() == '' && message.next().length != 0) {
			return false;
		}
		else {
			message.next().detach();
		}

		$.ajax({
			url : "/defineandexecute/wp-admin/admin-ajax.php",
			data: {
				'action': 'submit_form',
				'name': name.val(),
				'email': email.val(),
				'message': message.val()
			},
			success: function(data) {
				console.log(data);
				return false;
			}
		})

		return false;

	})


});

jQuery(window).load(function()	{
	$("#loading-overlay").fadeOut();

	setTimeout(function(){
		$("#video-overlay img").fadeIn();
	}, 100);
})