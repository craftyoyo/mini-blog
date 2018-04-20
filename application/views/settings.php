<?php $this->load->view('header') ?>
<div class="page-header">
    <div class="page-title">Settings</div>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <?php if (!empty($error)): ?>
                    <?php echo bootstrap_alert($error) ?>
                <?php endif ?>
                <?php if (!empty($success)): ?>
                    <?php echo bootstrap_alert($success, 'success') ?>
                <?php endif ?>

                <?php echo form_open("settings"); ?>
                <div class="form-group">
                    <div class="form-group">
                        <?php echo bootstrap_input('name', 'Blog Name', null, $settings->name); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <?php echo bootstrap_input('avatar', 'Avatar Image URL', null, $settings->avatar); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo wsywig('about', 'Description', $settings->about) ?>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <?php echo bootstrap_input('posts_per_page', 'Posts Per Page', null, $settings->posts_per_page); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo bootstrap_input('css', 'Custom CSS', 'textarea', $settings->css) ?>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('footer') ?>