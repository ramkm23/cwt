
<!--==== Clients Testimonials ===-->    
<section id="portfolio" class="wow fadeInUp">
    <div class="container">
        <div class="section-header" id="porject">
            <?php if(get_sub_field('clients-testimonial-heading')) : ?>
                <h2><?php echo get_sub_field('clients-testimonial-heading'); ?></h2>
            <?php endif; ?>
            <?php if(get_sub_field('clients-testimonial-text')) : ?>
                <p><?php echo get_sub_field('clients-testimonial-text'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php if(have_rows('work-portfolio-image')):?>
                <?php while(have_rows('work-portfolio-image')): the_row(); ?>
                    <div class="portfolio-item wow fadeInUp">     
                    <a href="<?php echo get_sub_field( 'work-portfolio-thumbnail' )[ 'url' ]; ?>" class="portfolio-popup">  
                    <img src="<?php echo get_sub_field( 'work-portfolio-thumbnail' )[ 'url' ]; ?>" class="clientlogo" alt="<?php echo get_sub_field( 'work-portfolio-thumbnail' )[ 'alt' ]; ?>">
                        <div class="portfolio-overlay">
                        <div class="portfolio-info"><h2 class="wow fadeInUp">View Url</h2></div>
                        </div>
                    </a>
                    </div>    
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- #portfolio -->


<?php if( get_sub_field( 'include-clients-testimonials' ) == 'Yes' ) :?>
    <!--==== Testimonials Section ==-->
    <section id="testimonials" class="wow fadeInUp">
        <div class="container">
        <div class="section-header">
        <?php if(get_sub_field('clients-testimonial-heading')) : ?>
                <h2><?php echo get_sub_field('clients-testimonial-heading'); ?></h2>
            <?php endif; ?>
            <?php if(get_sub_field('clients-testimonial-text')) : ?>
                <p><?php echo get_sub_field('clients-testimonial-text'); ?></p>
            <?php endif; ?>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <?php if(have_rows('clients-detail')):?>
                <?php while(have_rows('clients-detail')): the_row(); ?>
                <div class="testimonial-item">
                <p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/quote-sign-left.png" class="quote-sign-left" alt="">
                <?php if(!empty(get_sub_field('client-text'))): ?>
                    <?php echo get_sub_field('client-text'); ?>
                <?php endif; ?>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/quote-sign-right.png" class="quote-sign-right" alt="">
                </p>
                <img src="<?php echo get_sub_field( 'clients-image' )[ 'url' ]; ?>" class="testimonial-img" alt="<?php echo get_sub_field( 'clients-image' )[ 'alt' ]; ?>">
                <?php if(!empty(get_sub_field('client-text'))): ?>
                    <h3><?php echo get_sub_field('client-text'); ?></h3>
                <?php endif; ?>
                <?php if(!empty(get_sub_field('client-text'))): ?>
                    <h4><?php echo get_sub_field('client-text'); ?></h4>
                <?php endif; ?>
            </div>   
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        </div>
    </section><!-- #testimonials -->
<?php endif;?>