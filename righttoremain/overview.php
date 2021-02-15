<?php /* Template Name: Overview */ ?>
<?php get_header();?>




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
 $fresh_claimv = get_field( "menu_text_colour", 360 );
 $fresh_outcomes_menu_color = get_field( "menu_text_colour", 363 );
?>

<!--==========UTILITIES MENU==================-->
<?php get_template_part( 'utilities');?>
<!-- end utlities menu -->



<section class="overview-section">
    <div class="illustration-1"><img src="/wp-content/uploads/walking-man-4.png" alt=""></div>
    <div class="illustration-2"><img src="/wp-content/uploads/walking-women-v2.png" alt=""></div>
    <div class="container overview">
        <div class="next-btn-container">
            <a href="/"><span class="more-btn"><i class="fas fa-arrow-circle-up"></i></span></a>
        </div>


        <h2>An Overview of the Stages</h2>

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
            <a href="/star-cards">
                <img src="https://rcopestake65.github.io/right_to_remain_dev/images/star-card-sm-01.png">
                <p>Star Cards</p>
            </a>
        </div> -->

        <div class="next-btn-container">
            <a href="/claim-asylum"><span class="more-btn"><i class="fas fa-arrow-circle-down"></i></span></a>
        </div>
    </div><!-- end container -->


</section><!-- end overview -->


<?php get_footer();?>