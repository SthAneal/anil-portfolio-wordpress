<?php
class cus_port_intro_experties_text_widget extends WP_Widget
        {

            function __construct()
            {
                parent::__construct(

                    // Base ID of your widget
                    'cus_port_intro_experties_text_widget',

                    // Widget name will appear in UI
                    __('Intro Experties Text Section Widget', 'cus-port'),

                    // Widget description
                    array('description' => __('To add the Experties Text in the introduction section', 'cus-port'), 'classname' => __('cus_port_intro_experties_text_widget', 'cus-port')
                    )
                );
            }

            // Creating widget front-end

            public function widget($args, $instance)
            {
                // $title = apply_filters('widget_title', $instance['title']);
                // $description = apply_filters('widget_description', $instance['description']);
                // $image = apply_filters('widget_image', $instance['image']);

                $line1word1 = apply_filters( 'widget_line1word1', $instance['line1word1'] );
                $line1word2 = apply_filters( 'widget_line1word2', $instance['line1word2'] );
                $line2word1 = apply_filters( 'widget_line2word1', $instance['line2word1'] );
                $line2word2 = apply_filters( 'widget_line2word2', $instance['line2word2'] );
                $line3word1 = apply_filters( 'widget_line3word1', $instance['line3word1'] );
                $line3word2 = apply_filters( 'widget_line3word2', $instance['line3word2'] );


                // before and after widget arguments are defined by themes
                echo $args['before_widget'];
            ?>
                <div class="cus-port__intro-quote-first-text"><span class="invert-me"><?php echo $line1word1 ?></span>&nbsp;<span><?php echo $line1word2 ?></span></div>
                <div class="cus-port__intro-quote-second-text"><span><?php echo $line2word1 ?></span>&nbsp;<span class="invert-me"><?php echo $line2word2 ?></span></div> 
                <div class="cus-port__intro-quote-fourth-text"><span class="invert-me"><?php echo $line3word1 ?></span>&nbsp;<span><?php echo $line3word2 ?></span></div>
                

                <?php                 
                echo $args['after_widget'];
            }




            // Widget Backend
            public function form($instance)
            {
                if (isset($instance['line1word1'])) {
                    $line1word1 = $instance['line1word1'];
                } else {
                    $line1word1 = __('Please edit to add new line1 word1 value.', 'cus-port');
                }

                if (isset($instance['line1word2'])) {
                    $line1word2 = $instance['line1word2'];
                } else {
                    $line1word2 = __('Please edit to add line1 word2 value.', 'cus-port');
                }


                if (isset($instance['line2word1'])) {
                    $line2word1 = $instance['line2word1'];
                } else {
                    $line2word1 = __('Please edit to add new line2 word1 value.', 'cus-port');
                }

                if (isset($instance['line2word2'])) {
                    $line2word2 = $instance['line2word2'];
                } else {
                    $line2word2 = __('Please edit to add line2 word2 value.', 'cus-port');
                }

                if (isset($instance['line3word1'])) {
                    $line3word1 = $instance['line3word1'];
                } else {
                    $line3word1 = __('Please edit to add line3 word1 value.', 'cus-port');
                }

                if (isset($instance['line3word2'])) {
                    $line3word2 = $instance['line3word2'];
                } else {
                    $line3word2 = __('Please edit to add line3 word2 value.', 'cus-port');
                }
                
                // Widget admin form
                ?>
                <p>
                    <label for="<?php echo $this->get_field_id('line1word1'); ?>">
                        <?php _e('Line 1:'); ?>
                    </label>
                    <div>
                        <input class="widefat" id="<?php echo $this->get_field_id('line1word1'); ?>"
                            name="<?php echo $this->get_field_name('line1word1'); ?>" type="text" value="<?php echo esc_attr($line1word1); ?>" />

                        <input class="widefat" id="<?php echo $this->get_field_id('line1word2'); ?>"
                            name="<?php echo $this->get_field_name('line1word2'); ?>" type="text" value="<?php echo esc_attr($line1word2); ?>" />
                    </div>
                </p>

                <p>
                    <label for="<?php echo $this->get_field_id('line2word1'); ?>">
                        <?php _e('Line 2:'); ?>
                    </label>
                    <div>
                        <input class="widefat" id="<?php echo $this->get_field_id('line2word1'); ?>"
                            name="<?php echo $this->get_field_name('line2word1'); ?>" type="text" value="<?php echo esc_attr($line2word1); ?>" />

                        <input class="widefat" id="<?php echo $this->get_field_id('line1word2'); ?>"
                            name="<?php echo $this->get_field_name('line2word2'); ?>" type="text" value="<?php echo esc_attr($line2word2); ?>" />
                    </div>
                </p>

                <p>
                    <label for="<?php echo $this->get_field_id('line3word1'); ?>">
                        <?php _e('Line 3:'); ?>
                    </label>
                    <div>
                        <input class="widefat" id="<?php echo $this->get_field_id('line3word1'); ?>"
                            name="<?php echo $this->get_field_name('line3word1'); ?>" type="text" value="<?php echo esc_attr($line3word1); ?>" />

                        <input class="widefat" id="<?php echo $this->get_field_id('line1word2'); ?>"
                            name="<?php echo $this->get_field_name('line3word2'); ?>" type="text" value="<?php echo esc_attr($line3word2); ?>" />
                    </div>
                </p>
                
            <?php
            }

            // Updating widget replacing old instances with new
            public function update($new_instance, $old_instance)
            {
                $instance = array();
                $instance['line1word1'] = (!empty($new_instance['line1word1'])) ? strip_tags($new_instance['line1word1']) : '';
                $instance['line1word2'] = (!empty($new_instance['line1word2'])) ? strip_tags($new_instance['line1word2']) : '';
                
                $instance['line2word1'] = (!empty($new_instance['line2word1'])) ? strip_tags($new_instance['line2word1']) : '';
                $instance['line2word2'] = (!empty($new_instance['line2word2'])) ? strip_tags($new_instance['line2word2']) : '';

                $instance['line3word1'] = (!empty($new_instance['line3word1'])) ? strip_tags($new_instance['line3word1']) : '';
                $instance['line3word2'] = (!empty($new_instance['line3word2'])) ? strip_tags($new_instance['line3word2']) : '';
                

                return $instance;
            }

        // Class cus_port_intro_tech_section_widget ends here
        }

        // Register and load the widget
        function cus_port_load_intro_experties_text_widget()
        {
            register_widget('cus_port_intro_experties_text_widget');
        }
        add_action('widgets_init', 'cus_port_load_intro_experties_text_widget');