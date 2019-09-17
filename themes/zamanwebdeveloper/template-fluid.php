<?php 
/*
    Template Name: Full Width
*/
get_header(); 
?>
    <!-- Header area end -->
    <!-- Banner Section -->
    <section id="banner-wrap" class="banner-section">
        <div class="banner-section-overlay">
            <div class="banner-section-text">
                <div class="banner-text-inner">
                    <h2> About Us</h2>
                    <div class="bradcome">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-long-arrow-right"></i></li>
                            <li><a href="contact-1.html">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Banner Section -->

    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title(); ?> This is template-fluid</h2>
                        <?php the_content(); ?>                       
                    </div><p><?php the_tags(); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- news table  -->
    <?php endwhile; ?>
    <?php endif; ?>

    <?php get_footer(); ?>