<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
$login_css = '';
if ( is_user_logged_in() ) {
	$login_css = 'header_login_css';}
?>
	
	<header class= "  <?php echo $login_css; ?>">
	

	<nav class="navbar navbar-expand-md navbar-light  ">
	<div class="container">
		<a class="navbar-brand" href="#">
			<?php $logo = get_field( 'header_logo', 68 ); ?>
		<img class='logo' src="<?php echo esc_url( $logo['url'] ); ?>"
							alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="main-menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-menu',
					'container'      => false,
					'menu_class'     => '',
					'fallback_cb'    => '__return_false',
					'items_wrap'     => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
					'depth'          => 2,
					'walker'         => new bootstrap_5_wp_nav_menu_walker(),
				)
			);
			?>
		</div>
	</div>
</nav>
<?php wp_footer(); ?>

 

	</header>
