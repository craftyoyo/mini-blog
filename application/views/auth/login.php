<?php $this->load->view('header') ?>
<h1 class="my-5">Log In</h1>


<div class="row">
    <div class="col-xl-4">

        <?php if ($this->session->flashdata('error')): ?>
            <?php echo bootstrap_alert($this->session->flashdata('error')) ?>
        <?php endif ?>
        <?php if(!empty($error)): ?>
            <?php echo bootstrap_alert($error) ?>
        <?php endif ?>
        <?php if(!empty($success)): ?>
            <?php echo bootstrap_alert($success, 'success') ?>
        <?php endif ?>

        <?php echo form_open("auth/login"); ?>
            <div class="form-group">
                <div class="form-group">
                    <?php echo bootstrap_input('username'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <a href="<?php echo base_url('auth/forgot_password') ?>" class="float-right small">Forgot Password</a>
                    <?php echo bootstrap_input('password', null, 'password'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                        Remember me
                    </label>
                </div>
            </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="<?php echo base_url('auth/signup') ?>" class="btn btn-link">Sign Up</a>

        <?php echo form_close(); ?>
    </div>
</div>

<?php $this->load->view('footer') ?>
