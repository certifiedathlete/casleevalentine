<?php get_header(); ?>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <br>
    <div class="container">
        <div class="navbar-header page-scroll">            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">
                <i class="fa fa-play-circle"></i>
            </a>
            <a class="navbar-brand" href=" <?php echo home_url(); ?> ">
                <span class="light">CASLEE</span> VALENTINE
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#read">Read</a>
                </li>
                <li class="page-scroll">
                    <a href="#share">Share</a>
                </li>
                <li class="page-scroll">
                    <a href="#comment">Comment</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<br>
<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="intro">           

            <div class="intro-body">                
                <div class="container">       
                    <div class="row">                        

                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="brand-heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

                            <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
                            <p><small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small></p>
                            <p class="intro-text page-scroll">
                                <a href="#read">Read</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#share">Share</a>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#comment">Comment</a></p>
                            <div class="page-scroll">
                                <a href="#read" class="btn btn-circle">
                                    <i class="fa fa-angle-double-down animated"></i>
                                </a>
                            </div>
                            <br><br> 
                            <div>
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
                </div>
            </div>
        </section>





        <section id="read" class="container content-section text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <div class="page-scroll">
                        <a href="#share" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="share" class="content-section text-center">
            <div class="download-section">
                <div class="container">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h2>Share this Post</h2>
                        <p>On your favorite Social Network</p>
                        <ul class="list-inline banner-social-buttons">
                            <li><a href="https://twitter.com/certifiedathlet" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li><a href="https://github.com/certifiedathlete" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li><a href="https://plus.google.com/u/0/110245853216535918043/" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                            </li>
                        </ul>
                        <div class="page-scroll">
                            <a href="#comment" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="ad-content text-center container content-section">
            <div class="ad-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
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
            </div>
        </section>


        <section id="comment" class="container content-section">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <?php comments_template(); ?>

                    <div class="page-scroll">
                        <a href="#page-top" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <div id="map"></div>

        <?php
    endwhile;
else:
    ?>
    <!-- The very first "if" tested to see if there were any Posts to -->
    <!-- display.  This "else" part tells what do if there weren't any. -->
    <p>Sorry, no posts matched your criteria.</p>
    <!-- REALLY stop The Loop. -->
<?php endif; ?>
<?php
get_footer();
