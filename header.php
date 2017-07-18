<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="loading-overlay">
	<img src="<? echo get_site_url(); ?>/wp-content/uploads/2017/07/loading.gif" />
</div>

<div id="wrapper" class="hfeed">
	<header id="header" role="banner">
<!-- 		<nav id="menu" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav> -->
	</header>
	<div id="container">