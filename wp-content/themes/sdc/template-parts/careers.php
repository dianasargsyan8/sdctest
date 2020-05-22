<?php /* Template Name: Careers */ ?>
<?php get_header(); ?>
<!--Page Content start-->
<div class="career_page_content sdc_container-start">
    <div class="career_page_items_list sdc_container accordion accordionExample">

        <?php
        $careers = get_posts( array(
            'numberposts'      => -1,
            'post_type'        => 'careers',
        ) );

        $num = 1;

        if ( $careers ) {
            foreach ( $careers as $post ) :
                setup_postdata( $post );
                $num = $num + 1; ?>

                <div class="career_page_item <?php the_field('job-id'); ?>">
                    <div class="career_item_info_side">
                        <div class="career_item_title">
                            <?php the_title(); ?>
                            <div class="career_item_position_title"><?php the_field('level') ?></div>
                        </div>
                        <div class="career_item_date_container">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/date.svg">
                            <p><?php the_field('deadline-start'); ?></p>
                        </div>
                        <div class="career_item_time_container">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/time.svg">
                            <p><?php echo __('Deadline: '); ?><?php the_field('deadline-end'); ?></p>
                        </div>
                        <div class="career_item_clock_container">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/clock.svg">
                            <p>
                                Full Time
                            </p>
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
                    <div class="collapseable-element">
                        <div class="card">
                            <div id="collapse<?php echo $num; ?>" class="collapse" aria-labelledby="heading<?php echo $num; ?>" data-parent=".accordionExample">
                                <div class="card-body">
                                    <div class="career_item_des_opened_container">
                                        <p class="job-description"><?php the_field('job-description'); ?></p>
                                        <div class="career_item_des_opened_item">
                                            <?php if( have_rows('responsibilities') ): ?>
                                                <div class="career_item_des_opened_title">
                                                    Responsibilities
                                                </div>
                                                <ul class="career_item_des_opened_list">
                                                    <?php while ( have_rows('responsibilities') ) : the_row(); ?>
                                                        <li><?php echo get_sub_field('responsibility') ?></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif;?>
                                        </div>
                                        <div class="career_item_des_opened_item">
                                        <?php if( have_rows('requirements') ): ?>
                                            <div class="career_item_des_opened_title">
                                                Requirements
                                            </div>
                                            <ul class="career_item_des_opened_list">
                                                <?php while ( have_rows('requirements') ) : the_row(); ?>
                                                    <li><?php echo get_sub_field('requirement') ?></li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif;?>
                                        </div>
                                        <div class="career_item_des_opened_item">
                                            <?php if( have_rows('skills-and-experience') ): ?>
                                                <div class="career_item_des_opened_title">
                                                    Nice to have Skills and Experience
                                                </div>
                                                <ul class="career_item_des_opened_list">
                                                    <?php while ( have_rows('skills-and-experience') ) : the_row(); ?>
                                                        <li><?php echo get_sub_field('skill-or-experience') ?></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif;?>
                                        </div>
                                        <div class="career_opened_item_button_container">
                                            <a href="mailto:<?php the_field('hr-email', 'options') ?>" class="career_opened_item_button">
                                                APPLY FOR THIS JOB
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header hide-open-collapse" id="heading<?php echo $num; ?>">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $num; ?>" aria-expanded="true" aria-controls="collapse<?php echo $num; ?>">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/bottomarrow.svg">
                            </button>
                        </h2>
                    </div>
                </div>

                <?php
            endforeach;
            wp_reset_postdata();
        }
        ?>
    </div>
</div>
<a href="" class="open-page-and-scroll1"></a>
<!--Page Content end-->
<?php get_footer(); ?>
