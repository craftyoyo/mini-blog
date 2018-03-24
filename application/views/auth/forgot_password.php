<?php $this->load->view('header') ?>
<h1 class="my-5">Forgot Password</h1>
<p>Please enter your username so we can send you an email to reset your password.</p>

<div id="infoMessage"><?php echo $message; ?></div>

<div class="row">
    <div class="col-md-3">
        <?php echo form_open("auth/forgot_password"); ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <button type="submit" class="btn btn-primary">Send Reset Link</button>
        <a href="<?php echo base_url('auth/login') ?>" class="btn btn-link">Back</a>
        <?php echo form_close(); ?>
    </div>
</div>

<?php $this->load->view('footer') ?>
