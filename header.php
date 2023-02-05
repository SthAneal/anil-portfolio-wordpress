<?php
/**
 * header starts here
 */
?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset='<?php bloginfo('charset') ?>'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- font-family: 'Neuton', serif; -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neuton:wght@200;300;400;700;800&display=swap" rel="stylesheet"> -->


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@200;400;600;700;800&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- header DOM starts here -->
    <header class="cus-port__main-header d-flex" id="main-header">
        <div class="cus-port__main-header__mobile-view d-flex main-gutter">
            <div class="cus-port__main-header__logo" id="menu-logo-mobile-view">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                if (has_custom_logo()) {
                    printf(
                        '<a href="%1$s"><img src="%2$s"/></a>',
                        esc_url(home_url()),
                        esc_url($logo[0])
                    );
                } else {
                    echo bloginfo('name');
                }
                ?>
            </div>
            <div class="cus-port__main-header__mobile-view__menu-btn" id="mobile-view-menu-btn">
                <i class="fa-solid fa-bars"></i>
                <i class="fa-solid fa-xmark"></i>
            </div>
        </div>
        <div class="cus-port__main-header__web-view d-flex" id="web-view-menu-wrapper">
            <div class="cus-port__main-header__basic-info main-gutter d-flex" id="main-header-basic-info-web-view">
                <span class="cus-port__main-header__basic-info--content-1 d-flex">

                    <!-- <i class="fa fa-solid fa-user"></i>    -->
                    <!-- solid style -->
                    <!-- <i class="fa-solid fa-user"></i> -->
                    <!-- regular style -->
                    <!-- <i class="fa-regular fa-user"></i> -->
                    <!-- <i class="fa-solid fa-phone"></i> -->
                    <!-- <i class="fa-solid fa-envelope"></i> -->
                    <!-- all new sharp family -->
                    <!-- <i class="fa-sharp fa-solid fa-user"></i> -->
                    <!--brand icon-->
                    <!-- <i class="fa-brands fa-github-square"></i> -->




                    <?php dynamic_sidebar('header-content-1'); ?>
                </span>
                <span class="cus-port__main-header__basic-info--content-2 d-flex">
                    <?php dynamic_sidebar('header-content-2'); ?>
                </span>
            </div>
            <div class="cus-port__container cus-port__menu-logo-container d-flex main-gutter" id="menu-logo-container-web-view">
                <div class="cus-port__main-header__logo">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    if (has_custom_logo()) {
                        printf(
                            '<a href="%1$s"><img src="%2$s"/></a>',
                            esc_url(home_url()),
                            esc_url($logo[0])
                        );
                    } else {
                        echo bloginfo('name');
                    }
                    ?>
                </div>
                <div class="cus-port__main-header__menu">
                    <nav class="cus-port__main-header__menu--nav">
                        <?php
                        if (has_nav_menu('primary')):
                            wp_nav_menu([
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => '',
                                'menu_id' => '',
                                'depth' => 3
                            ]);
                        else:
                            printf(
                                '<a href="%1$s">%2$s</a>',
                                esc_url(admin_url('/nav-menus.php')),
                                esc_html__('Asign a menu', 'cus-port')
                            );
                        endif;
                        ?>
                    </nav>
                </div>
            </div>

            <!-- for mobile view -->

            <div class="cus-port__main-header__basic-info main-gutter d-flex" id="main-header-basic-info-mobile-view">
                <span class="cus-port__main-header__basic-info--content-1 d-flex">
                    <?php dynamic_sidebar('header-content-1'); ?>
                </span>
                <span class="cus-port__main-header__basic-info--content-2 d-flex">
                    <?php dynamic_sidebar('header-content-2'); ?>
                </span>
            </div>
            <div class="cus-port__container cus-port__menu-logo-container d-flex main-gutter" id="menu-logo-container-mobile-view">
                <div class="cus-port__main-header__logo">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                    if (has_custom_logo()) {
                        printf(
                            '<a href="%1$s"><img src="%2$s"/></a>',
                            esc_url(home_url()),
                            esc_url($logo[0])
                        );
                    } else {
                        echo bloginfo('name');
                    }
                    ?>
                </div>
                <div class="cus-port__main-header__menu d-flex">
                    <nav class="cus-port__main-header__menu--nav d-flex">
                        <?php
                        if (has_nav_menu('primary')):
                            wp_nav_menu([
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => '',
                                'menu_id' => '',
                                'depth' => 3
                            ]);
                        else:
                            printf(
                                '<a href="%1$s">%2$s</a>',
                                esc_url(admin_url('/nav-menus.php')),
                                esc_html__('Asign a menu', 'cus-port')
                            );
                        endif;
                        ?>
                    </nav>
                </div>
            </div>
        
        </div>
        
    </header>