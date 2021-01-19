<?php /* Template Name: About */ ?>
<?php get_header();?>

<!-- ========== MAIN MENU / HAMBURGER ================== -->
<?php get_template_part( 'navigation');?>
<!-- end menu -->

<!-- ========== UTILITIES MENU ================== -->
<?php get_template_part( 'utilities');?>
<!-- end utlities menu -->

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

<section class="about">
    <div class="container pt2">

        <div class="intro-grid">
            <div class="intro-grid-item grid-item-1">
                <h2 style="color:<?php the_field('background_colour'); ?>"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            <div class="intro-grid-item grid-item-2">
                <img class="face" src="<?php the_field('illustration'); ?>">
            </div>
        </div><!-- end intro-grid -->






        <?php endwhile; endif; ?>
    </div>
</section><!-- end fun -->



<?php get_footer();?>