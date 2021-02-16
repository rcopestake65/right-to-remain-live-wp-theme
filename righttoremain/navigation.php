<?php /* Template Name: Navigation */ ?>


<?php
    $asylum = get_field( "background_colour", 137 );
    $welfare = get_field( "background_colour", 220 );
    $local = get_field( "background_colour", 209 );
    $evidence = get_field( "background_colour", 319 );
    $substantive_interview = get_field( "background_colour", 324 );
    $positive_decision = get_field( "background_colour", 333 );
    $refusal = get_field( "background_colour", 339 );
    $submit_appeal = get_field( "background_colour", 346 );
    $appeal_hearing = get_field( "background_colour", 353 );
    $possible_outcomes = get_field( "background_colour", 357 );
    $fresh_claim = get_field( "background_colour", 360 );
    $fresh_outcomes = get_field( "background_colour", 363 );

    $ayslum_menu_color =  get_field( "menu_text_colour", 137 );
    $welfare_menu_color = get_field( "menu_text_colour", 220 );
    $local_menu_color = get_field( "menu_text_colour", 209 );
    $evidence_menu_color = get_field( "menu_text_colour", 319 );
    $substantive_interview_menu_color = get_field( "menu_text_colour", 324 );
    $positive_decision_menu_color = get_field( "menu_text_colour", 333 );
    $refusal_menu_color = get_field( "menu_text_colour", 339 );
    $submit_appeal_menu_color = get_field( "menu_text_colour", 346 );
    $appeal_hearing_menu_color = get_field( "menu_text_colour", 353 );
    $possible_outcomes_menu_color = get_field( "menu_text_colour", 357 );
    $fresh_claim_menu_color = get_field( "menu_text_colour", 360 );
    $fresh_outcomes_menu_color = get_field( "menu_text_colour", 363 );
	
	
	$pages = get_pages(array(
		'meta_key' => '_wp_page_template',
		'meta_value' => 'stages.php'
	));
	
	foreach($pages as $page){
	 //   echo $page->ID.' ';
	}
?>




<nav class="main-nav">
    <div class="menu-open-btn">
        <p style="color:<?php the_field('background_colour'); ?>">Stages
            <i style="color:<?php the_field('background_colour'); ?>"
                class="fas fa-arrow-circle-right arrow-right fa-lg"></i>
            <i class="fas fa-arrow-circle-down arrow-down fa-lg"></i>
        </p>


    </div>

    <div class="nav-container">
        <!-- <a class="stage-btn home-btn" href="/"><img src="/wp-content/uploads/home-icon.png"></a> -->
        <div class="mobile-nav-close">
            <i class="fas fa-times-circle fa-lg"></i>
        </div>

        <div class="nav-item-container">
            <a href="/claim-asylum">
                <div class="nav-item nav-item-1"
                    style="background-color:<?php echo $asylum; ?>; color:<?php echo $ayslum_menu_color; ?>">
                    Claim Asylum
                </div>
            </a>
            <a href="/welfare-interview">
                <div class="nav-item nav-item-2"
                    style="background-color:<?php echo $welfare; ?>; color:<?php echo $welfare_menu_color; ?>">
                    Welfare Interview</div>
            </a>
            <a href="/local-authority-care">
                <div class="nav-item nav-item-3"
                    style="background-color:<?php echo $local; ?>; color:<?php echo $local_menu_color; ?>">Local
                    Authority Care
                </div>
            </a>
            <a href="/statement-of-evidence-form">
                <div class="nav-item nav-item-4"
                    style="background-color:<?php echo $evidence; ?>; color:<?php echo $evidence_menu_color; ?>">
                    Statement of Evidence
                    Form</div>
            </a>
            <a href="/substantive-interview">
                <div class="nav-item nav-item-5"
                    style="background-color:<?php echo $substantive_interview; ?>; color:<?php echo $substantive_interview_menu_color; ?>">
                    Substantive
                    Interview</div>
            </a>
            <a href="/home-office-positive-decision">
                <div class="nav-item nav-item-6"
                    style="background-color:<?php echo $positive_decision; ?>; color:<?php echo $positive_decision_menu_color; ?>">
                    Home Office
                    positive
                    decision</div>
            </a>
            <a href="/home-officere-refusal">
                <div class="nav-item nav-item-7"
                    style="background-color:<?php echo $refusal; ?>; color:<?php echo $refusal_menu_color; ?>">Home
                    Office refusal
                </div>
            </a>
            <a href="/submit-appeal">
                <div class="nav-item nav-item-8"
                    style="background-color:<?php echo $submit_appeal; ?>; color:<?php echo $submit_appeal_menu_color; ?>">
                    Submit appeal
                </div>
            </a>
            <a href="/appeal-hearing">
                <div class="nav-item nav-item-9"
                    style="background-color:<?php echo $appeal_hearing; ?>; color:<?php echo $appeal_hearing_menu_color; ?>">
                    Appeal hearing
                </div>
            </a>
            <a href="/possible-outcomes-after-appeal-hearing">
                <div class="nav-item nav-item-10"
                    style="background-color:<?php echo $possible_outcomes; ?>; color:<?php echo $possible_outcomes_menu_color; ?>">
                    Outcomes
                    after
                    appeal hearing</div>
            </a>
            <a href="/fresh-claim">
                <div class="nav-item nav-item-11"
                    style="background-color:<?php echo $fresh_claim; ?>; color:<?php echo $fresh_claim_menu_color; ?>">
                    Fresh claim</div>
            </a>
            <a href="/possible-outcomes-from-a-fresh-claim">
                <div class="nav-item nav-item-12"
                    style="background-color:<?php echo $fresh_outcomes; ?>; color:<?php echo $fresh_outcomes_menu_color; ?>">
                    Outcomes from
                    a fresh claim</div>
            </a>
        </div>

        <!-- <div class="star-card">
            <a href="star-cards">
                <img src="/wp-content/uploads/star-card-sm-01.png">
                <p>Star Cards</p>
            </a>
            <a href="star-cards">
                <img src="/wp-content/uploads/star-card-sm-01.png">
                <p>Star Cards</p>
            </a>
        </div> -->

    </div>


</nav>

<!-- end main menu / hamburger -->