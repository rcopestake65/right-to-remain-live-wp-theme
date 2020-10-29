<?php /* Template Name: Navigation */ ?>


<?php
    $asylum = get_field( "asylum", 151 );
    $welfare = get_field( "welfare", 151 );
    $local = get_field( "local", 151 );
    $evidence = get_field( "evidence", 151 );
    $interview = get_field( "interview", 151 );
    $positive = get_field( "positive", 151 );
    $refusal = get_field( "refusal", 151 );
    $submit_appeal = get_field( "submit_appeal", 151 );
    $appeal_hearing = get_field( "appeal_hearing", 151 );
    $outcomes = get_field( "outcomes", 151 );
    $fresh_claim = get_field( "fresh_claim", 151 );
    $fresh_outcomes = get_field( "fresh_outcomes", 151 );
    
?>
<nav class="main-nav">
    <div class="menu-open-btn">
        <p style="color:<?php the_field('background_colour'); ?>">Stages<i
                style="color:<?php the_field('background_colour'); ?>"
                class="fas fa-arrow-circle-right arrow-right fa-lg"></i></p>

        <i class="fas fa-arrow-circle-down arrow-down fa-lg"></i>
    </div>

    <div class="nav-container">
        <a class="stage-btn home-btn" href="/"><img src="/wp-content/uploads/home-icon.png"></a>


        <div class="nav-item-container">
            <a href="/claim-asylum">
                <div class="nav-item nav-item-1" style="background-color:<?php echo $asylum; ?>">
                    Claim
                    Asylum
                </div>
            </a>
            <a href="/welfare-interview">
                <div class="nav-item nav-item-2" style="background-color:<?php echo $welfare; ?>">
                    Welfare Interview</div>
            </a>
            <a href="/local-authority-care">
                <div class="nav-item nav-item-3" style="background-color:<?php echo $local; ?>">Local Authority Care
                </div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-4" style="background-color:<?php echo $evidence; ?>">Evidence Form</div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-5" style="background-color:<?php echo $interview; ?>">Substantive
                    Interview</div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-6" style="background-color:<?php echo $positive; ?>">Home Office positive
                    decision</div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-7" style="background-color:<?php echo $refusal; ?>">Home Office refusal
                </div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-8" style="background-color:<?php echo $submit_appeal; ?>">Submit appeal
                </div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-9" style="background-color:<?php echo $appeal_hearing; ?>">Appeal hearing
                </div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-10" style="background-color:<?php echo $outcomes; ?>">Outcomes after
                    appeal hearing</div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-11" style="background-color:<?php echo $fresh_claim; ?>">Fresh claim</div>
            </a>
            <a href="#">
                <div class="nav-item nav-item-12" style="background-color:<?php echo $fresh_outcomes; ?>">Outcomes from
                    a fresh claim</div>
            </a>
        </div>

        <div class="star-card">
            <a href="star-cards">
                <img src="https://rcopestake65.github.io/right_to_remain_dev/images/star-card-sm-01.png">
                <p>Star Cards</p>
            </a>
        </div>
    </div>

</nav>

<!-- end main menu / hamburger -->