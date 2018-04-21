<?php $this->load->view('blog/header') ?>
<article>
<span class="date"><?php echo date('M j, Y <\b\r> g:ma', strtotime($post->getCreated())) ?></span>
	<h1><?php echo $post->getTitle() ?></h1>
	<?php echo $post->getBody() ?>
</article>
<?php $this->load->view('blog/footer') ?>
