<?php 
        /**
         *Creating the widget to upload the work history.
         */

         class cus_port_contact_me_section_widget extends WP_Widget
         {
             function __construct()
             {   
                 // to provide additional required script for the widget
                 parent::__construct(
 
                    // Base ID of your widget
                    'cus_port_contact_me_section_widget',

                    // Widget name will appear in UI
                    __('Contact: contact me.', 'cus-port'),

                    // Widget description
                    array('description' => __('To add my contacts.', 'cus-port'))
                );
                 
             }
 
             // Creating widget front-end
 
 
             public function widget($args, $instance)
             {
                 $contactContent = apply_filters('widget_position', $instance['contactContent']);

                 $icon1Url = apply_filters('widget_duration', $instance['icon1Url']);
                 $icon1Name = apply_filters('widget_description', $instance['icon1Name']);
                 $icon1Code = apply_filters('widget_description', $instance['icon1Code']);
                 $icon1Title = apply_filters('widget_description', $instance['icon1Title']);

                 $icon2Url = apply_filters('widget_duration', $instance['icon2Url']);
                 $icon2Name = apply_filters('widget_description', $instance['icon2Name']);
                 $icon2Code = apply_filters('widget_description', $instance['icon2Code']);
                 $icon2Title = apply_filters('widget_description', $instance['icon2Title']);


                 $icon3Url = apply_filters('widget_duration', $instance['icon3Url']);
                 $icon3Name = apply_filters('widget_description', $instance['icon3Name']);
                 $icon3Code = apply_filters('widget_description', $instance['icon3Code']);
                 $icon3Title = apply_filters('widget_description', $instance['icon3Title']);

                
                 // before and after widget arguments are defined by themes
             ?>

                    <div class="cus-port__contact-me d-flex cus-port__container main-gutter">
                        <div class="cus-port__contact-me__my-say spacer d-flex">
                            <?php echo $contactContent; ?>
                        </div>

                        <div class="cus-port__contact-me__my-links d-flex">
                            <a href="<?php echo $icon1Url; ?>" target="_blank" alt="<?php echo $icon1Url; ?>" title="<?php echo $icon1Title; ?>" class="cus-port__contact-me__my-link__item d-flex">
                                <i class="<?php echo $icon1Code ?>"></i><span><?php echo $icon1Name; ?></span>
                            </a>

                            <a href="<?php echo $icon2Url; ?>" target="_blank" alt="<?php echo $icon2Url; ?>" title="<?php echo $icon2Title; ?>" class="cus-port__contact-me__my-link__item d-flex">
                                <i class="<?php echo $icon2Code ?>"></i><span><?php echo $icon2Name; ?></span>
                            </a>

                            <a href="<?php echo $icon3Url; ?>" target="_blank" alt="<?php echo $icon3Url; ?>" title="<?php echo $icon3Title; ?>" class="cus-port__contact-me__my-link__item d-flex">
                                <i class="<?php echo $icon3Code ?>"></i><span><?php echo $icon3Name; ?></span>
                            </a>
                        </div>
                    </div>

                 <?php                 
             }
 
 
             // Widget Backend
             public function form($instance)
             {
                 if (isset($instance['contactContent'])) {
                     $contactContent = $instance['contactContent'];
                 } else {
                     $contactContent = __('Please enter the contact me content.', 'cus-port');
                }

                // for icon 1
                if (isset($instance['icon1Url'])) {
                    $icon1Url = $instance['icon1Url'];
                } else {
                    $icon1Url = __('Please enter the icon url.', 'cus-port');
                }

                if (isset($instance['icon1Name'])) {
                    $icon1Name = $instance['icon1Name'];
                } else {
                    $icon1Name = __('Please enter the icon name.', 'cus-port');
                }

                if (isset($instance['icon1Code'])) {
                    $icon1Code = $instance['icon1Code'];
                } else {
                    $icon1Code = __('Please enter the icon code.', 'cus-port');
                }

                if (isset($instance['icon1Title'])) {
                    $icon1Title = $instance['icon1Title'];
                } else {
                    $icon1Title = __('Please enter the icon hover title.', 'cus-port');
                }

                // for icon 2
                if (isset($instance['icon2Url'])) {
                    $icon2Url = $instance['icon2Url'];
                } else {
                    $icon2Url = __('Please enter the icon url.', 'cus-port');
                }

                if (isset($instance['icon2Name'])) {
                    $icon2Name = $instance['icon2Name'];
                } else {
                    $icon2Name = __('Please enter the icon name.', 'cus-port');
                }

                if (isset($instance['icon2Code'])) {
                    $icon2Code = $instance['icon2Code'];
                } else {
                    $icon2Code = __('Please enter the icon code.', 'cus-port');
                }

                if (isset($instance['icon2Title'])) {
                    $icon2Title = $instance['icon2Title'];
                } else {
                    $icon2Title = __('Please enter the icon hover title.', 'cus-port');
                }
                

                // for icon 3
                if (isset($instance['icon3Url'])) {
                    $icon3Url = $instance['icon3Url'];
                } else {
                    $icon3Url = __('Please enter the icon url.', 'cus-port');
                }

                if (isset($instance['icon3Name'])) {
                    $icon3Name = $instance['icon3Name'];
                } else {
                    $icon3Name = __('Please enter the icon name.', 'cus-port');
                }

                if (isset($instance['icon3Code'])) {
                    $icon3Code = $instance['icon3Code'];
                } else {
                    $icon3Code = __('Please enter the icon code.', 'cus-port');
                }

                if (isset($instance['icon3Title'])) {
                    $icon3Title = $instance['icon3Title'];
                } else {
                    $icon3Title = __('Please enter the icon hover title.', 'cus-port');
                }
                




                 // Widget admin form
                 ?>

                <p>
                    <label for="<?php echo $this->get_field_id( 'contactContent' ); ?>">
                        <?php _e( 'Contact Content:' ); ?>
                    </label>
                    <textarea class="widefat" id="<?php echo $this->get_field_id('contactContent'); ?>"
                        name="<?php echo $this->get_field_name('contactContent'); ?>">
                        <?php echo esc_attr($contactContent); ?>
                    </textarea>
                 </p>

                 <!-- for icon 1 -->
                 <p>
                     <label for="<?php echo $this->get_field_id('icon1Name'); ?>">
                         <?php _e('Icon 1 Name:'); ?>
                     </label>
                    <input class="widefat" id="<?php echo $this->get_field_id('icon1Name'); ?>"
                         name="<?php echo $this->get_field_name('icon1Name'); ?>" type="text" value="<?php echo esc_attr($icon1Name); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('icon1Title'); ?>">
                         <?php _e('Icon 1 hover title:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon1Title'); ?>"
                         name="<?php echo $this->get_field_name('icon1Title'); ?>" type="text" value="<?php echo esc_attr($icon1Title); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('icon1Url'); ?>">
                         <?php _e('Icon 1 Url:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon1Url'); ?>"
                         name="<?php echo $this->get_field_name('icon1Url'); ?>" type="text" value="<?php echo esc_url($icon1Url); ?>" />
                 </p>
                  <p>
                     <label for="<?php echo $this->get_field_id('icon1Code'); ?>">
                         <?php _e('Icon 1 Code:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon1Code'); ?>"
                         name="<?php echo $this->get_field_name('icon1Code'); ?>" type="text" value="<?php echo esc_attr($icon1Code); ?>" />
                 </p>

                 <hr/>
                 

                 <!-- for icon 2 -->
                 <p>
                     <label for="<?php echo $this->get_field_id('icon2Name'); ?>">
                         <?php _e('Icon 2 Name:'); ?>
                     </label>
                    <input class="widefat" id="<?php echo $this->get_field_id('icon2Name'); ?>"
                         name="<?php echo $this->get_field_name('icon2Name'); ?>" type="text" value="<?php echo esc_attr($icon2Name); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('icon2Title'); ?>">
                         <?php _e('Icon 2 hover title:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon2Title'); ?>"
                         name="<?php echo $this->get_field_name('icon2Title'); ?>" type="text" value="<?php echo esc_attr($icon2Title); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('icon2Url'); ?>">
                         <?php _e('Icon 2 Url:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon2Url'); ?>"
                         name="<?php echo $this->get_field_name('icon2Url'); ?>" type="text" value="<?php echo esc_url($icon2Url); ?>" />
                 </p>
                  <p>
                     <label for="<?php echo $this->get_field_id('icon2Code'); ?>">
                         <?php _e('Icon 2 Code:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon2Code'); ?>"
                         name="<?php echo $this->get_field_name('icon2Code'); ?>" type="text" value="<?php echo esc_attr($icon2Code); ?>" />
                 </p>

                 <hr/>
                 

                 <!-- for icon 3 -->
                 <p>
                     <label for="<?php echo $this->get_field_id('icon3Name'); ?>">
                         <?php _e('Icon 3 Name:'); ?>
                     </label>
                    <input class="widefat" id="<?php echo $this->get_field_id('icon3Name'); ?>"
                         name="<?php echo $this->get_field_name('icon3Name'); ?>" type="text" value="<?php echo esc_attr($icon3Name); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('icon3Title'); ?>">
                         <?php _e('Icon 3 hover title:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon3Title'); ?>"
                         name="<?php echo $this->get_field_name('icon3Title'); ?>" type="text" value="<?php echo esc_attr($icon3Title); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('icon3Url'); ?>">
                         <?php _e('Icon 3 Url:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon3Url'); ?>"
                         name="<?php echo $this->get_field_name('icon3Url'); ?>" type="text" value="<?php echo esc_url($icon3Url); ?>" />
                 </p>
                  <p>
                     <label for="<?php echo $this->get_field_id('icon3Code'); ?>">
                         <?php _e('Icon 3 Code:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('icon3Code'); ?>"
                         name="<?php echo $this->get_field_name('icon3Code'); ?>" type="text" value="<?php echo esc_attr($icon3Code); ?>" />
                 </p>
             <?php
             }
 
             // Updating widget replacing old instances with new
             public function update($new_instance, $old_instance)
             {
                 $instance = array();
                 $instance['contactContent'] = (!empty($new_instance['contactContent'])) ? $new_instance['contactContent'] : '';

                 $instance['icon1Name'] = (!empty($new_instance['icon1Name'])) ? strip_tags($new_instance['icon1Name']) : '';
                 $instance['icon1Title'] = (!empty($new_instance['icon1Title'])) ? strip_tags($new_instance['icon1Title']) : '';
                 $instance['icon1Url'] = (!empty($new_instance['icon1Url'])) ? strip_tags($new_instance['icon1Url']) : '';
                 $instance['icon1Code'] = (!empty($new_instance['icon1Code'])) ? strip_tags($new_instance['icon1Code']) : '';

                 $instance['icon2Name'] = (!empty($new_instance['icon2Name'])) ? strip_tags($new_instance['icon2Name']) : '';
                 $instance['icon2Title'] = (!empty($new_instance['icon2Title'])) ? strip_tags($new_instance['icon2Title']) : '';
                 $instance['icon2Url'] = (!empty($new_instance['icon2Url'])) ? strip_tags($new_instance['icon2Url']) : '';
                 $instance['icon2Code'] = (!empty($new_instance['icon2Code'])) ? strip_tags($new_instance['icon2Code']) : '';

                 $instance['icon3Name'] = (!empty($new_instance['icon3Name'])) ? strip_tags($new_instance['icon3Name']) : '';
                 $instance['icon3Title'] = (!empty($new_instance['icon3Title'])) ? strip_tags($new_instance['icon3Title']) : '';
                 $instance['icon3Url'] = (!empty($new_instance['icon3Url'])) ? strip_tags($new_instance['icon3Url']) : '';
                 $instance['icon3Code'] = (!empty($new_instance['icon3Code'])) ? strip_tags($new_instance['icon3Code']) : '';


                 return $instance;
             }
 
         // Class cus_port_contact_me_section_widget ends here
         }
 
         // Register and load the widget
         function cus_port_load_contact_me_section_widget()
         {
             register_widget('cus_port_contact_me_section_widget');
         }
         add_action('widgets_init', 'cus_port_load_contact_me_section_widget');


?>