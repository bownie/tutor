
<div class="wrap">
    <h1 class="wp-heading-inline"><?php _e('Add new instructor', 'tutor'); ?></h1>
    <hr class="wp-header-end">

    <form action="" id="new-instructor-form" method="post">



        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label">
                <label for="">
					<?php _e('First Name', 'tutor'); ?>
                </label>
            </div>
            <div class="tutor-option-field">
                <input type="text" name="first_name" value="<?php echo tutor_utils()->input_old('first_name'); ?>" placeholder="<?php _e('First Name', 'tutor'); ?>">
            </div>
        </div>


        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label">
                <label>
					<?php _e('Last Name', 'tutor'); ?>
                </label>
            </div>

            <div class="tutor-option-field">
                <input type="text" name="last_name" value="<?php echo tutor_utils()->input_old('last_name'); ?>" placeholder="<?php _e('Last Name', 'tutor'); ?>">
            </div>
        </div>

        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label">
                <label>
					<?php _e('User Name', 'tutor'); ?>
                </label>
            </div>

            <div class="tutor-option-field">
                <input type="text" name="user_login" class="tutor_user_name" value="<?php echo tutor_utils()->input_old('user_login'); ?>" placeholder="<?php _e('User Name', 'tutor'); ?>">
            </div>
        </div>

        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label">
                <label>
					<?php _e('E-Mail', 'tutor'); ?>
                </label>
            </div>

            <div class="tutor-option-field">
                <input type="text" name="email" value="<?php echo tutor_utils()->input_old('email'); ?>" placeholder="<?php _e('E-Mail', 'tutor'); ?>">
            </div>
        </div>

        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label">
                <label>
					<?php _e('Phone Number', 'tutor'); ?>
                </label>
            </div>

            <div class="tutor-option-field">
                <input type="text" name="phone_number" value="<?php echo tutor_utils()->input_old('phone_number'); ?>" placeholder="<?php _e('Phone Number', 'tutor'); ?>">
            </div>
        </div>

        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label">
                <label>
					<?php _e('Password', 'tutor'); ?>
                </label>
            </div>

            <div class="tutor-option-field">
                <input type="password" name="password" value="<?php echo tutor_utils()->input_old('password'); ?>" placeholder="<?php _e('Password', 'tutor'); ?>">
            </div>
        </div>

        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label">
                <label>
					<?php _e('Password confirmation', 'tutor'); ?>
                </label>
            </div>

            <div class="tutor-option-field">
                <input type="password" name="password_confirmation" value="<?php echo tutor_utils()->input_old('password_confirmation'); ?>" placeholder="<?php _e('Password Confirmation', 'tutor'); ?>">
            </div>
        </div>

        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label">
                <label>
					<?php _e('Bio', 'tutor'); ?>
                </label>
            </div>
            <div class="tutor-option-field">

                <textarea name="tutor_profile_bio"><?php echo tutor_utils()->input_old('tutor_profile_bio'); ?></textarea>
            </div>
        </div>

        <div class="tutor-option-field-row">
            <div class="tutor-option-field-label"></div>

            <div class="tutor-option-field">
                <div class="tutor-form-group tutor-reg-form-btn-wrap">
                    <button type="submit" name="tutor_register_instructor_btn" value="register" class="tutor-button tutor-button-primary">
                        <i class="tutor-icon-plus-square-button"></i>
                        <?php _e('Add new instructor', 'tutor'); ?></button>
                </div>
            </div>
        </div>

    </form>
</div>