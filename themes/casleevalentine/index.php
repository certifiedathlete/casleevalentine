<?php get_header(); ?>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <br>
    <div class="container">
        <div class="navbar-header page-scroll">                
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">
                <i class="fa fa-play-circle"></i>  <span class="light">CASLEE</span> VALENTINE
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
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<section class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">CAS VALENTINE</h1>
                    <p class="intro-text">
                        <a href="http://casleevalentine.com/consultant/">Consultant</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="http://casleevalentine.com/artist/">Artist</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="http://casleevalentine.com/athlete/">Athlete</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="http://casleevalentine.com/music/">Musician</a></p>
                    <div class="page-scroll">
                        <a href="#about" class="btn btn-circle">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>About Me</h2>
            <p>My name is Caslee Tyshawn Valentine, but feel free to call me Cas.</p>
            <p>I am passionate about entrepreneurship. My dream is to start my own company.</p>
            <p>In my journey, I will utilize all of my God-given talents to accomplish my goals.</p>
            <p>The result will be something awesome, so I hope you join me for the journey.</p>
        </div>
    </div>
</section>
<section id="portfolio" class="content-section text-center">
    <div class="portfolio-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Portfolio</h2>
                <div class="row">
                    <?php //loop starts here limit 9 ?>
                    <!-- Start the Loop. -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <div class="post">

                                <!-- Display the Post's Featured Image in a div box. -->
                                <div class="entry col-sm-4 portfolio-item">                                       
                                    <?php
                                    if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                                        ?>
                                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div> <!-- closes the first div box -->


                            <!-- Stop The Loop (but note the "else:" - see next line). -->

                            <?php
                        endwhile;
                    else :
                        ?>
                        <!-- The very first "if" tested to see if there were any Posts to -->
                        <!-- display.  This "else" part tells what do if there weren't any. -->
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <!-- REALLY stop The Loop. -->
                    <?php endif; ?>
                    <?php //loop ends here    ?>
                </div>


            </div>
        </div>
    </div>
</section>
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact Cas</h2>
            <p>Feel free to email me to provide some feedback about the website or to just say hello!</p>
            <p>casuall.valentino@gmail.com</p>
            <ul class="list-inline banner-social-buttons">
                <li><a href="https://www.facebook.com/profile.php?id=22218083" class="btn btn-default btn-lg"><i class="fa fa-fw fa-facebook"></i> <span class="network-name">Facebook</span></a>
                </li>
                <li><a href="https://twitter.com/certifiedathlet" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                </li>
                <li><a href="https://github.com/certifiedathlete" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                </li>
                <li><a href="https://plus.google.com/u/0/110245853216535918043/" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<div id="map"></div>
<?php
get_footer();
