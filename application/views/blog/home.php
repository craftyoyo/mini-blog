<?php $this->load->view('blog/header') ?>
<?php if ($posts = $blog->getPosts()): ?>
    <?php foreach ($posts as $post): ?>
        <article>
            <span class="date"><?php echo date('M j, Y <\b\r> g:ma', strtotime($post->getCreated())) ?></span>
            <h1><a href="<?php echo blog_url($blog,"post/{$post->getPostId()}") ?>"><?php echo $post->getTitle() ?></a></h1>
            <?php echo $post->getBodyPreview() ?>
            <?php if ($post->isBodyOverLimit()): ?>
                <a href="<?php echo blog_url($blog,"post/{$post->getPostId()}") ?>" class="read-more">Read More</a>
            <?php endif ?>
        </article>
    <?php endforeach ?>
<?php else: ?>
    <article>This blog does not have any posts yet.</article>
<?php endif ?>
<article class="pagination">
    <?php if ($blog->hasPreviousPage()): ?>
        <a href="?page=<?php echo ($this->input->get('page') ?? 1) - 1 ?>" style="float: left">Previous</a>
    <?php endif ?>

    <?php if ($blog->hasNextPage()): ?>
        <a href="?page=<?php echo ($this->input->get('page') ?? 1) + 1 ?>" style="float: right">Next</a>
    <?php endif ?>
</article>
<?php $this->load->view('blog/footer') ?>
