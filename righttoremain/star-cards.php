<?php /* Template Name: Star Cards */ ?>
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

<section class="star-cards">

    <div class="container">
        <div class="intro-grid">
            <div class="intro-grid-item grid-item-1">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
            <div class="intro-grid-item grid-item-2">
                <img class="face" src="<?php the_field('illustration'); ?>">
            </div>
        </div><!-- end intro-grid -->


        <div class="star-card-container">

            <div class="card-menu">
                <?php if( have_rows('cards')) : while (have_rows('cards')) : the_row();
            $cardTitle = get_sub_field('card_title');
            $cardDetails = get_sub_field('card_details');
            
            ?>
                <div class="card-btn card-btn-<?php echo get_row_index(); ?>">
                    <div class="card-menu-item card-menu-item-<?php echo get_row_index(); ?>">
                        <h5><?php echo $cardTitle; ?></h5>

                    </div>
                </div>
                <!-- card 1 -->
                <div class="card card-<?php echo get_row_index(); ?>">
                    <div class="card-close-btn card-close-btn-<?php echo get_row_index(); ?>">
                        <i class="fas fa-window-close fa-2x"></i>
                    </div>
                    <p><?php echo $cardTitle; ?></p>
                    <?php echo $cardDetails; ?>

                    <h4></h4>


                </div>
                <?php endwhile; endif; ?>
            </div><!-- end card-menu-grid -->

        </div><!-- end card-container -->

    </div>



</section><!-- end claim asylum -->

<?php endwhile;
    endif;
    ?>

<?php get_footer();?>