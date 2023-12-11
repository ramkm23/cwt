<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.png" rel="icon">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">
  	<?php wp_head(); ?>
	<?php if( !empty( get_field( 'other-site-head-script', 'option') ) ): ?>
		<?php echo get_field( 'other-site-head-script', 'option' ); ?>
	<?php endif; ?>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<?php get_template_part( 'template-parts/top-bar' );?>

  <!--==========================
    Header
  ============================-->
 <body>
	<?php if( !empty( get_field( 'other-site-body-script', 'option') ) ): ?>
		<?php echo get_field( 'other-site-body-script', 'option' ); ?>
	<?php endif; ?>
    <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?php echo get_home_url(); ?>" class="scrollto"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/C%20logo.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="http://creativewebs.thebharatnews.net/#porject">Portfolio</a></li>
          <li class="menu-has-children" style="display: none;"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->