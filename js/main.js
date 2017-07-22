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
		var phone = $(this).find("input[name=phone]");

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

		//  Send the content to our AJAX function
		$.ajax({
			url : "/defineandexecute/wp-admin/admin-ajax.php",
			data: {
				'action': 'submit_form',
				'name': name.val(),
				'email': email.val(),
				'message': message.val(),
				'phone': phone.val()
			},
			success: function(data) {
				var successmsg = "<span class='successmsg' style='display: none; font-size: 2.5rem; line-height: 3rem; text-align: center;'>Your message has been sent!  We will get back to you as soon as possible.</span>";
				$("#home-form").append(successmsg);
				$("#home-form label, #home-form input, #home-form span").fadeOut(function() {
					$(".successmsg").fadeIn();
				});
			}
		})

		return false;

	})  //  End home form validation and submit



	//  Function to give main menu a background 
	if($("#home-header").length == 0) {
		$("#main-header").css("background", "linear-gradient(rgb(93,155,210), rgba(93,155,210, 0.9))");
	}
	else {
		var videobottom = $("#home-about").offset().top;
		$(window).scroll(function()	{
			if($(window).scrollTop() >= videobottom) {
				$("#main-header").css("background", "linear-gradient(rgb(93,155,210), rgba(93,155,210, 0.9))");
			}
			else {
				$("#main-header").css("background", "");
			}
		})
	}

	// Function for menu highlighting

	function getAnchors() {
		//  Get all the anchor links, check if they're on this page
		$("#menu a").each(function()	{
			var link = $(this).attr("href");
			var name = link.split('#')[1];
			var thisanchor = $("a[name="+name+"]");

			//  Bind a scroll function to this anchor link if it exists on this page
			if(thisanchor.length) {
				var thistop = thisanchor.offset().top;
				var thisbottom = thistop + $(thisanchor).next().outerHeight(true);

				$(window).bind("scroll", { link: link, thistop: thistop, thisbottom: thisbottom }, function()	{
					var windowtop = $(window).scrollTop();
					var thisnavitem = $("a[href='"+link+"']");

					//  Apply the CSS styles to the menu when scrolling past this anchor link
					if(windowtop >= thistop && windowtop <= thisbottom) {
						thisnavitem.css("color", "#fff");
						thisnavitem.css("border-bottom", "5px solid #fff");
					}
					else {
						thisnavitem.css("color", "");
						thisnavitem.css("border-bottom", "");
					}
				})
			}
		})
	};

	//  Make the padding for menu items increase with the height of the nav bar so the borders stay aligned
	$("#main-header").mouseenter(function()	{
		$(this).find('a').css("padding-bottom", "45px");
	});

	$("#main-header").mouseleave(function()	{
		$(this).find('a').css("padding-bottom", "");
	});

	//  Bind the anchor links on this page to the window scroll
	getAnchors();


});

jQuery(window).load(function()	{
	$("#loading-overlay").fadeOut();

	setTimeout(function(){
		$("#video-overlay img").fadeIn();
	}, 100);
})