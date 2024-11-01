<?php
/*
Plugin Name: Zodiac Information
Plugin URI: www.zenixsol.com
Description: By Using This widget users can get their Zodiac Information
Author: ZenixSol
Version: 0.9
Author URI: support@zenixsol.com

*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/


/**
 * Add function to widgets_init that'll load our widget.
 * @since 0.1
 */
add_action( 'widgets_init', 'ZodiacInformation_load_widgets' );

/**
 * Register our widget.
 * 'ZodiacInformation_Widget' is the widget class used below.
 *
 * @since 0.1
 */
function ZodiacInformation_load_widgets() {
    register_widget( 'ZodiacInformation_Widget' );
}
// return the path to where this plugin is currently installed
function get_plugin_url_Zi() {
    // WP < 2.6
    if ( !function_exists( "plugins_url" ) )
        return get_option( "siteurl" ) . "/wp-content/plugins/" . plugin_basename( dirname( __FILE__ ) );
    else
        return plugins_url( plugin_basename( dirname( __FILE__ ) ) );
}
/**
 * ZodiacInformation_widget class.
 * This class handles everything that needs to be handled with the widget:
 * the settings, form, display, and update.  Nice!
 *
 * @since 0.1
 */
class ZodiacInformation_Widget extends WP_Widget {

	/**
	 * Widget setup.
	 */
	function ZodiacInformation_Widget() {
            $widget_ops = array('description' => __('Widget to get Zodiac information of stars.', 'Zodiac Information Widget'));
            $control_ops = array('width' => '280');
            $this->WP_Widget('ZI', 'Zodiac Information', $widget_ops, $control_ops);
	}

	/**
	 * How to display the widget on the screen.
	 */
	function widget( $args, $instance ) {
           
            extract( $args );
            /* Our variables from the widget settings. */
            $title = apply_filters('widget_title', $instance['title'] );
            /* Before widget (defined by themes). */
            echo $before_widget;
            /* Display the widget title if one was input (before and after defined by themes). */
            if ( $title ) {
			?>
			<div style="font-size:12px;">
			<?php
                echo $before_title . $title . $after_title;
				?>
				</div><?php 
            }
            include "view_zodiac_information.php";
            /* After widget (defined by themes). */
            echo $after_widget;
	}

	/**
	 * Update the widget settings.
	 */
	function update( $new_instance, $old_instance ) {
            $instance = $old_instance;
            
            /* Strip tags for title and name to remove HTML (important for text inputs). */
            $instance['title'] = strip_tags( $new_instance['title'] );
           
           // print_r($instance);
            return $instance;
	}

	/**
	 * Displays the widget settings controls on the widget panel.
	 * Make use of the get_field_id() and get_field_name() function
	 * when creating your form elements. This handles the confusing stuff.
	 */
	function form( $instance ) {
          
            ?>
            
            
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'hybrid'); ?></label>
                <input id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
            
           
           
	<?php
	}
}

?>