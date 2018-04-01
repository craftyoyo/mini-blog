<?php $this->load->view('header') ?>
<h1 class="my-5">My Pages</h1>

<div class="row">
    <div class="col-xl-12">

        <?php if ($this->session->flashdata('error')): ?>
            <?php echo bootstrap_alert($this->session->flashdata('error')) ?>
        <?php endif ?>
        <a href="<?php echo base_url("pages/create") ?>" class="btn btn-primary mb-3">New Page</a>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Published</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($blog->getPages() as $page): ?>
                <tr>
                    <td>
                        <a href="<?php echo base_url("blog/view/{$page->getPageId()}") ?>"><?php echo $page->getTitle() ?></a>
                    </td>
                    <td><?php echo $page->getDraft() == '1' ? "" : "Yes" ?></td>
                    <td><?php echo date('M d, Y h:ia', strtotime($page->getCreated())) ?></td>
                    <td><?php echo date('M d, Y h:ia', strtotime($page->getModified())) ?></td>
                    <td>
                        <a href="<?php echo base_url("pages/edit/{$page->getPageId()}") ?>" class="btn btn-link">Edit</a>
                        <?php echo form_open("pages/delete/{$page->getPageId()}") ?>
                            <input type="submit" class="btn btn-link" onclick="return confirm('Are you sure you want to delete the page titled &quot;<?php echo $page->getTitle() ?>&quot;?')" value="Delete">
                        <?php echo form_close() ?>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>

<?php $this->load->view('footer') ?>
