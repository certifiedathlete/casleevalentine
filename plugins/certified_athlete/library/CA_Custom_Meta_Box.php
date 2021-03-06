<?php

/**
 * The Class.
 */
class CA_Custom_Meta_Box {

    protected $textdomian;
    protected $posts;
    protected $ca_post_type;
    protected $allowed_ca_post_types_array = array('post', 'page', 'ca_organization');
    protected $post_type_meta_box_variables = array();

    /**
     * Hook into the appropriate actions when the class is constructed.
     */
    public function __construct($ca_post_type, $textdomain = '', $post_type_meta_box_variables = array()) {
        $this->textdomain = $textdomain;
        $this->posts = array();
        $this->ca_post_type = $ca_post_type;
        $this->post_type_meta_box_variables = $post_type_meta_box_variables;
        add_action('add_meta_boxes', array($this, 'create_ca_meta_box')); //when its time to add meta boxes to the post, WP will call this function
        add_action('save_post', array($this, 'save')); //when its time to save your post, WP will call your save function
    }

    /**
     * Adds the meta box container.
     */
    public function create_ca_meta_box() {
        $post_type = $this->ca_post_type;
        $post_types = $this->allowed_ca_post_types_array;     //limit meta box to certain post types
        if (in_array($post_type, $post_types)) {
            add_meta_box($this->post_type_meta_box_variables['name'], __($this->post_type_meta_box_variables['headline'], $this->textdomain), array($this, 'render_ca_meta_box_content'), $post_type, 'advanced', 'high');
        }
    }

    /**
     * Save the meta when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function save($post_id) {

        /*
         * We need to verify this came from the our screen and with proper authorization,
         * because save_post can be triggered at other times.
         */

        // Check if our nonce is set.
        if (!isset($_POST['myplugin_inner_custom_box_nonce'])) {
            return $post_id;
        }

        $nonce = $_POST['myplugin_inner_custom_box_nonce'];

        // Verify that the nonce is valid.
        if (!wp_verify_nonce($nonce, 'myplugin_inner_custom_box')) {
            return $post_id;
        }

        // If this is an autosave, our form has not been submitted,
        //     so we don't want to do anything.
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
            return $post_id;
        }

        // Check the user's permissions.
        if ('page' == $_POST['post_type']) {

            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } else {

            if (!current_user_can('edit_post', $post_id)) {
                return $post_id;
            }
        }

        /* OK, its safe for us to save the data now. */
        //include file with specific fields to save per custom post type
        // Sanitize the user input.
        $mydata = sanitize_text_field($_POST['myplugin_new_field']);
        // Update the meta field.
        update_post_meta($post_id, '_my_meta_value_key', $mydata);
        
        $ca_organization_date_founded = sanitize_text_field($_POST['ca_organization_date_founded']);
        // Update the meta field.
        update_post_meta($post_id, 'ca_organization_date_founded', $ca_organization_date_founded);
        
        $ca_organization_name = sanitize_text_field($_POST['ca_organization_name']);
        // Update the meta field.
        update_post_meta($post_id, 'ca_organization_name', $ca_organization_name);
        
        $ca_organization_address = sanitize_text_field($_POST['ca_organization_address']);
        // Update the meta field.
        update_post_meta($post_id, 'ca_organization_address', $ca_organization_address);
    }

    /**
     * Render Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function render_ca_meta_box_content($post) {

        //include file with all specific settings for custom post type fields
        // Add an nonce field so we can check for it later.
        wp_nonce_field('myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce');

        // Use get_post_meta to retrieve an existing value from the database.
        $value = get_post_meta($post->ID, '_my_meta_value_key', true);
        $ca_organization_name = get_post_meta($post->ID, 'ca_organization_name', true);
        $ca_organization_address = get_post_meta($post->ID, 'ca_organization_address', true);
        $ca_organization_date_founded = get_post_meta($post->ID, 'ca_organization_date_founded', true);

        // Display the form, using the current value.
        //include a file with options depending on each post type
        ?>
        <label for="myplugin_new_field">
        <?php _e($this->post_type_meta_box_variables['name'], $this->textdomain); ?>
        </label>
        <input type="text" id="myplugin_new_field" name="myplugin_new_field" value="<?php echo esc_attr($value); ?>" size="25" />
        <br>

        <label for="ca_organization_date_founded">
        <?php _e($this->post_type_meta_box_variables['ca_organization_date_founded'], $this->textdomain); ?>
        </label>
        <input type="text" id="ca_organization_date_founded" name="ca_organization_date_founded" value="<?php echo esc_attr($ca_organization_date_founded); ?>" size="25" />
        <br>

        <label for="ca_organization_name">
        <?php _e($this->post_type_meta_box_variables['ca_organization_name'], $this->textdomain); ?>
        </label>
        <input type="text" id="ca_organization_name" name="ca_organization_name" value="<?php echo esc_attr($ca_organization_name); ?>" size="25" />
        <br>

        <label for="ca_organization_address">
        <?php _e($this->post_type_meta_box_variables['ca_organization_address'], $this->textdomain); ?>
        </label>
        <input type="text" id="ca_organization_address" name="ca_organization_address" value="<?php echo esc_attr($ca_organization_address); ?>" size="25" />
        <br>

        <?php
    }

}
