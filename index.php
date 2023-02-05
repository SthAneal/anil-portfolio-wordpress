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
      sth.anil87@gmail.com
    </div>
</main>
<?php
get_footer();
?>