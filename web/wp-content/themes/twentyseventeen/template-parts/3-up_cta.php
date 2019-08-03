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

                <?php
                $link = get_sub_field('cta_link');

                ?>
                <a class="bookie" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>


            </div>
        <?php
        endwhile;
    endif;
    ?>

</div>
