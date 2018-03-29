<?php $this->load->view('header') ?>
<h1 class="my-5">My Blog</h1>


<div class="row">
    <div class="col-xl-4">
        <?php foreach($posts as $post): ?>
            <h2><?php echo $post->getTitle() ?></h2>
            <div><?php echo $post->getCreated() ?></div>
            <div>
                <?php echo $post->getBody() ?>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php $this->load->view('footer') ?>
