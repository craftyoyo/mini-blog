<?php $this->load->view('blog/header') ?>
<div class="row">
    <div class="col-xl-4">
        <h1 class="my-5"><?php echo $blog->getName() ?></h1>
        <?php foreach ($blog->getPosts() as $post): ?>
            <h2><?php echo $post->getTitle() ?></h2>
            <div><?php echo $post->getCreated() ?></div>
            <div>
                <?php echo $post->getBody() ?>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php $this->load->view('blog/footer') ?>
