<?php $this->load->view('header') ?>
<h1 class="my-5"><?php echo $page->getTitle() ?></h1>

<div class="row">
    <div class="col-xl-12">
        <div class="text-muted mb-3">Pageed by <?php echo $page->getUsername() ?> at <?php echo date('M d, Y h:ia', strtotime($page->getCreated())) ?></div>
        <div class="mb-5"><?php echo $page->getBody() ?></div>

        <a href="<?php echo base_url("blog/edit/{$page->getPageId()}") ?>" class="btn btn-primary">Edit</a>
        <?php echo form_open("pages/delete/{$page->getPageId()}", array('class' => 'd-inline-block')) ?>
        <input type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete the page titled &quot;<?php echo $page->getTitle() ?>&quot;?')" value="Delete">
        <?php echo form_close() ?>
        <br>
        <a href="<?php echo base_url("blog") ?>" class="btn btn-link">Back to Pages</a>
    </div>
</div>

<?php $this->load->view('footer') ?>
