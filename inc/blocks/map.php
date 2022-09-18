<?php get_header(); ?>


<section class="d-flex flex-column flex-lg-row vh-100 align-items-center">
    <div class="w-100">
        <?php the_field('map_shortcode'); ?>
    </div>

    <div class="w-100 d-flex flex-column align-items-center justify-content-center">

        <div class="position-relative h-100 d-flex align-items-center container-fluid">
            <span class="color-h text-uppercase font-medium fw-bold text-center position-absolute" id="status-text">
                <?php the_field('main-text'); ?>
            </span>
            <?php

if( have_rows('regions') ):
$j =0;
    while( have_rows('regions') ) : the_row(); 
    $region = get_sub_field('region_name');
    
    ?>
            <div class="row row-card card-hidden" id="<?php echo $region; ?>">
                <p class="color-black font-big text-uppercase fw-bold text-center mb-4"><?php echo $region; ?></p>
             


                <?php

        if( have_rows('hospitals') ):
            $i =0;

            while( have_rows('hospitals') ) : the_row(); ?>

                    <div class="card p-3 px-4 mb-4 cursor-pointer" data-open="#text-<?php echo $j.$i; ?>">
                    <div class="d-flex justify-content-between">
                        <p class="color-h font-medium fw-bold mb-0"><?php the_sub_field('hospital_name'); ?></p>

                        <svg class="color-h arrow-svg" data-arrow="#text-<?php echo $j.$i; ?>" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path fill="currentColor"
                                d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                        </svg>
                    </div>

                        <div class="accordion accordion-item accordion-collapse border-0" data-text="text-<?php echo $j.$i; ?>">
                            <p class="font-small color-black fw-bold"><?php the_sub_field('department'); ?></p>

                            <p class="font-small color-h mt-4 mb-0 fw-600"><?php the_sub_field('address'); ?></p>
                            <p class="font-small color-h fw-600"><a class="text-decoration-none" href="tel:<?php the_sub_field('phone'); ?>"><?php the_sub_field('phone'); ?></a></p>

                        </div>

                        <?php $i++; ?>
                    </div>
                <?php endwhile; endif; ?>

            </div>

            <?php

        $sub_value = get_sub_field('region_name');
    endwhile;

endif;





?>
        </div>
    </div>
</section>

<?php get_footer(); ?>