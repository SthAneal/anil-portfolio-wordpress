<?php 
    /**
         *Creating the widget to upload the Skill tools items.
         */

         class cus_port_skill_tools_section_widget extends WP_Widget
         {
 
             function __construct()
             {   
                 // to provide additional required script for the widget
                 add_action( 'admin_enqueue_scripts', array( $this, 'cus_port_intro_tech_assets' ) );
                 parent::__construct(
 
                    // Base ID of your widget
                    'cus_port_skill_tools_section_widget',

                    // Widget name will appear in UI
                    __('About us: Skill tools Section Widget', 'cus-port'),

                    // Widget description
                    array('description' => __('To add the Skill tools into the about-us section', 'cus-port'))
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
 
 
             public function widget($args, $instance)
             {
                 $description = apply_filters('widget_description', $instance['description']);
                 $image = apply_filters('widget_image', $instance['image']);
 
                 // before and after widget arguments are defined by themes
                 echo $args['before_widget'];
             ?>
                    <div class="cus-port__my-skills-hexa d-flex">
                        <img src="<?php echo $image ?>" alt=""/>
                        <span class="cus-port__my-skills-hexa--description">
                            <?php echo $description ?>
                        </span>
                    </div>

                 <?php                 
                 echo $args['after_widget'];
             }
 
 
 
 
             // Widget Backend
             public function form($instance)
             {
                 if (isset($instance['image'])) {
                     $image = $instance['image'];
                 } else {
                     $image = __('Image not selected.', 'cus-port');
                }

                if (isset($instance['description'])) {
                    $description = $instance['description'];
                } else {
                    $description = __('Please edit to add description.', 'cus-port');
                }
                 // Widget admin form
                 ?>

                <p>
                     <label for="<?php echo $this->get_field_id( 'image' ); ?>"><?php _e( 'Image:' ); ?></label>
                     <input name="<?php echo $this->get_field_name( 'image' ); ?>" id="<?php echo $this->get_field_id( 'image' ); ?>" class="widefat" type="text" size="36"  value="<?php echo esc_url( $image ); ?>" />
                     <input class="upload_image_button" type="button" value="Upload Image" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('description'); ?>">
                         <?php _e('Description:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('description'); ?>"
                         name="<?php echo $this->get_field_name('description'); ?>" type="text" value="<?php echo esc_attr($description); ?>" />
                 </p>
 
                 
             <?php
             }
 
             // Updating widget replacing old instances with new
             public function update($new_instance, $old_instance)
             {
                 $instance = array();
                 $instance['image'] = (!empty($new_instance['image'])) ? strip_tags($new_instance['image']) : '';
                 $instance['description'] = (!empty($new_instance['description'])) ? strip_tags($new_instance['description']) : '';
 
                 return $instance;
             }
 
         // Class cus_port_intro_tech_section_widget ends here
         }
 
         // Register and load the widget
         function cus_port_load_skill_tools_section_widget()
         {
             register_widget('cus_port_skill_tools_section_widget');
         }
         add_action('widgets_init', 'cus_port_load_skill_tools_section_widget');


?>