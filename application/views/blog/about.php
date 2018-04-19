<?php $this->load->view('blog/header') ?>
<div class="row">
    <div class="col-xl-4">
        <h1 class="my-5">About</h1>
        <?php if(!empty($blog->getAvatar())): ?>
	        <img src="<?php echo $blog->getAvatar() ?>">
	    <?php endif ?>
        <?php echo $blog->getAbout() ?>
    </div>
</div>

<?php $this->load->view('blog/footer') ?>
