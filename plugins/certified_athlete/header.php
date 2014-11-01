<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php wp_title(' | ', true, 'right'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <?php wp_head(); //included to add hooks into the header?>
    </head>
    <!-- End Head -->
    <!-- End Head -->
    <!-- End Head -->
    <body <?php body_class(); ?>>
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-20390145-1']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
        <div id="header">
            <div class="main_menu_wrapper">
                <div class="main_menu">
                    <div class="column four">
                    </div>
                    <div class="column six">
                        <ul>                            
                            <li>
                                <a href="<?php echo get_site_url(); ?>/">Certified Athlete</a>
                            </li>

                            <?php if (is_user_logged_in()) { ?>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/athletes/">Athletes</a> 
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/athlete/">My Profile</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/contact/">Contact</a>
                                </li>

                                <li>
                                    <a href="<?php echo get_site_url(); ?>/login/">Login</a>
                                </li>
                                <li>
                                    <a href="<?php echo get_site_url(); ?>/Register/">Register</a>
                                </li>
                                <?php //} else { ?>
                                <li>
                                    <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Logout">Log Out</a>
                                </li> 

                                <li>
                                    <a href="<?php echo get_site_url(); ?>/Admin/">Admin</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <ul>
                            <li>
                                <?php get_search_form(); ?>  
                            </li>
                        </ul>
                    </div>
                </div><!-- End row -->
            </div><!-- End Main Menu -->
            <div class="float_menu">
            </div><!-- End Float Menu -->
        </div><!-- End Header -->