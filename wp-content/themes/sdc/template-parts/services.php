<?php /* Template Name: Services */ ?>
<?php get_header(); ?>
    <!--Page Content start-->
    <div class="service_page_content">
        <div class="service_page_container">
            <div class="service_page_left_side">
                <h2 class="services_page_section_titles">
                    <?php the_field('big-data-analytics-title'); ?>
                </h2>
                <div class="service_page_item service-datapipelines">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('data-pipelines-image'); ?> ">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/reddotes.svg">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('data-pipelines-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('data-pipelines-description'); ?>
                        </p>
                    </div>
                </div>
                <h2 class="services_page_section_titles">
                    <?php the_field('data-visualization-title'); ?>
                </h2>
                <div class="service_page_item service-web-application-development">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('web-application-development-image') ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/reddotes.svg">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('web-application-development-title') ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('web-application-development-description') ?>
                        </p>
                    </div>
                </div>
                <h2 class="services_page_section_titles">
                    <?php the_field('machine-learning-title'); ?>
                </h2>
                <div class="service_page_item  service-data-warehousing">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('data-warehousing-image'); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/reddotes.svg">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('data-warehousing-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('data-warehousing-description'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="service_page_right_side">
                <div class="service_page_item service-big-data-analytics">
                    <div class="service_page_item_image_container">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/reddotes.svg">
                        <img src="<?php the_field('big-data-analytics-image'); ?>">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('big-data-analytics-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('big-data-analytics-description'); ?>
                        </p>
                    </div>
                </div>
                <h2 class="services_page_section_titles">
                    <?php the_field('data-pipelines-title'); ?>
                </h2>
                <div class="service_page_item service-data-visualization">
                    <div class="service_page_item_image_container">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/reddotes.svg">
                        <img src="<?php the_field('data-visualization-image'); ?>">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('data-visualization-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('data-visualization-description'); ?>
                        </p>
                    </div>
                </div>
                <h2 class="services_page_section_titles">
                    <?php the_field('web-application-development-title'); ?>
                </h2>
                <div class="service_page_item service-machine-learning">
                    <div class="service_page_item_image_container">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/reddotes.svg">
                        <img src="<?php the_field('machine-learning-image'); ?>">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('machine-learning-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('machine-learning-description'); ?>
                        </p>
                    </div>
                </div>
                <h2 class="services_page_section_titles">
                    <?php the_field('data-warehousing-title'); ?>
                </h2>
            </div>

            <div class="services-mobile">
                <div class="service_page_item service-big-data-analytics">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('big-data-analytics-image'); ?>">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('big-data-analytics-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('big-data-analytics-description'); ?>
                        </p>
                    </div>
                </div>

                <div class="service_page_item service-datapipelines">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('data-pipelines-image'); ?> ">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('data-pipelines-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('data-pipelines-description'); ?>
                        </p>
                    </div>
                </div>

                <div class="service_page_item service-data-visualization">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('data-visualization-image'); ?>">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('data-visualization-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('data-visualization-description'); ?>
                        </p>
                    </div>
                </div>

                <div class="service_page_item service-web-application-development">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('web-application-development-image') ?>">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('web-application-development-title') ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('web-application-development-description') ?>
                        </p>
                    </div>
                </div>

                <div class="service_page_item service-machine-learning">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('machine-learning-image'); ?>">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('machine-learning-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('machine-learning-description'); ?>
                        </p>
                    </div>
                </div>

                <div class="service_page_item service-data-warehousing">
                    <div class="service_page_item_image_container">
                        <img src="<?php the_field('data-warehousing-image'); ?>">
                    </div>
                    <div class="service_page_item_des_container">
                        <div class="service_page_item_des_title">
                            <?php the_field('data-warehousing-title'); ?>
                        </div>
                        <p class="service_page_item_des_text">
                            <?php the_field('data-warehousing-description'); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>