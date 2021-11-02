<?php
/**
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

?>

<h3><?php esc_html_e('Active Course', 'tutor'); ?></h3>

<div class="tutor-dashboard-content-inner enrolled-courses">

    <div class="tutor-dashboard-inline-links">
        <ul>
            <li>
                <a href="<?php echo esc_url( tutor_utils()->get_tutor_dashboard_page_permalink( 'enrolled-courses' ) ); ?>"> 
                    <?php esc_html_e('All Courses', 'tutor'); ?>
                </a> 
            </li>
            <li class="active">
                <a href="<?php echo esc_url( tutor_utils()->get_tutor_dashboard_page_permalink( 'enrolled-courses/active-courses' ) ); ?>"> 
                    <?php esc_html_e('Active Courses', 'tutor'); ?> 
                </a> 
            </li>
            <li>
                <a href="<?php echo esc_url( tutor_utils()->get_tutor_dashboard_page_permalink( 'enrolled-courses/completed-courses' ) ); ?>">
					<?php esc_html_e( 'Completed Courses', 'tutor' ); ?> 
                </a> 
            </li>
        </ul>
    </div>

    <div class="tutor-course-listing tutor-course-listing-grid-3">
        <?php
            $active_courses = tutor_utils()->get_active_courses_by_user();

            if ($active_courses && $active_courses->have_posts()):
            while ($active_courses->have_posts()):
            $active_courses->the_post();
            $avg_rating = tutor_utils()->get_course_rating()->rating_avg;
            $tutor_course_img = get_tutor_course_thumbnail_src();
        ?>
            
        <?php
            /**
             * @hook tutor_course/archive/before_loop_course
             * @type action
             * Usage Idea, you may keep a loop within a wrap, such as bootstrap col
             */
            do_action( 'tutor_course/archive/before_loop_course' );

            tutor_load_template( 'loop.course' );

            /**
             * @hook tutor_course/archive/after_loop_course
             * @type action
             * Usage Idea, If you start any div before course loop, you can end it here, such as </div>
             */
            do_action( 'tutor_course/archive/after_loop_course' );
        ?>

		<?php
		    endwhile;
		        wp_reset_postdata();
            else:
                echo wp_kses_post("<div class='tutor-mycourse-wrap'><div class='tutor-mycourse-content'>".__('You are not enrolled in any course at this moment.', 'tutor')."</div></div>");
	        endif;
	    ?>
    </div>
</div>
