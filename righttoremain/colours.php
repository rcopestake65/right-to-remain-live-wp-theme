<?php /* Template Name: Colours */ ?>
<?php get_header();?>


<!-- ========== MAIN MENU / HAMBURGER ================== -->
<?php get_template_part( 'navigation');?>
<!-- end menu -->

<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>




<section class="stages">
    <?php the_field('test'); ?>
    <div class="container">
        <div class="intro-grid">
            <div class="intro-grid-item grid-item-1">
                <h2 style="background-color:<?php the_field('asylum_nav'); ?>"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <?php the_field('introductory_text'); ?>
            </div>
            <div class="intro-grid-item grid-item-2">
                <img class="face" src="<?php the_field('illustration'); ?>">
            </div>

        </div>


        <!-- ===== PROBLEMS & ACTIONS ====-->
        <h4 style="color:<?php the_field('background_colour'); ?>">Problems &amp; Actions</h4>

        <div class="problem-container">

            <?php if( have_rows('cards')) : while (have_rows('cards')) : the_row();
            $problemNumber = get_sub_field('problem_number');
            $problemText = get_sub_field('problem');
            $actionNumber = get_sub_field('action_number');
            $actionText = get_sub_field('action');
            $actionFull = get_sub_field('action_full');
            ?>

            <!-- Problem -->
            <div class="card-container card-grid-item-<?php echo get_row_index(); ?>">
                <div class="card-front" style="background-color:<?php the_field('background_colour'); ?>">
                    <div class="card-heading">
                        <h4 style="color:<?php the_field('background_colour'); ?>"><?php echo $problemNumber; ?></h4>

                    </div>

                    <p> <?php echo $problemText; ?></p>
                    <div class="flip-btn">
                        <img src="https://rcopestake65.github.io/right_to_remain_dev/images/flip-icon.png" alt="">
                    </div>
                </div>
                <div class="card-back" style="background-color:<?php the_field('card_back'); ?>">
                    <div class="card-heading">
                        <h4 style="color:<?php the_field('card_back'); ?>"> <?php echo $actionNumber; ?></h4>
                    </div>
                    <p><?php echo $actionText; ?></p>



                    <?php 
    
    if ($actionFull) {
        echo '<div class="read-more-btn read-more-btn-'?><?php echo get_row_index();?>"<?php echo'>Read More</div>';
                }
                ?>


                    <div class="flip-btn-back">
                        <img src="https://rcopestake65.github.io/right_to_remain_dev/images/flip-back.png" alt="">
                    </div>

                </div>

            </div>
            <!-- Problem FULL -->
            <div class="card-full card-full-<?php echo get_row_index(); ?>"
                style="background-color:<?php the_field('card_back'); ?>">

                <div class="card-heading">
                    <h4> <?php echo $actionNumber; ?></h4>
                </div>
                <div class="card-full-inner">
                    <?php echo $actionFull; ?>

                    <div class="card-full-close-btn card-full-close-btn" style="color:<?php the_field('card_back'); ?>">
                        <i class="fas fa-window-close fa-2x"></i>
                    </div>
                </div>

            </div><!-- close card-full -->






            <?php endwhile; endif; ?>
        </div><!-- end problem container -->



        <div class="next-btn-container">
            <a href="#"><span class="more-btn"><i class="fas fa-arrow-circle-down"></i></span></a>
        </div>

    </div><!-- end .container -->


</section><!-- end claim asylum -->

<?php endwhile;
    endif;
    ?>

<?php get_footer();?>