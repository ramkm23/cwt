<?php
    /*Template Name: Home Template */
    get_header();
?>
  <section id="intro">

    <div class="intro-content">
      <h2>GET <span>YOUR DREAM</span><br>LIVE!</h2>
      <div>
        <a href="#contact" class="btn-get-started scrollto">Get Started</a>
        <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/img/intro-carousel/5.jpg');"></div>
    </div>

  </section>
<!-- Get Basic Content Template -->
<?php //get_template_part('template-parts/most-popular-news'); ?>
<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>     
			<?php // Get Standard Comp	onents
				if( have_rows('basic-content') ):

					while ( have_rows('basic-content') ) : the_row();

						$section_path = 'template-parts/'.get_row_layout();

						get_template_part($section_path);

					endwhile;

				endif; ?>	
	<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
<?php get_footer(); ?>
  