<?php get_header();?>

<!-- <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                    </div> -->

<!-- ========== UTILITIES MENU ================== -->
<?php get_template_part( 'utilities');?>
<!-- end utlities menu -->

<section>
    <div class="container home">
        <img class="logo" src="<?php the_field('logo'); ?>" />
        <h2><?php the_field('title'); ?></h2>
        <img class="face-01" src="<?php the_field('illustration'); ?>" />

        <p><?php the_field('illustration_credit'); ?></p>


        <div class="next-btn-container">
            <a href="/overview"><span class="more-btn"><i class="fas fa-arrow-circle-down"></i></span></a>
        </div>
    </div>

</section><!-- end home -->


<!-- SVG SHAPES -->
<div class="ellipse">

    <!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
    <svg width="100%" height="100%" viewBox="0 0 540 518" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/"
        style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
        <g transform="matrix(1,0,0,1,3.11879,6.14675)">
            <path class="shape-1"
                d="M-2.406,511.095C-2.406,511.095 310.345,494.254 536.488,-6.147L0,-6.147L-2.406,511.095Z"
                style="fill:rgb(0,198,255);fill-opacity:0.2;" />
            <g transform="matrix(0.986863,0.16156,-0.16156,0.986863,20.2402,-121.623)">
                <path class="shape-2"
                    d="M60.639,505.454C60.639,505.454 299.47,537.752 525.613,37.351L-0.179,123.054L60.639,505.454Z"
                    style="fill:rgb(0,119,255);fill-opacity:0.2;" />
            </g>
            <g transform="matrix(0.986863,0.16156,-0.16156,0.986863,-1.31552,-187.83)">
                <path class="shape-3"
                    d="M79.894,499.181C79.894,499.181 278.069,578.066 555.18,99.277L31.64,183.372L79.894,499.181Z"
                    style="fill:rgb(3,0,255);fill-opacity:0.2;" />
            </g>
        </g>
    </svg>


</div>
<?php get_footer();?>