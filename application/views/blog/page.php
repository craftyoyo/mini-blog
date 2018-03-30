<?php $this->load->view('blog/header') ?>
<div class="row">
    <div class="col-xl-4">
        <h1 class="my-5"><?php echo $page->getTitle() ?></h1>
        <p><?php echo $page->getBody() ?></p>
    </div>
</div>

<?php $this->load->view('blog/footer') ?>
