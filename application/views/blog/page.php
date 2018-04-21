<?php $this->load->view('blog/header') ?>
<article class="page">
    <h1><?php echo $page->getTitle() ?></h1>
    <p><?php echo $page->getBody() ?></p>
</article>
<?php $this->load->view('blog/footer') ?>
