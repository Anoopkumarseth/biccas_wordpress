<?php

function get_team_collabs( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'team_collabs',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="collab_wrapper">
            <?php
                while ( $query->have_posts() ) : $query->the_post();
                $imgurl = get_the_post_thumbnail_url( get_the_ID(), 'full' );                
            ?>
                <div class="item">
                    <img src="<?php echo $imgurl; ?>" alt="<?php the_title(); ?>" />
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?> 
        </div>
    <?php $html_data = ob_get_clean();
    return $html_data;
    }
}
add_shortcode( 'team_collabs', 'get_team_collabs' );

// short code for rating
function get_support_ratings( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'support_ratings',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );
    if ( $query->have_posts() ) { ?>
        <div class="rating_wrapper">
            <?php
                while ( $query->have_posts() ) : $query->the_post();  
                $star_rating = get_field('star_rating');             
                $points_rating = get_field('points_rating');             
            ?>
                <div class="item">                    
                        <?php
                            if($star_rating){
                                ?>
                                <ul class="star_rating_list">
                                    <?php
                                        for($i=1; $i<=5; $i++){
                                            if($i <= $star_rating){
                                                ?>
                                                <li class="active"></li>
                                                <?php
                                            }else{
                                                ?>
                                                <li></li>
                                                <?php
                                            }
                                        }
                                    ?>
                                </ul>    
                                <?php
                            }                            
                        ?>                    
                    <p class="textual-ratings"><strong><?php echo $points_rating ?></strong> / 5 rating</p>
                    <p><strong><?php the_title(); ?></strong></p>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?> 
        </div>
    <?php $html_data = ob_get_clean();
    return $html_data;
    }
}
add_shortcode( 'support_ratings', 'get_support_ratings' );


// short code for Testimonials
function get_testimonials( $atts ) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'testimonials',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'orderby' => 'title',
    ) );
    if ( $query->have_posts() ) { ?>
    <div class="swiper testimonials_item testimonials_wrapper_outer">
        <div class="testimonials_wrapper swiper-wrapper">
            <?php
                while ( $query->have_posts() ) : $query->the_post();                
            ?>
                <div class="item swiper-slide"> 
                    <div class="testimonial_text"><?php the_content(); ?></div>
                    <p class="person_name">_ <?php the_title(); ?></p>
                </div>
            <?php endwhile; ?>

        </div>        
    </div>

    <div class="swiper testimonials_swiper">
        <div class="testimonials_wrapper--thumbs swiper-wrapper">
            <?php
                while ( $query->have_posts() ) : $query->the_post();                
            ?>
                <div class="item swiper-slide"> 
                    <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>" alt="<?php the_title(); ?>" />
                </div>
            <?php endwhile; ?>

        </div>        
    </div>
    
    <?php 
    wp_reset_postdata();
    $html_data = ob_get_clean();
    return $html_data;
    }
}
add_shortcode( 'testimonials', 'get_testimonials' );


// short code for pricing_table
function get_pricing( $atts ) {
    ob_start();
    ?>

    <div class="tabs tabs-auto">
        <ul class="tab-nav">
            <li><a href="#" class="tab-link active">Bil Monthly</a></li>
            <li><a href="#" class="tab-link">Bil Yearly</a></li>
        </ul>
        <div class="content">
            <div class="tab-content active">
                <?php
                    $query = new WP_Query( array(
                        'post_type' => 'pricing',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'orderby' => 'title',
                        'cat' => '9',
                        
                    ) );
                    if ( $query->have_posts() ) { 
                        
                        ?>
                    <div class="pricing">
                        <div class="pricing-wrapper">
                            <?php
                                while ( $query->have_posts() ) : $query->the_post();                
                            ?>
                                <div class="item <?php the_title();?>"> 
                                    <div class="plan_box">
                
                                        <h3 class="plan_name"><?php the_title(); ?></h3>
                                        <div class="plan_body"><?php the_content(); ?></div>
                                    </div>
                                    
                                </div>
                            <?php endwhile; ?>
                
                        </div>        
                    </div>
                        <?php 
                        wp_reset_postdata();
                    }
                ?>
            </div>
            <div class="tab-content">
            <?php
                    $query = new WP_Query( array(
                        'post_type' => 'pricing',
                        'posts_per_page' => -1,
                        'order' => 'ASC',
                        'orderby' => 'title',
                        'cat' => '10',
                    ) );
                    if ( $query->have_posts() ) { ?>
                    <div class="pricing">
                        <div class="pricing-wrapper">
                            <?php
                                while ( $query->have_posts() ) : $query->the_post();                
                            ?>
                                <div class="item <?php the_title();?>"> 
                                    <div class="plan_box">
                
                                        <h3 class="plan_name"><?php the_title(); ?></h3>
                                        <div class="plan_body"><?php the_content(); ?></div>
                                    </div>
                                    
                                </div>
                            <?php endwhile; ?>
                
                        </div>        
                    </div>
                        <?php 
                        wp_reset_postdata();
                    }
                ?>
            </div>
        </div>
    </div>
    
    <?php
    $html_data = ob_get_clean();
    return $html_data;
}
add_shortcode( 'pricing_table', 'get_pricing' );
