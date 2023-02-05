<?php 
    /**
         *Creating the widget to upload the work history.
         */

         class cus_port_work_section_widget extends WP_Widget
         {
 
             function __construct()
             {   
                 // to provide additional required script for the widget
                 parent::__construct(
 
                    // Base ID of your widget
                    'cus_port_work_section_widget',

                    // Widget name will appear in UI
                    __('Work history: Work place detail widget', 'cus-port'),

                    // Widget description
                    array('description' => __('To add the Work place details.', 'cus-port'))
                );
                 
             }
 
             // Creating widget front-end
 
 
             public function widget($args, $instance)
             {
                 $position = apply_filters('widget_position', $instance['position']);
                 $duration = apply_filters('widget_duration', $instance['duration']);
                 $company = apply_filters('widget_description', $instance['company']);
                 $address = apply_filters('widget_description', $instance['address']);
                
                 // before and after widget arguments are defined by themes
                //  echo $args['before_widget'];
             ?>
                    <div class="cus-port__work-item d-flex">
                        <div class="cus-port__work-item__position d-flex invert-me"><?php echo $position; ?></div>
                        <sub class="cus-port__work-item__date d-flex"><?php echo $duration; ?></sub>
                        <div class="cus-port__work-item__title d-flex"><?php echo $company; ?></div>
                        <sub class="cus-port__work-item__place d-flex"><?php echo $address; ?></sub>
                    </div>

                 <?php                 
                //  echo $args['after_widget'];
             }
 
 
 
 
             // Widget Backend
             public function form($instance)
             {
                 if (isset($instance['position'])) {
                     $position = $instance['position'];
                 } else {
                     $position = __('Please enter the Position.', 'cus-port');
                }

                if (isset($instance['duration'])) {
                    $duration = $instance['duration'];
                } else {
                    $duration = __('Please enter the work duration.', 'cus-port');
                }

                if (isset($instance['company'])) {
                    $company = $instance['company'];
                } else {
                    $company = __('Please enter the company you work.', 'cus-port');
                }

                if (isset($instance['address'])) {
                    $address = $instance['address'];
                } else {
                    $address = __('Please enter the company address.', 'cus-port');
                }

                 // Widget admin form
                 ?>

                <p>
                    <label for="<?php echo $this->get_field_id( 'position' ); ?>">
                        <?php _e( 'Position:' ); ?>
                    </label>
                     <input  class="widefat" id="<?php echo $this->get_field_id( 'position' ); ?>" 
                        name="<?php echo $this->get_field_name( 'position' ); ?>"  type="text" value="<?php echo esc_attr( $position ); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('duration'); ?>">
                         <?php _e('Duration:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('duration'); ?>"
                         name="<?php echo $this->get_field_name('duration'); ?>" type="text" value="<?php echo esc_attr($duration); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('company'); ?>">
                         <?php _e('Company:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('company'); ?>"
                         name="<?php echo $this->get_field_name('company'); ?>" type="text" value="<?php echo esc_attr($company); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('address'); ?>">
                         <?php _e('Address:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>"
                         name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo esc_attr($address); ?>" />
                 </p>
                 
             <?php
             }
 
             // Updating widget replacing old instances with new
             public function update($new_instance, $old_instance)
             {
                 $instance = array();
                 $instance['position'] = (!empty($new_instance['position'])) ? strip_tags($new_instance['position']) : '';
                 $instance['duration'] = (!empty($new_instance['duration'])) ? strip_tags($new_instance['duration']) : '';
                 $instance['company'] = (!empty($new_instance['company'])) ? strip_tags($new_instance['company']) : '';
                 $instance['address'] = (!empty($new_instance['address'])) ? strip_tags($new_instance['address']) : '';

                 return $instance;
             }
 
         // Class cus_port_intro_tech_section_widget ends here
         }
 
         // Register and load the widget
         function cus_port_load_work_section_widget()
         {
             register_widget('cus_port_work_section_widget');
         }
         add_action('widgets_init', 'cus_port_load_work_section_widget');


?>