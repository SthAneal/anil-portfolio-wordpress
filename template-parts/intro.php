<?php 
    // intro section begins.
?>
<section class="cus-port__intro-wrapper cus-port__container d-flex spacer-large" id="home">
    <!-- <div class="cus-port__intro-quote d-flex">
        <div class="cus-port__intro-quote-first-text"><span class="invert-me">Front</span>&nbsp;<span>End</span></div>
        <div><span class="cus-port__intro-quote-second-text">Back End</span> <span class="cus-port__intro-quote-third-text">&</span></div>
        <div class="cus-port__intro-quote-second-text"><span>Back</span>&nbsp;<span class="invert-me">End</span></div> 
        <div class="cus-port__intro-quote-fourth-text"><span class="invert-me">Full</span>&nbsp;<span>Stack</span></div>
    </div> -->
    
    <?php dynamic_sidebar('intro-experties-text'); ?>

    <div class="cus-port__intro-image__outer-wrapper d-flex">
        <div class="cus-port__intro-image__outer-circle">
            <div class="cus-port__intro-image__pseudo-circle cus-port__intro-image__pseudo-circle--first"></div>
            <div class="cus-port__intro-image__pseudo-circle  cus-port__intro-image__pseudo-circle--second"></div>
            <div class="cus-port__intro-image__pseudo-circle  cus-port__intro-image__pseudo-circle--third"></div> 
            <!-- <div class="cus-port__intro-image__inner-wrapper">
                <img src="<?php //echo get_template_directory_uri().'/assets/image/avatar.PNG' ?>" alt="anil image"/>
            </div> -->
        <?php dynamic_sidebar('profile-picture-section'); ?>

        </div>
    </div>
    <div class="cus-port__intro-skill-wrapper d-flex">
        <!-- skills -->
        <!-- <div class="cus-port__intro-skill d-flex">
            <span class="cus-port__intro-skill__image-wrapper d-flex">
                <img src="<?php //echo get_template_directory_uri().'/assets/image/html.png' ?>" alt=""/>
            </span>
            <div class="cus-port__intro-skill__content d-flex">
                <div class="cus-port__intro-skill__title d-flex">
                    HTML
                </div>
                <div class="cus-port__intro-skill__description d-flex">
                This is description of HTML. 
                </div>
            </div>
        </div>

        <div class="cus-port__intro-skill d-flex">
            <span class="cus-port__intro-skill__image-wrapper d-flex">
                <img src="<?php //echo get_template_directory_uri().'/assets/image/css-3.png' ?>" alt=""/>
            </span>
            <div class="cus-port__intro-skill__content d-flex">
                <div class="cus-port__intro-skill__title d-flex">
                    CSS 3
                </div>
                <div class="cus-port__intro-skill__description d-flex">
                This is description of CSS 3.
                </div>
            </div>
        </div>

        <div class="cus-port__intro-skill d-flex">
            <span class="cus-port__intro-skill__image-wrapper d-flex">
                <img src="<?php //echo get_template_directory_uri().'/assets/image/java-script.png' ?>" alt=""/>
            </span>
            <div class="cus-port__intro-skill__content d-flex">
                <div class="cus-port__intro-skill__title d-flex">
                    JAVA-SCRIPT
                </div>
                <div class="cus-port__intro-skill__description d-flex">
                This is description of Java-script.
                </div>
            </div>
        </div> -->

        <?php dynamic_sidebar('intro-tech-section'); ?>

    </div>
</section>
    