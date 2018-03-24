<?php $this->load->view('header') ?>
<h1 class="my-5">Sign Up</h1>

<div class="row">
    <div class="col-xl-4">

        <?php if(!empty($error)): ?>
            <?php echo bootstrap_alert($error) ?>
        <?php endif ?>

        <?php echo form_open("auth/signup"); ?>
            <div class="form-group">
                <?php echo bootstrap_input('username'); ?>
            </div>
            <div class="form-group">
                <?php echo bootstrap_input('email'); ?>
            </div>
            <div class="form-group">
                <?php echo bootstrap_input('first_name'); ?>
            </div>
            <div class="form-group">
                <?php echo bootstrap_input('last_name'); ?>
            </div>
            <div class="form-group">
                <?php echo bootstrap_input('password', null, 'password'); ?>
            </div>
            <div class="form-group">
                <?php echo bootstrap_input('password_confirm', 'Confirm Password', 'password'); ?>
            </div>
            <button type="submit" class="btn btn-primary">Sign up</button>
            <a href="<?php echo base_url('auth/forgot_password') ?>" class="btn btn-link">Forgot Password</a>
        <?php echo form_close(); ?>
    </div>
</div>

<?php $this->load->view('footer') ?>
