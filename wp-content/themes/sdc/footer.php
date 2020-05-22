<!--Footer start-->
<footer class="sdc_container-start site-footer">
    <div class="footer_items sdc_container">
        <div class="footer_about_container">
            <a href="<?php echo get_site_url(); ?>" class="home-page-url">
                <img src="<?php the_field('footer-logo', 'options') ?>" alt="sdc-logo" />
            </a>
            <div class="footer_about_text">
                <?php the_field('footer-text', 'options'); ?>
            </div>
        </div>
        <div class="footer_services_container sdc-order-2">
            <div class="footer_services_title services-page-url">
                <a href="<?php the_field('services-page-url', 'options'); ?>"><?php echo __('Services', 'sdc') ?></a>
            </div>
            <div class="footer_service_list"><a href="#" class="open-page-and-scroll" data-service="service-big-data-analytics" data-serviceparent='page-template-services'>Big Data analytics</a></div>
            <div class="footer_service_list"><a href="#" class="open-page-and-scroll" data-service="service-datapipelines" data-serviceparent='page-template-services'>Data pipelines</a></div>
            <div class="footer_service_list"><a href="#" class="open-page-and-scroll" data-service="service-data-visualization" data-serviceparent='page-template-services'>Data visualization</a></div>
            <div class="footer_service_list"><a href="#" class="open-page-and-scroll" data-service="service-web-application-development" data-serviceparent='page-template-services'>Web Application Development</a></div>
            <div class="footer_service_list"><a href="#" class="open-page-and-scroll" data-service="service-machine-learning" data-serviceparent='page-template-services'>Machine Learning</a></div>
            <div class="footer_service_list"><a href="#" class="open-page-and-scroll" data-service="service-data-warehousing" data-serviceparent='page-template-services'>Data Warehousing</a></div>
        </div>
        <div class="footer_contacts_container sdc-order-1">
            <div class="footer_contacts_title contact-us-url">
                <a href="<?php the_field('contact-us-page-url', 'options'); ?>"><?php echo __('Contacts', 'sdc') ?></a>
            </div>
            <div class="footer_contacts_list">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/map.svg" alt="">
                <p>
                    <?php the_field('address', 'options') ?>
                </p>
            </div>
            <div class="footer_contacts_list">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/phone.svg" alt="">
                <p>
                    <a href="<?php echo 'tel:' . get_field('phone', 'options'); ?>"><?php the_field('phone', 'options') ?></a>
                </p>
            </div>
            <div class="footer_contacts_list">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/mail.svg" alt="">
                <p>
                    <a href="<?php echo 'mailto:' . get_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a>
                </p>
            </div>
            <div class="footer_contacts_list">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/globe.svg" alt="">
                <p>
                    <?php the_field('website', 'options'); ?>
                </p>
            </div>
        </div>
    </div>
</footer>
<div class="sdc-copyright"><?php echo '© ' . date("Y") . ' The Software Development Company LLC.<br> All rights reserved.' ?></div>
<!--Footer end-->
<?php wp_footer(); ?>
</body>
</html>
