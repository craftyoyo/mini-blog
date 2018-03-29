<?php $this->load->view('header') ?>
<h1 class="my-5">Settings</h1>


<div class="row">
    <div class="col-xl-4">

        <?php if(!empty($error)): ?>
            <?php echo bootstrap_alert($error) ?>
        <?php endif ?>
        <?php if(!empty($success)): ?>
            <?php echo bootstrap_alert($success, 'success') ?>
        <?php endif ?>

        <?php echo form_open("settings"); ?>
            <div class="form-group">
                <div class="form-group">
                    <?php echo bootstrap_input('open', null, null, $settings->open); ?>
                </div>
            </div>
        <button type="submit" class="btn btn-primary">Save</button>

        <?php echo form_close(); ?>
    </div>
</div>

<?php $this->load->view('footer') ?>
