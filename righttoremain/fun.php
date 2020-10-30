<?php /* Template Name: Fun */ ?>
<?php get_header();?>

<!-- ========== MAIN MENU / HAMBURGER ================== -->
<?php get_template_part( 'navigation');?>
<!-- end menu -->

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section class="fun">
    <div class="container">


        <h2 style="color:<?php the_field('background_colour'); ?>"><?php the_title(); ?></h2>
        <?php the_content(); ?>


        <?php if( have_rows('fun_things_to_do')) : while (have_rows('fun_things_to_do')) : the_row();
            $image = get_sub_field('image');
            $heading = get_sub_field('heading');
            $text = get_sub_field('text');
            $textBackgroundColour = get_sub_field('text_box_background_colour');
            ?>
        <div class="fun-grid">



            <div class="grid-item grid-item-1">
                <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="grid-item grid-item-2" style="background-color:<?php echo $textBackgroundColour; ?>;">

                <div class="accordion js-accordion">
                    <div class="accordion__item js-accordion-item">
                        <div class="accordion-header js-accordion-header">
                            <h4><?php echo $heading; ?> <i class="fas fa-arrow-circle-down"></i></h4>
                        </div>
                        <div class="accordion-body js-accordion-body">
                            <div class="accordion-body__contents">
                                <?php echo $text; ?>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>
        <?php endwhile; endif; ?>
    </div>
</section><!-- end fun -->

<?php endwhile;
    endif;
    ?>

<?php get_footer();?>