<?php /* Template Name: Contact */ ?>
<?php get_header('contact'); ?>

    <div class="header-map-container contact-page">
        <div class="contact-content-map">
            <div class="header-part">
                <!--Header Start-->
                <header class="sdc_header">
                    <a href="<?php echo get_site_url(); ?>" class="show_on_desktop header_logo home-page-url">
                        <img src="<?php the_field('logo', 'options') ?>" alt="sdc-logo" />
                    </a>
                    <a href="<?php echo get_site_url(); ?>" class="hide_on_desktop header_logo">
                        <img src="<?php the_field('footer-logo', 'options') ?>" alt="sdc-logo" />
                    </a>
                    <div class="burger hide_on_desktop">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/burger.svg">
                    </div>
                </header>

                <nav class="mobile_nav hide_on_desktop">
                    <header class="sdc_header">
                        <a href="<?php echo get_site_url(); ?>" class="show_on_desktop header_logo home-page-url">
                            <img src="<?php the_field('logo', 'options') ?>" alt="sdc-logo" />
                        </a>
                        <a href="<?php echo get_site_url(); ?>" class="hide_on_desktop header_logo">
                            <img src="<?php the_field('footer-logo', 'options') ?>" alt="sdc-logo" />
                        </a>
                        <div class="burger hide_on_desktop">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/burger.svg">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/close.svg">
                        </div>
                    </header>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'header-main-menu',
                        'container' => '',
                        'menu_class' => 'nav_list'
                    ) );
                    ?>
                    <div class="home_header_socials">
                        <div class="socials_container">
                            <?php if( have_rows('social-media', 'options') ): ?>
                                <?php while ( have_rows('social-media', 'options') ) : the_row(); ?>
                                    <a href="<?php echo get_sub_field('social-media-url', 'options') ?>" target="_blank" class="social_icons">
                                        <img src="<?php echo get_sub_field('social-media-image-white', 'options') ?>" />
                                        <img src="<?php echo get_sub_field('social-media-image-red', 'options') ?>" class="show-on-hover" />
                                    </a>
                                <?php endwhile; ?>
                            <?php endif;?>
                        </div>
                    </div>
                </nav>
                <!--Header End-->

                <!--Home Header start-->
                <div class="home_header">
                    <div class="home_header_socials show_on_desktop">
                        <div class="socials_container">
                            <?php if( have_rows('social-media', 'options') ): ?>
                                <?php while ( have_rows('social-media', 'options') ) : the_row(); ?>
                                    <a href="<?php echo get_sub_field('social-media-url', 'options') ?>" target="_blank" class="social_icons">
                                        <img src="<?php echo get_sub_field('social-media-image', 'options') ?>" />
                                        <img src="<?php echo get_sub_field('social-media-image-red', 'options') ?>" class="show-on-hover" />
                                    </a>
                                <?php endwhile; ?>
                            <?php endif;?>
                        </div>
                        <div class="header_cube_container">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/red-cube.png' ">
                            <img src="<?php echo get_sub_field('social-media-image-white', 'options') ?>" class="show-on-hover" />
                        </div>
                    </div>

                    <div class="pages_header_container">
                        <div class="pages_header_content">
                            <div class="pages_header">
                                <div class="pages_header_title">
                                    <?php the_field('top-header-title'); ?>
                                </div>
                                <div class="page-header-desc">
                                    <?php the_field('top-header-description'); ?>
                                </div>
                            </div>

                            <div class="footer_contacts_container sdc-order-1">
                                <div class="footer_contacts_list">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/black-map.svg" alt="">
                                    <p>
                                        <?php the_field('address', 'options') ?>
                                    </p>
                                </div>
                                <div class="footer_contacts_list">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/black-phone.svg" alt="">
                                    <p>
                                        <a href="<?php echo 'tel:' . get_field('phone', 'options'); ?>"><?php the_field('phone', 'options') ?></a>
                                    </p>
                                </div>
                                <div class="footer_contacts_list">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/black-mail.svg" alt="">
                                    <p>
                                        <a href="<?php echo 'mailto:' . get_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
                                    </p>
                                </div>
                                <div class="footer_contacts_list">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/black-globe.svg" alt="">
                                    <p>
                                        <?php the_field('website', 'options'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Home Header end-->
            </div>
            <div class="map-part">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.8340131365794!2d44.53005621525047!3d40.19050727939205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abcdbd9aacded%3A0x1b5a0571677f448!2sSynergy%20International%20Systems!5e0!3m2!1sen!2s!4v1588762198091!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>

        <!--Navigatioon start-->
        <nav class="navigation show_on_desktop">
            <div class="navigation_container">
                <div class="scroll_down">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33.766" height="47.95" viewBox="0 0 33.766 47.95">
                        <g id="Group_551" data-name="Group 551" transform="translate(-1537.243 -825)">
                            <g id="Group_179" data-name="Group 179" transform="translate(1537.243 825)">
                                <g id="Group_178" data-name="Group 178">
                                    <path id="Path_11843" data-name="Path 11843" d="M92.609,0A17.036,17.036,0,0,0,75.726,17.148V30.8a16.885,16.885,0,1,0,33.766.052V17.148A17.036,17.036,0,0,0,92.609,0Zm13.707,30.855A13.709,13.709,0,1,1,78.9,30.8V17.148a13.71,13.71,0,1,1,27.415,0Z" transform="translate(-75.726)"/>
                                </g>
                            </g>
                            <g id="Group_181" data-name="Group 181" transform="translate(1552.538 838.125)">
                                <g id="Group_180" data-name="Group 180">
                                    <path id="Path_11844" data-name="Path 11844" d="M240.634,140.15a1.588,1.588,0,0,0-1.588,1.588v5.557a1.588,1.588,0,0,0,3.176,0v-5.557A1.588,1.588,0,0,0,240.634,140.15Z" transform="translate(-239.046 -140.15)"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <p>
                        <?php echo __('Scroll Down', 'sdc'); ?>
                    </p>
                </div>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'header-main-menu',
                    'container' => '',
                    'menu_class' => 'nav_list'
                ) );
                ?>
            </div>
        </nav>
        <!--Navigatioon end-->
    </div>

<?php get_footer(); ?>