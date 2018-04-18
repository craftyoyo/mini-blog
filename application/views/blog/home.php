<?php $this->load->view('blog/header') ?>
<div class="row">
    <div class="col-xl-12">
        <?php foreach ($blog->getPosts() as $post): ?>
            <div class="post">
                <h2><?php echo $post->getTitle() ?></h2>
                <div class="post-date">Posted <?php echo date('M j, Y \a\t g:ma', strtotime($post->getCreated())) ?></div>
                <div class="post-content">
                    <?php echo $post->getBody() ?>
                </div>
                <div class="post-link"><a href="<?php echo blog_url($blog,"post/{$post->getPostId()}") ?>">Read More</a></div>
            </div>
        <?php endforeach ?>
        <?php if($blog->hasPreviousPage()): ?>
            <a href="?page=<?php echo ( $this->input->get('page') ?? 1 ) - 1 ?>">Previous</a>
        <?php endif ?>
        <?php if($blog->hasNextPage()): ?>
            <a href="?page=<?php echo ( $this->input->get('page') ?? 1 ) + 1 ?>">Next</a>
        <?php endif ?>
    </div>
</div>

<?php $this->load->view('blog/footer') ?>
