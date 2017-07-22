<?php get_header(); ?>
<header id="home-header">
	<div id="video-overlay">
		<img src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/de_logo.png" />
	</div>
	<video playsinline autoplay muted loop id="nameplate">
		<source src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/home-video.mp4" type="video/mp4">
		<source src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/home-video.webm" type="video/webm">
	</video>
</header>

<a name="about"></a>
<div id="home-about" class="flex-container">
	<span>
		<section>
			<h1>D&amp;E Media</h1>
			<h2>Finding the Best Advertising Solutions for Your Unique Business</h2>
			<p>Finding the right advertising solution for your business can be like finding a needle in a haystack…next to impossible! Here at D&amp;E Media, we are committed to finding the best print and digital advertising solutions for you.</p>

			<p>We don’t believe in a one-size-fits-all solution for any business. That’s why before any proposals or products are on the table our talented staff dedicates themselves to fully understanding the in’s and out’s of your business. From there we sit down to <strong>DEFINE</strong> your unique advertising needs and <strong>EXECUTE</strong> your customized media plan, using the right products and schedules to bring your business to the next level. Our solutions may include: shared mail inserts, newspaper inserts, Front Page Spadea, run of paper, direct mail, billboards, mobile digital, desktop digital, plus we give you all the ROI analytics. Basically, what we’re trying to say, is when it comes to your advertising, we do it all!</p>
			<p>At D&amp;E Media, we don’t want to just sell your products. We want to be an extension of your team because, with the right partnership, <strong>NOTHING IS IMPOSSIBLE!</strong></p>
		</section>
	</span>
	<img src="//via.placeholder.com/500x500" alt="Finding a Needle in a Haystack" />	
</div>

<a name="services"></a>
<div id="home-services">
	<div class="background-container flex-container">
		<h1>This is the services section for D&amp;E Media</h1>
		<div class="col">
			<img src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/004-video-player.png" />
			<h3>Media Buying</h3>
			<p>Lorem ipsum in ad ex sit consequat elit cillum in veniam nostrud eiusmod non eu et dolore nostrud commodo deserunt ullamco.</p>
		</div>
		<div class="col">
			<img src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/003-street-advertising.png" />
			<h3>Advertising Strategy</h3>
			<p>Nostrud sint eiusmod sint pariatur consectetur elit et laborum quis consequat occaecat aute elit.</p>
		</div>
		<div class="col">
			<img src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/002-sheet-of-newspaper.png" />
			<h3>Print Advertising</h3>
			<p>Lorem ipsum in incididunt id labore cillum in elit et est adipisicing mollit.</p>
		</div>
		<div class="col">
			<img src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/001-network.png" />
			<h3>Digital Advertising</h3>
			<p>Lorem ipsum nostrud officia occaecat dolor nisi et adipisicing duis dolore ex velit.</p>
		</div>
	</div>
</div>

<a name="contact"></a>
<div id="home-contact" class="flex-container">
	<div id="home-map"></div>
	<form class="flex-container" id="home-form">
		<span>Contact Us</span>
		<label>
			Your Name
			<input type="text" name="name" />
		</label>
		<label>
			Email Address
			<input type="text" name="email" />
		</label>
		<label>
			Phone Number
			<input type="text" name="phone" />
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