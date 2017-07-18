<?php get_header(); ?>
<header id="home-header">
	<div id="video-overlay">
		<img src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/de_logo.png" />
	</div>
		<video playsinline autoplay muted loop id="nameplate">
			<source src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/home-video.mp4" type="video/mp4">
			<source src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/home-video.webm" type="video/webm">
		</video>
	</div>
</header>

<div id="home-about" class="flex-container">
	<span>
		<h1>Define and Execute</h1>
		<h2>Lorem Ipsum Dolor Sit Amet.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis purus id erat ultrices rutrum. Nulla tristique, lectus bibendum pellentesque elementum, arcu velit bibendum ex, ac pellentesque lorem ipsum eu magna. Sed ligula enim, condimentum vel ipsum quis, tristique accumsan elit. Fusce quis sodales nisl. Curabitur pulvinar tincidunt erat, ac rutrum elit dictum a. Donec et mi auctor, aliquam tortor nec, faucibus nibh. Donec ornare magna mollis, tincidunt leo in, commodo enim. Fusce mollis id augue quis luctus. Phasellus venenatis sapien mi, malesuada elementum justo fringilla convallis.</p>
	</span>
	<img src="//via.placeholder.com/500x500" alt="Finding a Needle in a Haystack" />	
</div>

<div id="home-contact" class="flex-container">
	<div id="home-map"></div>
	<form class="flex-container" id="home-form">
		<span>Contact Us</span>
		<label>
			Your Name
			<input type="text" name="name">
		</label>
		<label>
			Email Address
			<input type="text" name="email">
		</label>
		<label>
			Message
			<textarea rows="5" name="message"></textarea>
		</label>
		<input type="submit" value="Send"/>
	</form>
</div>

</div>

<section id="content" role="main">



<?php get_footer(); ?>