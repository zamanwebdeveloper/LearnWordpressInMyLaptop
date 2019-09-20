<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar-wrap">
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Search</h4>
                            <div class="search-form">
                                <form action="<?php echo home_url('/'); ?>" method="get">
                                    <input class="search-field" placeholder="Search" value="" type="search" name="s">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Category</h4>
                            <ul>
                                <?php
                                    $args = array(
                                        'orderby' => 'slug',
                                        'parent' => 0
                                    );

                                    $categories = get_categories( $args );
                                    foreach ( $categories as $category ) {
                                        echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"> <i class="glyphicon glyphicon-play"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
                                     }
                                ?>
                            </ul>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">ARCHIVES</h4>
                            <ul>
                                <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12,'order' => 'DESC' )); ?>
                            </ul>
                        </div>


                        <?php dynamic_sidebar('widget-home-one'); ?>


						<!-- Technology Category Sart -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Technology Category</h4>
                            <?php
                            $techno = new Wp_Query(array(
                            	'post_type' => 'post',
                            	'posts_per_page' => 4,
                            	'orderby' => 'title',
                            	'order' => 'DESC',
                            	'category_name' => 'Technology' 
                            )); 

                            if(have_posts()) : while($techno->have_posts()) : $techno->the_post(); ?>

                            <div class="widget-news">
                                <a href="#"><?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?></a>
                                <div class="news-text">
                                    <p><?php the_title(); ?></p>
                                    <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>                            
                        </div>
                        <!-- Technology Category End -->

                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Random Post</h4>
                            <?php
                            $techno = new Wp_Query(array(
                            	'post_type' => 'post',
                            	'posts_per_page' => 4,
                            	'orderby' => 'rand',
                            	'order' => 'DESC',
                            	// 'category_name' => 'Technology' 
                            )); 

                            if(have_posts()) : while($techno->have_posts()) : $techno->the_post(); ?>

                            <div class="widget-news">
                                <a href="#"><?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?></a>
                                <div class="news-text">
                                    <p><?php the_title(); ?></p>
                                    <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>                            
                        </div>
                        <!-- Development Category -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Development Category</h4>
                            <?php
                            $techno = new Wp_Query(array(
                            	'post_type' => 'post',
                            	'posts_per_page' => 4,
                            	'orderby' => 'title',
                            	'order' => 'DESC',
                            	'category_name' => 'Development' 
                            )); 

                            if(have_posts()) : while($techno->have_posts()) : $techno->the_post(); ?>

                            <div class="widget-news">
                                <a href="#"><?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?></a>
                                <div class="news-text">
                                    <p><?php the_title(); ?></p>
                                    <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Tags</h4>
                            <ul class="tag-list">
                                <li><a class="active transition7s" href="#">HTML</a></li>
                                <li><a class="transition7s" href="#">CSS3</a></li>
                                <li><a class="transition7s" href="#">PHP</a></li>
                                <li><a class="transition7s" href="#">Wordpress</a></li>
                                <li><a class="transition7s" href="#">Joomla</a></li>
                            </ul>
                        </div>
                    </div>
                </div>