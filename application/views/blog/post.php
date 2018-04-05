<?php $this->load->view('blog/header') ?>
<div class="row">
    <div class="col-xl-12">
        <div class="post">
            <h1><?php echo $post->getTitle() ?></h1>
            <div class="post-date">Posted <?php echo date('M j, Y \a\t g:ma', strtotime($post->getCreated())) ?></div>
            <div class="post-content">
                <?php echo $post->getBody() ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('blog/footer') ?>
