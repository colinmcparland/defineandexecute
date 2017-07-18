<?
add_action( 'wp_enqueue_scripts', 'theme_enqueue_custom_scripts' );	
function theme_enqueue_custom_scripts()	{

	$template_url = get_stylesheet_directory_uri();


	/*  Scripts  */
	wp_register_script( 'slick-custom-script',  $template_url.'/js/slick-custom.js', 'jquery', "1", true);

	wp_enqueue_script( 'slick-custom-script' );

	wp_register_script( 'slick', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', 'jquery', '1', true);

	wp_enqueue_script( 'slick' );

	wp_register_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCaNsw1ZwCfACJD8lleJYoqXzTfD-oNw84');

	wp_enqueue_script('maps');

	wp_register_script( 'snazzymaps', $template_url.'/js/snazzymaps.js', 'jquery', '1', true);

	wp_enqueue_script( 'snazzymaps' );

	wp_register_script( 'main-script',  $template_url.'/js/main.js', 'jquery', "1", true);

	wp_enqueue_script( 'main-script' );

	/*  Styles  */
	wp_register_style('fonts', 'https://fonts.googleapis.com/css?family=Josefin+Slab:600|Montserrat:200,400');

	wp_enqueue_style( 'fonts' );
}

/*  AJAX Functions  */

add_action( 'wp_ajax_submit_form', 'submit_form' );
add_action( 'wp_ajax_nopriv_submit_form', 'submit_form' );

function submit_form() {
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);

	echo "fantastic";

	die();

	// TODO: Write mail script yo 
}

?>