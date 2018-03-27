<?php $this->load->view('header') ?>
<h1 class="my-5"><?php echo $post->getTitle() ?></h1>

<div class="row">
    <div class="col-xl-12">
        <div class="text-muted mb-3">Posted by <?php echo $post->getUsername() ?> at <?php echo date('M d, Y h:ia', strtotime($post->getCreated())) ?></div>
        <div class="mb-5"><?php echo $post->getBody() ?></div>

        <a href="<?php echo base_url("blog/edit/{$post->getPostId()}") ?>" class="btn btn-primary">Edit</a>
        <?php echo form_open("blog/delete/{$post->getPostId()}", array('class' => 'd-inline-block')) ?>
        <input type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete the post titled &quot;<?php echo $post->getTitle() ?>&quot;?')" value="Delete">
        <?php echo form_close() ?>
        <br>
        <a href="<?php echo base_url("blog") ?>" class="btn btn-link">Back to Posts</a>
    </div>
</div>

<?php $this->load->view('footer') ?>
