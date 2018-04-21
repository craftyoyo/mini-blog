<?php $this->load->view('blog/header') ?>
<article class="page">
    <h1>About</h1>
    <?php if (!empty($blog->getAvatar())): ?>
        <img src="<?php echo $blog->getAvatar() ?>" class="avatar">
    <?php endif ?>
    <?php echo $blog->getAbout() ?>
</article>

<?php $this->load->view('blog/footer') ?>
