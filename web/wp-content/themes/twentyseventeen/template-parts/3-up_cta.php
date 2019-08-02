<a href="https://google.com" class="card-link">
<div class="ctas-wrapper">
    <?php
    if ( have_rows( 'ctas' ) ) :
        // Loop through rows (parent repeater).
        while ( have_rows( 'ctas' ) ) :
            the_row();
            ?>
            <div class="cta">
                <?php
                $image = get_sub_field('cta_image');
                if( !empty($image) ):
                    ?>
                    <div class="image-wrapper">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>
                <?php endif; ?>

                <div class="title-wrapper">
                    <?php if ( get_sub_field( 'cta_title' ) ) : ?>
                        <h2><?php the_sub_field( 'cta_title' ); ?></h2>
                    <?php endif; ?>
                </div>

                <div class="body-intro">
                    <?php print_r(get_sub_field('intro_text')); ?>
                </div>



            </div>
        <?php
        endwhile;
    endif;
    ?>

</div>
</a>