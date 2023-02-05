<?php 
    /**
         *Creating the widget to upload the work history.
         */

         class cus_port_project_section_widget extends WP_Widget
         {
 
             function __construct()
             {   
                 // to provide additional required script for the widget
                 parent::__construct(
 
                    // Base ID of your widget
                    'cus_port_project_section_widget',

                    // Widget name will appear in UI
                    __('Project: projects I have done.', 'cus-port'),

                    // Widget description
                    array('description' => __('To add the projects I have done.', 'cus-port'))
                );
                 
             }
 
             // Creating widget front-end
 
 
             public function widget($args, $instance)
             {
                 $projectName = apply_filters('widget_position', $instance['projectName']);
                 $description = apply_filters('widget_duration', $instance['description']);
                 $projectUrl = apply_filters('widget_description', $instance['projectUrl']);
                 $tools = apply_filters('widget_description', $instance['tools']);
                
                 // before and after widget arguments are defined by themes
             ?>

                    <div class="cus-port__project-item d-flex spacer-large">
                        <div class="cus-port__project-item__image d-flex">
                            <iframe 
                            width="100%"
                            height="100%"
                            src="<?php echo $projectUrl; ?>"
                            ></iframe>
                        </div>
                        <div class="cus-port__project-item__details d-flex">
                            <div class="cus-port__project-item__title d-flex">
                                <a href="<?php echo $projectUrl ?>" target="_blank" class="invert-me"><?php echo $projectName; ?></a>
                            </div>
                            <div class="cus-port__project-item__description d-flex">
                                <?php echo $description; ?>
                            </div>
                            <div class="cus-port__project-tech d-flex">
                                <?php
                                    $tool_arr = explode(",", $tools);
                                    $tool_wrapper_html = '';
                                    foreach($tool_arr as $tool){
                                        $tool_wrapper_html .= '<sub>'.$tool.'</sub>';
                                    }
                                    echo $tool_wrapper_html;
                                ?>
                                <!-- <sub>HTML</sub>
                                <sub>CSS3</sub>
                                <sub>JQUERY</sub>
                                <sub>BOOTSTRAP</sub>
                                <sub>PHP</sub>
                                <sub>MYSQL</sub> -->
                            </div>
                        </div>
                    </div>

                 <?php                 
             }
 
 
             // Widget Backend
             public function form($instance)
             {
                 if (isset($instance['projectName'])) {
                     $projectName = $instance['projectName'];
                 } else {
                     $projectName = __('Please enter the Project name.', 'cus-port');
                }

                if (isset($instance['description'])) {
                    $description = $instance['description'];
                } else {
                    $description = __('Please enter the Project description.', 'cus-port');
                }

                if (isset($instance['projectUrl'])) {
                    $projectUrl = $instance['projectUrl'];
                } else {
                    $projectUrl = __('Please enter the Project Url.', 'cus-port');
                }

                if (isset($instance['tools'])) {
                    $tools = $instance['tools'];
                } else {
                    $tools = __('Please enter the tools used in comma seperate format.', 'cus-port');
                }

                 // Widget admin form
                 ?>

                <p>
                    <label for="<?php echo $this->get_field_id( 'projectName' ); ?>">
                        <?php _e( 'Name:' ); ?>
                    </label>
                     <input  class="widefat" id="<?php echo $this->get_field_id( 'projectName' ); ?>" 
                        name="<?php echo $this->get_field_name( 'projectName' ); ?>"  type="text" value="<?php echo esc_attr( $projectName ); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('description'); ?>">
                         <?php _e('Description:'); ?>
                     </label>
                     <textarea class="widefat" id="<?php echo $this->get_field_id('description'); ?>"
                        name="<?php echo $this->get_field_name('description'); ?>">
                        <?php echo esc_attr($description); ?>
                    </textarea>

                    
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('projectUrl'); ?>">
                         <?php _e('Project Url:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('projectUrl'); ?>"
                         name="<?php echo $this->get_field_name('projectUrl'); ?>" type="text" value="<?php echo esc_url($projectUrl); ?>" />
                 </p>
                 <p>
                     <label for="<?php echo $this->get_field_id('tools'); ?>">
                         <?php _e('Tools Used:'); ?>
                     </label>
                     <input class="widefat" id="<?php echo $this->get_field_id('tools'); ?>"
                         name="<?php echo $this->get_field_name('tools'); ?>" type="text" value="<?php echo esc_attr($tools); ?>" />
                 </p>
                 
             <?php
             }
 
             // Updating widget replacing old instances with new
             public function update($new_instance, $old_instance)
             {
                 $instance = array();
                 $instance['projectName'] = (!empty($new_instance['projectName'])) ? strip_tags($new_instance['projectName']) : '';
                 $instance['description'] = (!empty($new_instance['description'])) ? strip_tags($new_instance['description']) : '';
                 $instance['projectUrl'] = (!empty($new_instance['projectUrl'])) ? strip_tags($new_instance['projectUrl']) : '';
                 $instance['tools'] = (!empty($new_instance['tools'])) ? strip_tags($new_instance['tools']) : '';

                 return $instance;
             }
 
         // Class cus_port_intro_tech_section_widget ends here
         }
 
         // Register and load the widget
         function cus_port_load_project_section_widget()
         {
             register_widget('cus_port_project_section_widget');
         }
         add_action('widgets_init', 'cus_port_load_project_section_widget');


?>