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
            <?php if(have_rows('background-slider-image')):?>
                <?php while(have_rows('background-slider-image')): the_row(); ?>
                    <div class="item" style="background-image: url('<?php echo get_sub_field( 'Backgrond-slider-image' )[ 'url' ]; ?>"></div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php endif;?>