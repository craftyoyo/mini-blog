<?php $this->load->view('header') ?>
<div class="page-header">
    <div class="page-title">Pages</div>
    <a href="<?php echo base_url("pages/create") ?>" class="btn btn-primary d-block ml-auto">New Page</a>
</div>
<div class="row">
    <div class="col">
        <div class="card">
            <?php if ($this->session->flashdata('error')): ?>
                <?php echo bootstrap_alert($this->session->flashdata('error')) ?>
            <?php endif ?>
            <table class="table card-table table-striped table-vcenter">
                <thead>
                <tr>
                    <th>Title</th>
                    <th class="text-center">Published</th>
                    <th width="120">Created</th>
                    <th width="120">Updated</th>
                    <th width="150">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php if ($pages = $blog->getPages()): ?>
                    <?php foreach ($pages as $page): ?>
                        <tr>
                            <td>
                                <a href="<?php echo blog_url($blog, 'page/' . $page->getPageId()) ?>" target="_blank"><?php echo $page->getTitle() ?></a>
                            </td>
                            <td class="text-center"><?php echo $page->getDraft() == '1' ? "No" : "Yes" ?></td>
                            <td><?php echo date('M d, Y', strtotime($page->getCreated())) ?></td>
                            <td><?php echo date('M d, Y', strtotime($page->getModified())) ?></td>
                            <td>
                                <a href="<?php echo base_url("pages/edit/{$page->getPageId()}") ?>" class="btn btn-secondary btn-sm">Edit</a>
                                <form class="d-inline" action="<?php echo base_url("pages/delete/{$page->getPageId()}") ?>" method="page" accept-charset="utf-8"><input type="submit" class="btn btn-secondary btn-sm" onclick="return confirm('Are you sure you want to delete the page titled &quot;<?php echo $page->getTitle() ?>&quot;?')" value="Delete"></form>
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php else: ?>
                    <tr>
                        <td class="text-muted py-5">You do not have any pages</td>
                    </tr>
                <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view('footer') ?>
