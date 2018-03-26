<?php $this->load->view('header') ?>
<h1 class="my-5">New Post</h1>

<div class="row">
    <div class="col-xl-12">

        <?php if(!empty($error)): ?>
            <?php echo bootstrap_alert($error) ?>
        <?php endif ?>

        <?php echo form_open("blog/create"); ?>
            <div class="form-group">
                <?php echo bootstrap_input('title', 'Post Title'); ?>
            </div>
            <div class="form-group">
                <?php echo bootstrap_input('body', 'Post Body', 'textarea'); ?>
            </div>
            <input type="submit" name="publish" value="Publish" class="btn btn-primary">
            <input type="submit" name="draft" value="Save as Draft" class="btn btn-outline-primary">
            <a href="<?php echo base_url('blog/posts') ?>" class="btn btn-link">Cancel</a>
        <?php echo form_close(); ?>
    </div>
</div>

<?php $this->load->view('footer') ?>