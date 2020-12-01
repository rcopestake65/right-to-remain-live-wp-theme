<?php /* Template Name: Utilities */ ?>

<nav class="utilities-nav">
    <div class="utilities-menu-open-btn">
        <p style="color:<?php the_field('background_colour'); ?>"> <i class="fas fa-arrow-circle-up arrow-up fa-lg"></i>
            Menu<i style="color:<?php the_field('background_colour'); ?>"
                class="fas fa-arrow-circle-left arrow-left fa-lg"></i>

        </p>


    </div>
    <div class="mobile-utilities-nav-close">
        <i style="color:<?php echo $asylum; ?>" class="fas fa-times-circle fa-lg"></i>
    </div>
    <div class="utilities-nav-container">
        <ul>
            <li> <a class="stage-btn home-btn" href="/">Home</a></li>
            <li> <a class="stage-btn home-btn" href="/overview">Overview</a></li>
            <li> <a class="stage-btn home-btn" href="/star-cards">Star Cards</a></li>
            <li> <a class="stage-btn home-btn" href="/about">About</a></li>
        </ul>
    </div>

</nav>