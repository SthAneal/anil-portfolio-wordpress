<?php
  /**
* Template Name: Front Page
*/

get_header();

?>

<main>
    <?php
    // include('intro.php');
    // include(get_template_directory_uri() . '/intro.php');
    get_template_part( 'template-parts/intro', 'none' );
    get_template_part('template-parts/about-me','none');
    get_template_part('template-parts/work','none');
    get_template_part('template-parts/project','none');
    get_template_part('template-parts/contact-me','none');
    ?>
    <!-- fixed email address -->
    <div class="cus-port__fixed-email invert-me">
      <?php dynamic_sidebar('header-content-2'); ?>
    </div>
    <!-- scroll to top -->
    <span class="cus-port__scroll-to-top" id="cus-port__scroll-to-top" title="Click to Launch">
      <i class="fa-solid fa-rocket"></i>
    </span>
</main>
<?php
get_footer();
?>