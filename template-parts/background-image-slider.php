<?php if( get_sub_field( 'include-background-image-slider' ) == 'Yes' ) :?>
    <section id="intro">
        <div class="intro-content">
            <h2>GET <span>YOUR DREAM</span><br>LIVE!</h2>
            <?php if(get_sub_field('background-image-slider-heading')) : ?>
                <h2><?php echo get_sub_field('background-image-slider-heading'); ?></h2>
            <?php endif; ?>
            <div>
            <a href="<?php echo get_sub_field('background-slider-primary-button')['url']; ?>" target="<?php echo get_sub_field('background-slider-primary-button')['target']; ?>" class="btn-get-started scrollto"><?php echo get_sub_field('background-slider-primary-button')['title']; ?></a>
            <a href="<?php echo get_sub_field('background-slider-secondary-button')['url']; ?>" target="<?php echo get_sub_field('background-slider-secondary-button')['target']; ?>" class="btn-projects scrollto"><?php echo get_sub_field('background-slider-secondary-button')['title']; ?></a>
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
<?php endif;?>