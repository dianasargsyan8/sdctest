<?php get_header('home'); ?>

    <!--Career Section Start-->
    <div class="sdc_container-start">
        <div class="sdc_container">
            <div class="career_titles_container sdc-title">
                <?php the_field('homepage-our-careers-title'); ?>
            </div>
            <div class="sdc_des">
                <p>
                    <?php the_field('homepage-our-careers-excerpt'); ?>
                </p>
            </div>
            <div class="career_list_container">
                <?php
                $careers = get_posts( array(
                    'numberposts'      => 4,
                    'post_type'        => 'careers',
                ) );

                if ( $careers ) {
                    foreach ( $careers as $post ) :
                        setup_postdata( $post ); ?>

                        <div class="career_list_item">
                            <div class="career_list_item_container">
                                <div class="career_item_des_container">
                                    <div class="career_item_title"><?php the_title(); ?></div>
                                    <div class="career_item_position"><?php the_field('level') ?></div>
                                    <div class="career_list_start_end_container">
                                        <div class="career_list_start">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/date.svg">
                                            <p><?php the_field('deadline-start'); ?></p>
                                        </div>
                                        <div class="career_list_end">
                                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.svg">
                                            <p><?php echo __('Deadline: '); ?><?php the_field('deadline-end'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="career_item_skills_container">
                                    <?php if( have_rows('skills') ): ?>
                                        <?php while ( have_rows('skills') ) : the_row(); ?>
                                            <div class="skill_item countable_skill_item">
                                                <?php echo get_sub_field('skill') ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif;?>
                                    <div class="skill_item skill_items_dots">
                                        ...
                                    </div>
                                </div>
                                <div class="career_details_container">
                                    <a href="#" class="open-page-and-scroll" data-service="<?php the_field('job-id'); ?>" data-serviceparent="page-template-careers">View Details</a>
                                </div>
                            </div>
                        </div>

                        <?php
                    endforeach;
                    wp_reset_postdata();
                }
                ?>
                <p class="all-jobs"><a href="<?php the_field('careers-page', 'options') ?>"><?php echo __('See all jobs'); ?></a></p>
            </div>
        </div>
    </div>
    <!--Career Section End-->

    <!--About us Start-->
    <div class="about_us">
        <div class="about_us_content">
            <div class="about_us_container">
                <div class="about_us_title_container sdc-title">
                    <?php the_field('homepage-about-us-title'); ?>
                </div>
                <div class="about_us_text">
                    <?php the_field('homepage-about-us-description'); ?>
                </div>
            </div>
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/graydots.svg" class="about_dots hide_on_mobile">
        </div>
        <div class="gif-image">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/aboutus.svg" alt="">
        </div>
    </div>
    <!--About us End-->

    <!--Services start-->
    <div class="sdc_container-start sdc-services-container">
        <div class="sdc_container">
            <div class="service_titles_container sdc-title">
                <?php the_field('homepage-our-services-title'); ?>
            </div>
            <div class="services_list_container">
                <?php if( have_rows('homepage-our-services') ): ?>
                    <?php while ( have_rows('homepage-our-services') ) : the_row(); ?>
                        <div class="services_items ">
                            <div class="services_item_container">
                                <img src="<?php echo get_sub_field('homepahe-our-service-image'); ?>">
                                <div class="service_item_texts">
                                    <p class="service_item_title">
                                        <?php echo get_sub_field('homepahe-our-service-title'); ?>
                                    </p>
                                    <a href="#" class="service_view_details open-page-and-scroll" data-service="<?php echo get_sub_field('service-id'); ?>" data-serviceparent='page-template-services'>
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif;?>
            </div>
            <div class="services_read_more_button_container">
                <a href="<?php the_field('services-page-url', 'options'); ?>" class="services_read_more_button">
                    <p><?php echo __('Read more', 'sdc'); ?></p>
                    <span class="red_cover"></span>
                </a>
            </div>
        </div>
    </div>
<?php get_footer(); ?>