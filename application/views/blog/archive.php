<?php $this->load->view('blog/header') ?>
<div class="row">
    <div class="col-xl-12">
        <h1 class="my-5">Archive</h1>
        <ul>
        <?php foreach ($blog->getArchive() as $year => $months): ?>
        	<li><?php echo $year ?></li>
        	<ul>
        	<?php foreach($months as $month => $posts): ?>
        		<li><?php echo $month ?></li>
        		<ul>
        		<?php foreach($posts as $post): ?>
        			<li><a href="<?php echo blog_url($blog,"post/{$post['post_id']}") ?>"><?php echo $post['title'] ?></a></li>
        		<?php endforeach ?>
        		</ul>
        	<?php endforeach ?>
        	</ul>
        <?php endforeach ?>
        </ul>
    </div>
</div>

<?php $this->load->view('blog/footer') ?>
