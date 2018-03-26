<?php $this->load->view('header') ?>
<h1 class="my-5">New Post</h1>

<div class="row">
    <div class="col-xl-12">

        <?php if(!empty($error)): ?>
            <?php echo bootstrap_alert($error) ?>
        <?php endif ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Body</th>
                <th scope="col">Published</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($posts as $post): ?>
                <tr>
                    <td><a href="<?php echo base_url("blog/view/{$post->getPostId()}") ?>"><?php echo $post->getTitle() ?></a></td>
                    <td><?php echo $post->getBody() ?></td>
                    <td><?php echo $post->getDraft() == '1' ? "Yes" : "" ?></td>
                    <td><?php echo date('M d, Y h:ia', strtotime($post->getCreated())) ?></td>
                    <td><?php echo date('M d, Y h:ia', strtotime($post->getModified())) ?></td>
                    <td>
                        <a href="<?php echo base_url("blog/edit/{$post->getPostId()}") ?>" class="btn btn-link">Edit</a>
                        <a href="<?php echo base_url("blog/edit/{$post->getPostId()}") ?>" class="btn btn-link">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

    </div>
</div>

<?php $this->load->view('footer') ?>
