<?php
    // this is about me and I love frameworks section
?>

<section class="cus-port__about-me-wrapper" id="about-me">
    <div class="cus-port__about-me main-gutter spacer-large d-flex cus-port__container">
        <div>
        <?php 
            // echo apply_filters('the_content', get_post(18)->post_content);
            //the_content($mypost); 
            dynamic_sidebar('cus_port_about_me_sidebar'); 
        ?>
        </div>
    </div>
</section>

<section class="cus-port__my-skills-wrapper spacer" id="my-tools">
    <div class="cus-port__my-skills main-gutter spacer d-flex cus-port__container">
        <div class="cus-port__main-title">
            <h3 class="invert-me">Tech I use</h3>
        </div>
        <?php dynamic_sidebar('cus_port_skill_tools_sidebar_1'); ?>
    </div>
    <div class="cus-port__my-skills main-gutter spacer d-flex cus-port__container">
        <div class="cus-port__main-title">
            <h3 class="invert-me">Frameworks I use</h3>
        </div>
        <?php dynamic_sidebar('cus_port_skill_tools_sidebar_2'); ?>
    </div>
    <div class="cus-port__my-skills main-gutter spacer d-flex cus-port__container">
        <div class="cus-port__main-title">
            <h3 class="invert-me">Expousers that I have</h3>
        </div>
        <?php dynamic_sidebar('cus_port_skill_tools_sidebar_3'); ?>
    </div>
</section>