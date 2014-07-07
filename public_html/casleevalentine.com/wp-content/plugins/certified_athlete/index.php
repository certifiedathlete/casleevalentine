<?php get_header(); ?>


<div id="main_content">

    <div class="row">

        <div class="column nine box_heading_margin">

            <?php
            global $wp_query;
            $total_pages = $wp_query->max_num_pages;
            if ($total_pages > 1) {
                ?>

                <div class="row">

                    <div class="column two">
                        &nbsp;
                    </div><!-- closes column two -->
                    <div class="column ten">
                        <div class="ad_728x90_ad">
                            <div class="ad_wrapper_ad">
                                <script type="text/javascript"><!--
                                    google_ad_client = "ca-pub-3414144158335674";
                                    /* banner_ad */
                                    google_ad_slot = "1381209248";
                                    google_ad_width = 728;
                                    google_ad_height = 90;
                                    //-->
                                </script>
                                <script type="text/javascript"
                                        src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="column two">
                        &nbsp;
                    </div><!-- closes column two -->
                    <div class="column ten">

                        <p class="nav-previous">
                            <?php next_posts_link(__('<div id="nav-above" class="navigation button gold"><span class="meta-nav">&laquo;</span> older articles</div>', 'blankslate')) ?>
                        </p>
                        <p class="nav-next">
                            <?php previous_posts_link(__('<div id="nav-above" class="navigation button gold">newer articles <span class="meta-nav">&raquo;</span></div>', 'blankslate')) ?>
                        </p>

                    </div>
                </div>
            <?php } ?>
            <!-- Start the Loop. -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="post_container row box_heading_margin">  
                        <div class="column two">
                            <div class="post_meta_box_border">
                                <div class="post_meta_box"> 
                                    <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                                    <br/><small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small><br/><br/>
                                    <!-- Display a comma separated list of the Post's Categories. -->
                                    <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                                </div> <!-- closes the post_meta_box_border -->
                            </div> <!-- closes the post_meta_box -->
                        </div><!-- closes column two -->
                        <div class="column ten">
                            <div class="post_border">
                                <div class="post">  
                                    <!-- Display the Title as a link to the Post's permalink. -->

                                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                                    <!-- Display the Post's content in a div box. -->
                                    <br /><br />
                                    <div class="entry">
                                        <?php the_content(); ?>
                                    </div>
                                </div> <!-- closes the post box -->
                            </div> <!-- closes the post_border -->
                            <!-- Stop The Loop (but note the "else:" - see next line). -->
                            <br class="clear_both"/>
                        </div><!-- closes column ten -->
                    </div><!-- closes the post_container -->
                    <?php
                endwhile;
            else:
                ?>
                <!-- The very first "if" tested to see if there were any Posts to -->
                <!-- display.  This "else" part tells what do if there weren't any. -->
                <p>Sorry, no posts matched your criteria.</p>
                <!-- REALLY stop The Loop. -->
            <?php endif; ?>
            <div class="row">
                <div class="column two">
                    &nbsp;
                </div><!-- closes column two -->
                <div class="column ten">
                    <div class="ad_728x90_ad">
                        <div class="ad_wrapper_ad">
                            <script type="text/javascript"><!--
                                google_ad_client = "ca-pub-3414144158335674";
                                /* banner_ad */
                                google_ad_slot = "1381209248";
                                google_ad_width = 728;
                                google_ad_height = 90;
                                //-->
                            </script>
                            <script type="text/javascript"
                                    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
                            </script>
                        </div>
                    </div>
                </div>
                <div class="column two">
                    &nbsp;
                </div><!-- closes column two -->
                <div class="column ten">

                    <p class="nav-previous">
                        <?php next_posts_link(__('<div id="nav-above" class="navigation button gold"><span class="meta-nav">&laquo;</span> older articles</div>', 'blankslate')) ?>
                    </p>
                    <p class="nav-next">
                        <?php previous_posts_link(__('<div id="nav-above" class="navigation button gold">newer articles <span class="meta-nav">&raquo;</span></div>', 'blankslate')) ?>
                    </p>

                </div>
            </div>

        </div><!-- End column eight -->
        <div class="column three">
            <?php get_sidebar('right'); ?>
        </div><!-- End column four -->
    </div> <!-- End master_row -->
    <br class="clear_both"/>
</div><!-- End Main Content -->



<?php get_footer(); ?>