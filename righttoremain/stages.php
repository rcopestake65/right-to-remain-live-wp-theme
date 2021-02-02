<?php /* Template Name: Stages */ ?>
<?php get_header();?>


<!-- ========== MAIN MENU / HAMBURGER ================== -->
<?php get_template_part( 'navigation');?>
<!-- end menu -->

<!-- ========== UTILITIES MENU ================== -->
<?php get_template_part( 'utilities');?>
<!-- end utlities menu -->


<?php 
		
			function get_page_by_template($template = '') {
			  $args = array(
				'meta_key' => '_wp_page_template',
				'meta_value' => $template, 
				'sort_column' => 'menu_order'
			  );
			  return get_pages($args); 
}
			$pagesWithStages = get_page_by_template('stages.php');
//			var_dump($pagesWithStages);

			global $post;
//			echo $post->ID;

			$key = array_search($post->ID, array_column($pagesWithStages, 'ID'));
			
			if ($key > 0)
				$previousPage = get_permalink($pagesWithStages[$key-1]->ID);
			else 
				$previousPage = "https://youngasylumguide.org.uk/overview/";
			
			if ($key >= 11)
				$nextPage = "https://youngasylumguide.org.uk/people-who-can-help/";
			else 
				$nextPage = get_permalink($pagesWithStages[$key+1]->ID);							
	

		?>
<?php

if( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>


<div class="bg-colour" style="background-color:<?php the_field('background_colour'); ?>">

    <section class="stages">

        <div class="container pt2">
            <div class="next-btn-container">
                <a href="<?php echo $previousPage; ?>"><span class="more-btn"><i
                            class="fas fa-arrow-circle-up"></i></span></a>
            </div>
            <div class="intro-grid">
                <div class="intro-grid-item grid-item-1">
                    <h2 style="color:<?php the_field('background_colour'); ?>"><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                </div>
                <div class="intro-grid-item grid-item-2">
                    <img class="face" src="<?php the_field('illustration'); ?>">
                </div>

            </div>


            <!-- ===== PROBLEMS & ACTIONS ====-->
            <?php if( have_rows('cards')): ?>
            <h4 style="color:<?php the_field('background_colour'); ?>">Problems &amp; Actions</h4>
            <?php endif; ?>

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
                            <h4 style="color:<?php the_field('background_colour'); ?>">
                                Problem <?php echo get_row_index(); ?></h4>

                        </div>

                        <p> <?php echo $problemText; ?></p>
                        <div class="flip-btn">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/flip-icon.png" alt="">
                        </div>
                    </div>
                    <div class="card-back" style="background-color:<?php the_field('card_back'); ?>">
                        <div class="card-heading">
                            <h4 style="color:<?php the_field('card_back'); ?>">Action <?php echo get_row_index(); ?>
                            </h4>
                        </div>
                        <p><?php echo $actionText; ?></p>



                        <?php 
    
    if ($actionFull) {
        echo '<div class="read-more-btn read-more-btn-'?><?php echo get_row_index();?>"<?php echo'>Read More</div>';
                }
                ?>


                        <div class="flip-btn-back">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/flip-back.png" alt="">
                        </div>

                    </div>

                </div>
                <!-- Problem FULL -->
                <div class="card-full card-full-<?php echo get_row_index(); ?>"
                    style="background-color:<?php the_field('card_back'); ?>">

                    <div class="card-heading">
                        <h4>Action <?php echo get_row_index(); ?></h4>
                    </div>
                    <div class="card-full-inner">
                        <?php echo $actionFull; ?>

                        <div class="card-full-close-btn card-full-close-btn-<?php echo get_row_index(); ?>"
                            style="color:<?php the_field('card_back'); ?>">
                            <i class="fas fa-window-close fa-2x"></i>
                        </div>
                    </div>

                </div><!-- close card-full -->






                <?php endwhile; endif; ?>
            </div><!-- end problem container -->



            <div class="next-btn-container">
                <a href="<?php echo $nextPage; ?>"><span class="more-btn"><i
                            class="fas fa-arrow-circle-down"></i></span></a>
            </div>

        </div><!-- end .container -->


    </section><!-- end claim asylum -->
</div><!-- end bg-colour -->
<?php endwhile;
    endif;
    ?>

<?php get_footer();?>