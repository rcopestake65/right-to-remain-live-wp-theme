<?php /* Template Name: Utilities */ ?>

<nav class="utilities-nav">
    <div class="utilities-menu-open-btn">
        <p style="color:<?php the_field('background_colour'); ?>"> <i class="fas fa-arrow-circle-up arrow-up fa-lg"></i>
            Menu<i style="color:<?php the_field('background_colour'); ?>"
                class="fas fa-arrow-circle-left arrow-left fa-lg"></i>
        </p>
    </div>
    <div class="mobile-utilities-nav-close">
        <i class="fas fa-times-circle fa-lg"></i>
    </div>


    <a href="/">
        <div class="nav-item utility-nav-item"> Home</div>
    </a>
    <a href="/overview">
        <div class="nav-item utility-nav-item">Overview</div>
    </a>
    <a href="/star-cards">
        <div class="nav-item utility-nav-item"> Star Cards</div>
    </a>
    <a href="/about">
        <div class="nav-item utility-nav-item">About</div>
    </a>



</nav>