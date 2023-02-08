<?php


add_action('wp_enqueue_script', 'cus_port_assets');

/**
 * cus_port functions and definations.
 */

if (!function_exists('cus_port_setup')) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

    function cus_port_setup()
    {
        /** 
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Crafty Press, use a find and replace
         * to change 'cus-port' to the name of your theme in all the template files.
         */
        load_theme_textdomain('cus_port', get_template_directory() . '/languages');


        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('cus_port_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         */
        add_theme_support('custom-logo', [
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]);

        /**
         * Add Support for Custom Page Header
         */
        add_theme_support('custom-header', array(
            'flex-width' => true,
            'width' => 1600,
            'flex-height' => true,
            'height' => 450,
            'default-image' => '',
            'header-text' => false

        ));

        add_theme_support('wp-block-styles');

        /**
         * Add Post Type Support
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'primary' => esc_html__('Header Menu', 'cus-port'),
                'footer' => esc_html__('Footer Menu', 'cus-port'),
                'mobile' => esc_html__('Mobile Menu', 'cus-port'),
            ));

        // To hide the top admin bar in front end.
        add_filter('show_admin_bar', '__return_false');

            
        /**
         *  Add Page Id column in admin page edit section
         */

        function add_column( $columns ){
            $columns['page_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
            return $columns;
        }
        add_filter('manage_pages_columns', 'add_column', 5);
        
        function column_content( $column, $id ){
            if( $column === 'page_id_clmn')
                echo $id;
        }
        add_action('manage_pages_custom_column', 'column_content', 5, 2); // no. 2 refers to the number of argument the function is asking for. 
       

        /**
         * activate the widget section in the theme.
         */
        // add_theme_support('widgets');

        /**
         * Register Sidebar widget area.
         *
         * @since 1.0.0
         */
        function cus_port_header_content_1_widgets()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Header-content-1', 'cus-port'),
                    'id' => 'header-content-1',
                    'description' => esc_html__('Add widgets here.', 'cus-port'),
                    'before_widget' => '<span id="%1$s">',
                    'after_widget' => '</span>',
                    'before_title' => '<h4 class="widget-title">',
                    'after_title' => '</h4>',
                ));
        }
        add_action('widgets_init', 'cus_port_header_content_1_widgets');

        function cus_port_header_content_2_widgets()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Header-content-2', 'cus-port'),
                    'id' => 'header-content-2',
                    'description' => esc_html__('Add widgets here.', 'cus-port'),
                    'before_widget' => '<span id="%1$s">',
                    'after_widget' => '</span>',
                    'before_title' => '<h4 class="widget-title">',
                    'after_title' => '</h4>',
                ));
        }
        add_action('widgets_init', 'cus_port_header_content_2_widgets');

        /**
         * side bar holder for intro tech sidebar widget
         * 
         * @return void
         */
        function cus_port_intro_tech_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Intro-tech-section', 'cus-port'),
                    'id' => 'intro-tech-section',
                    'description' => esc_html__('Add widgets here.', 'cus-port'),
                    'before_widget' => '<span id="%1$s">',
                    'after_widget' => '</span>',
                    'before_title' => '<h4 class="widget-title">',
                    'after_title' => '</h4>',
                ));
        }
        add_action('widgets_init', 'cus_port_intro_tech_sidebar');


        /**
         * side bar holder for profile picture holder
         * 
         */
        function cus_port_profile_picture_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Profile-picture-section', 'cus-port'),
                    'id' => 'profile-picture-section',
                    'description' => esc_html__('Add Profile picture here.', 'cus-port'),
                    'before_widget' => '<div class="cus-port__intro-image__inner-wrapper">',
                    'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_profile_picture_sidebar');


        /**
         * side bar holder for profile picture holder
         * 
         */
        function cus_port_intro_experties_text_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('intro-experties-text', 'cus-port'),
                    'id' => 'cus-port-intro-experties-text',
                    'description' => esc_html__('Add Experties texts of Introduction section.', 'cus-port'),
                    'before_widget' => '<div class="cus-port__intro-quote d-flex">',
                    'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_intro_experties_text_sidebar');


         /**
         * side bar holder for about me section
         * 
         */
        function cus_port_about_me_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('About me excerpt', 'cus-port'),
                    'id' => 'cus_port_about_me_sidebar',
                    'description' => esc_html__('Add About me content', 'cus-port'),
                    'before_widget' => '<div">',
                    'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_about_me_sidebar');


         /**
         * side bar holder for skill tools i.e. tech i use for frontend
         * 
         */
        function cus_port_skill_tools_1_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Tech I use for Frontend', 'cus-port'),
                    'id' => 'cus_port_skill_tools_sidebar_1',
                    'description' => esc_html__('Add Skill tools group-1 section for tech I use for frontend.', 'cus-port'),
                    'before_widget' => '<div class="flex-d">',
                    'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_skill_tools_1_sidebar');

        /**
         * side bar holder for skill tools: Framework I use for frontend
         * 
         */
        function cus_port_skill_tools_2_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Framework I use for Frontend', 'cus-port'),
                    'id' => 'cus_port_skill_tools_sidebar_2',
                    'description' => esc_html__('Add Skill tools group-2 section for framework I use for frontend.', 'cus-port'),
                    'before_widget' => '<div class="flex-d">',
                    'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_skill_tools_2_sidebar');


        /**
         * side bar holder for skill tools: Expouser that I have
         * 
         */
        function cus_port_skill_tools_3_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Expouser that I have', 'cus-port'),
                    'id' => 'cus_port_skill_tools_sidebar_3',
                    'description' => esc_html__('Add Skill tools group-3 section for expouser that I have.', 'cus-port'),
                    'before_widget' => '<div class="flex-d">',
                    'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_skill_tools_3_sidebar');


        /**
         * side bar holder for Work history section
         * 
         */
        function cus_port_work_history_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Where have I worked', 'cus-port'),
                    'id' => 'cus_port_work_history_sidebar',
                    'description' => esc_html__('Add Work place where I have worked.', 'cus-port'),
                    // 'before_widget' => '<div class="cus-port__work-item d-flex">',
                    // 'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_work_history_sidebar');


        /**
         * side bar holder for Work history section
         * 
         */
        function cus_port_project_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Project I have done.', 'cus-port'),
                    'id' => 'cus_port_project_sidebar',
                    'description' => esc_html__('Add Projects I have done.', 'cus-port'),
                    // 'before_widget' => '<div class="cus-port__work-item d-flex">',
                    // 'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_project_sidebar');


        /**
         * side bar holder for Contact me section
         * 
         */
        function cus_port_contact_me_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Contact me.', 'cus-port'),
                    'id' => 'cus_port_contact_me_sidebar',
                    'description' => esc_html__('Add Contact me details.', 'cus-port'),
                    // 'before_widget' => '<div class="cus-port__work-item d-flex">',
                    // 'after_widget' => '</div>',
                ));
        }
        add_action('widgets_init', 'cus_port_contact_me_sidebar');


        /**
         * side bar holder for Footer's designed by section
         * 
         */
        function cus_port_design_by_sidebar()
        {
            // Default Sidebar
            register_sidebar(
                array(
                    'name' => esc_html__('Designed by.', 'cus-port'),
                    'id' => 'cus_port_design_by_sidebar',
                    'description' => esc_html__('Add designed by content.', 'cus-port'),
                    'before_widget' => '<span>',
                    'after_widget' => '</span>',
                ));
        }
        add_action('widgets_init', 'cus_port_design_by_sidebar');

        /**
         *  ---- WIDGETS SECTIONS ----
         */


        /**
         *Creating the widget to upload the Intro tech items.
         */

        class cus_port_intro_tech_section_widget extends WP_Widget
        {

            function __construct()
            {   
                // to provide additional required script for the widget
                add_action( 'admin_enqueue_scripts', array( $this, 'cus_port_intro_tech_assets' ) );

                parent::__construct(

                    // Base ID of your widget
                    'cus_port_intro_tech_section_widget',

                    // Widget name will appear in UI
                    __('Intro Tech Section Widget', 'cus-port'),

                    // Widget description
                    array('description' => __('To add the tech items into the introduction section', 'cus-port'), 'classname' => __('cus_port_intro_tech_section_widget', 'cus-port')
                    )
                );
            }

            // creating cus_port_intro_tech_assets script
            public function cus_port_intro_tech_assets()
            {
                wp_enqueue_script('media-upload');
                wp_enqueue_script('thickbox');
                wp_enqueue_script('cus-port-media-upload', plugin_dir_url(__FILE__) . 'cus-port-media-upload.js', array( 'jquery' )) ;
                wp_enqueue_style('thickbox');
            }

            // Creating widget front-end

            /** 
            public function widget($args, $instance)
            {
                $title = apply_filters('widget_title', $instance['title']);
                $description = apply_filters('widget_description', $instance['description']);
                $image = apply_filters('widget_image', $instance['image']);


                // before and after widget arguments are defined by themes
                echo $args['before_widget'];
                if (!empty($title))
                    echo '<div>'.$args['before_title'] . $title . $args['after_title'].'</div>';

                // This is where you run the code and display the output
                // echo __('Hello, World!', 'cus-port');
                if (!empty($description))
                    echo  $description;

                if (!empty($image)):
                    // echo $args['before_title'] . $image . $args['after_title'];
                ?>
                    <p>
                    <img src='<?php echo $image ?>'>
                    </p>
                <?php 
                endif;
                
                echo $args['after_widget'];
            }
            */

            public function widget($args, $instance)
            {
                $title = apply_filters('widget_title', $instance['title']);
                $description = apply_filters('widget_description', $instance['description']);
                $image = apply_filters('widget_image', $instance['image']);

                // before and after widget arguments are defined by themes
                echo $args['before_widget'];
            ?>

                <div class="cus-port__intro-skill d-flex">
                    <span class="cus-port__intro-skill__image-wrapper d-flex">
                        <img src="<?php echo $image ?>" alt=""/>
                    </span>
                    <div class="cus-port__intro-skill__content d-flex">
                        <div class="cus-port__intro-skill__title d-flex">
                            <?php echo $title ?>
                        </div>
                        <div class="cus-port__intro-skill__description d-flex">
                            <?php echo $description ?>
                        </div>
                    </div>
                </div>

                <?php                 
                echo $args['after_widget'];
            }




            // Widget Backend
            public function form($instance)
            {
                if (isset($instance['title'])) {
                    $title = $instance['title'];
                } else {
                    $title = __('Please edit to add new title.', 'cus-port');
                }

                if (isset($instance['description'])) {
                    $description = $instance['description'];
                } else {
                    $description = __('Please edit to add description.', 'cus-port');
                }

                if (isset($instance['image'])) {
                    $image = $instance['image'];
                } else {
                    $image = __('Image not selected.', 'cus-port');
                }
                // Widget admin form
                ?>
                <p>
                    <label for="<?php echo $this->get_field_id('title'); ?>">
                        <?php _e('Title:'); ?>
                    </label>
                    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
                        name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
                </p>

                <p>
                    <label for="<?php echo $this->get_field_id('description'); ?>">
                        <?php _e('Description:'); ?>
                    </label>
                    <input class="widefat" id="<?php echo $this->get_field_id('description'); ?>"
                        name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo esc_attr($description); ?>" />
                </p>

                <p>
                    <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
                    <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
                    <input class="upload_image_button" type="button" value="Upload Image" />
                </p>
            <?php
            }

            // Updating widget replacing old instances with new
            public function update($new_instance, $old_instance)
            {
                $instance = array();
                $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
                $instance['description'] = (!empty($new_instance['description'])) ? strip_tags($new_instance['description']) : '';
                $instance['image'] = (!empty($new_instance['image'])) ? strip_tags($new_instance['image']) : '';

                return $instance;
            }

        // Class cus_port_intro_tech_section_widget ends here
        }

        // Register and load the widget
        function cus_port_load_intro_tech_section_widget()
        {
            register_widget('cus_port_intro_tech_section_widget');
        }
        add_action('widgets_init', 'cus_port_load_intro_tech_section_widget');


        /**
         *  Creating the introduction section's expert text holder widget
         * 
         */

         include_once(get_stylesheet_directory().'/widgets/intro-experties.php');


         /**
         *  Creating the About section's Skill tools holder widget
         */

         include_once(get_stylesheet_directory().'/widgets/skill-tools.php');


        /**
         * Initializing the Work history holder widget
         */

         include_once(get_stylesheet_directory().'/widgets/work-widget.php');
        

         /**
         * Initializing the Work history holder widget
         */

         include_once(get_stylesheet_directory().'/widgets/project-widget.php');


          /**
         * Initializing the contact me holder widget
         */

         include_once(get_stylesheet_directory().'/widgets/contact-me-widget.php');
        
         /**
         *  ---- WIDGETS SECTIONS ENDS----
         */



        /**
         * Enqueue public scripts and styles.
         */
        function cus_port_public_scripts()
        {
            // Styles.
            // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], wp_rand(), 'all' );

            wp_enqueue_style('cus-port-main-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version'), 'all');
            wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/fontawesome/css/all.css', [], wp_rand(), 'all');


            // Scripts.
            // wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [ 'jquery' ], wp_rand(), true );
            // wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', array(), null, true);
            wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), wp_rand(), false);
            // print_r(get_template_directory_uri().'/assets/js/main.js');
        }
        add_action('wp_enqueue_scripts', 'cus_port_public_scripts');


    }
}

add_action('after_setup_theme', 'cus_port_setup');



?>