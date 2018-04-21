<?php $this->load->view('blog/header') ?>
<?php foreach ($blog->getPosts() as $post): ?>
    <article>
        <span class="date"><?php echo date('M j, Y <\b\r> g:ma', strtotime($post->getCreated())) ?></span>
        <h1><?php echo $post->getTitle() ?></h1>
        <?php echo $post->getBody() ?>
    </article>
<?php endforeach ?>
<article class="pagination">

<?php if($blog->hasPreviousPage()): ?>
    <a href="?page=<?php echo ( $this->input->get('page') ?? 1 ) - 1 ?>">Previous</a>
<?php endif ?>

<?php if($blog->hasNextPage()): ?>
    <a href="?page=<?php echo ( $this->input->get('page') ?? 1 ) + 1 ?>" style="float: right">Next</a>
<?php endif ?>
<?php $this->load->view('blog/footer') ?>
