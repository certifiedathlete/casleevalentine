<?php

class CA_Custom_Post_Type {

    protected $textdomian;
    protected $posts;

    public function __construct($textdomain) {

        $this->textdomain = $textdomain;
        $this->posts = array();

        add_action('init', array(&$this, 'register_post_type'));//this post will be registered during the init phase
    }

    public function register_post_type() {

        foreach ($this->posts as $key => $value) {

            register_post_type($key, $value);
        }
    }

    public function create_ca_post_type($type, $singular_label, $plural_label, $settings = array()) {

        $labels = array(
            'name' => _x($plural_label, $this->textdomain),
            'singular_name' => _x($singular_label, $this->textdomain),
            'add_new_item' => __('Add New ' . $singular_label, $this->textdomain),
            'edit_item' => __('Edit ' . $singular_label, $this->textdomain),
            'new_item' => __('New ' . $singular_label, $this->textdomain),
            'all_items' => __($plural_label, $this->textdomain),
            'view_item' => __('View ' . $singular_label, $this->textdomain),
            'search_items' => __('Search ' . $plural_label, $this->textdomain),
            'not_found' => __('No ' . $plural_label . ' found', $this->textdomain),
            'not_found_in_trash' => __('No ' . $plural_label . ' found in the Trash', $this->textdomain),
            'parent_item_colon' => __('Parent ' . $singular_label, $this->textdomain),
            'menu_name' => _x($plural_label, $this->textdomain),
        );
        $default_settings = array(
            'labels' => $labels,
            'description' => 'Holds our ' . $plural_label . ' and ' . $singular_label . ' specific data',
            'public' => true,
            'menu_position' => 5,
            'supports' => array('title', 'thumbnail', 'comments'),
            'has_archive' => true,
            'rewrite' => array('slug' => sanitize_title_with_dashes($plural_label)),
            'show_in_menu' => 'certified_athlete_admin_menu_page',
        );

        $this->posts[$type] = array_merge($default_settings, $settings);
    }

}
