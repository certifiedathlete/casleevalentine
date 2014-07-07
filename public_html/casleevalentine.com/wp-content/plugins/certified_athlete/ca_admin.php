<?php

Class CA_Admin {

    public function __construct() {
        add_action('admin_menu', array($this, 'certified_athlete_menu'));
    }

    public static function certified_athlete_menu() {
        
        include_once(CA_PLUGIN_DIR.'/library/CA_Custom_Post_Type.php');




        $post_type_slug = 'edit.php?post_type=';
        $menu_slug = 'certified_athlete_admin_menu_page';
        add_menu_page('Certified Athlete Menu', 'Certified Athlete', 'manage_options', $menu_slug, array(__CLASS__, 'certified_athlete_admin_menu'), plugins_url(CA_PLUGIN_NAME . '/icons/website/certified_athlete_logo_man_20x20.png'), 30);

        add_submenu_page($menu_slug, 'Settings', 'Settings', 'manage_options', 'ca_settings_admin_page', array(__CLASS__, 'ca_settings_admin_page'));

        add_submenu_page($menu_slug, 'Help', 'Help', 'manage_options', 'ca_help_admin_page', array(__CLASS__, 'ca_help_admin_page'));
    }

    public static function ca_check_permissions() {
        if (!current_user_can('manage_options')) {
            wp_die(__('You do not have sufficient permissions to access this page.'));
        }
    }

    public static function certified_athlete_admin_menu() {
        //OOP use calsses to generate the admin page here
        self::ca_check_permissions();
        ?>

        <div class="wrap">
            <h2>
                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man_20x20.png" alt="" width="30px">&nbsp;&nbsp;Certified Athlete		
                <a href="?page=ca_settings_admin_page" class="upload add-new-h2">
                    Settings
                </a>
                <a href="?page=ca_help_admin_page" class="browse-themes add-new-h2">
                    Help
                </a>
            </h2>

            <div class="theme-navigation">
                <span class="theme-count">10</span>
                <a class="theme-section current" href="http://casleevalentine.com" data-sort="featured">Author - Caslee Valentine</a>
                <a class="theme-section" href="#" data-sort="popular">Popular</a>
                <a class="theme-section" href="#" data-sort="new">Latest&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>                
                <label class="screen-reader-text" for="theme-search-input">Search Certified Athlete</label><input placeholder="Search Certified Athlete..." type="search" id="theme-search-input" class="theme-search"></div>


            <div class="theme-browser rendered"><div class="themes">

                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_organization_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Organizations" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_organization_admin_page">
                            <span class="more-details">Go to Organizations Admin</span>
                        </a>
                        <h3 class="theme-name">Organizations</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div>                    

                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_team_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Teams" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_team_admin_page">
                            <span class="more-details">Go to Teams Admin</span>
                        </a>
                        <h3 class="theme-name">Teams</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 

                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_member_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Members" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_member_admin_page">
                            <span class="more-details">Go to Members Admin</span>
                        </a>
                        <h3 class="theme-name">Members</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_event_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Events" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_event_admin_page">
                            <span class="more-details">Go to Events Admin</span>
                        </a>
                        <h3 class="theme-name">Events</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_swag_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Swag" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_swag_admin_page">
                            <span class="more-details">Go to Swag Admin</span>
                        </a>
                        <h3 class="theme-name">Swag</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_sports_rank_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Sports Rank" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_sports_rank_admin_page">
                            <span class="more-details">Go to Sports Rank Admin</span>
                        </a>
                        <h3 class="theme-name">Sports Rank</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_sports_stats_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Sports Stats" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_sports_stats_admin_page">
                            <span class="more-details">Go to Sports Stats Admin</span>
                        </a>
                        <h3 class="theme-name">Sports Stats</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_content_slide_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Content Slides" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_content_slide_admin_page">
                            <span class="more-details">Go to Content Slides Admin</span>
                        </a>
                        <h3 class="theme-name">Content Slides</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_summary_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Summaries" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_summary_admin_page">
                            <span class="more-details">Go to Summaries Admin</span>
                        </a>
                        <h3 class="theme-name">Summaries</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_tip_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Tips" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_tip_admin_page">
                            <span class="more-details">Go to Tips Admin</span>
                        </a>
                        <h3 class="theme-name">Tips</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_location_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Locations" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_location_admin_page">
                            <span class="more-details">Go to Locations Admin</span>
                        </a>
                        <h3 class="theme-name">Locations</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_business_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Businesses" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_business_admin_page">
                            <span class="more-details">Go to Businesses Admin</span>
                        </a>
                        <h3 class="theme-name">Businesses</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_settings_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Settings" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_settings_admin_page">
                            <span class="more-details">Settings</span>
                        </a>
                        <h3 class="theme-name">Settings</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 
                    <div class="theme" tabindex="0">
                        <div class="theme-screenshot">
                            <a href="?page=ca_help_admin_page">
                                <img src="<?php echo CA_PLUGIN_URL; ?>/icons/website/certified_athlete_logo_man.png" alt="Help" width="30px">
                            </a>                            
                        </div>
                        <a href="?page=ca_help_admin_page">
                            <span class="more-details">Get Help!</span>
                        </a>
                        <h3 class="theme-name">Help</h3>
                        <div class="theme-actions">
                            <a class="button button-primary" href="#">Add New</a>
                            <a class="button button-secondary" href="#">View All</a>
                        </div>
                    </div> 

                </div>
            </div>


            <br class="clear">
        </div>

        <?php
    }

    public static function ca_organization_admin_page() {
        self::ca_check_permissions();        
        include_once(plugins_url('/community/organizations/admin.php', __FILE__));
        //declare posttypes here

        if (file_exists($file)) {
            include $file;
        }
    }

    public static function ca_team_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/teams/admin.php', __FILE__));
    }

    public static function ca_member_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/members/admin.php', __FILE__));
    }

    public static function ca_event_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/events/admin.php', __FILE__));
    }

    public static function ca_swag_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/swag/admin.php', __FILE__));
    }

    public static function ca_tip_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/tips/admin.php', __FILE__));
    }

    public static function ca_content_slide_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/content_slides/admin.php', __FILE__));
    }

    public static function ca_summary_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/summaries/admin.php', __FILE__));
    }

    public static function ca_sports_rank_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/sports_rank/admin.php', __FILE__));
    }

    public static function ca_sports_stats_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/sports_stats/admin.php', __FILE__));
    }

    public static function ca_location_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/locations/admin.php', __FILE__));
    }

    public static function ca_business_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/community/businesses/admin.php', __FILE__));
    }

    public static function ca_settings_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/settings/admin.php', __FILE__));
    }

    public static function ca_help_admin_page() {
        self::ca_check_permissions();
        include_once(plugins_url('/help/admin.php', __FILE__));
    }

}