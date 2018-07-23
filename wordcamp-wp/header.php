<?php

/**
	* The header for our theme
	*
	* This is the template that displays all of the <head> section and everything up until the main content starts
	*
	* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	*
*/

?>


<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">  <!-- //use blog info -->

		<?php if (is_search()) : ?>

	   		<meta name="robots" content="noindex, nofollow" /> 

		<?php endif; ?>

		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon" />
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Rufina:700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet">

		<?php wp_head(); //gather the hooks to initialize theme ?>
		

	</head>

	<body <?php body_class(); ?>>

		<!-- header -->
		<header>

			<!-- use blog info and theme templates for portability -->
			<a href="<?php bloginfo( 'url' ); ?>"><h1><?php bloginfo( 'name' ); ?></h1></a>

			<nav class="main-menu" role="navigation">
			<?php     //calling our custom menu

					$def = 	array(
					'menu'	 => 'main-menu', 
					'container' => ''

				);
				
				wp_nav_menu($def);  
			?>
			</nav>
			
		</header>
		<!-- /header -->
