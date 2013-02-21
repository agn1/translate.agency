<?php
/**
 * @package WordPress
 * @subpackage Homework
 * 
 */
?>
<!doctype html>
<html>
<head>
	<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'wp' ), max( $paged, $page ) );

	?></title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
	<!--[if lte IE 9]>" 
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css" />
	<![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
</head>
<body>
	<div id='page'>
		<div id='header'>
			<div id='header-1'>
			<p></br><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></br><?php bloginfo( 'description' ); ?></p>
			<div id='nav'>
				
					<?php wp_nav_menu( array( 'theme_location' => 'nav' ) ); ?></div>
			<div class='htext'>
				<p>Здесь должен быть слоган, но я не знаю что писать...<span id='half'>(812)</span><span>123-45-67</span><a href='http://author-translate.ru'>AUTHOR-TRANSLATE.RU</a></p>
			</div>
			</div>
			<div id='header-2'>
			
			</div>
			<div id='header-3'>				
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon1.gif" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon2.gif" />
				<img src="<?php echo get_template_directory_uri(); ?>/images/icon3.gif" />
				
				<p><a href="http://internettraffic.ru">Услуга раз</a><a href="http://internettraffic.ru">Услуга два</a><a href="http://internettraffic.ru">Услуга три</a></p>				
			</div>
		</div>