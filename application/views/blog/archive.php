<?php $this->load->view('blog/header') ?>
<article class="page">
    <h1>Archive</h1>
    <ul class="archive">
        <?php foreach ($blog->getArchive() as $year => $months): ?>
            <li><?php echo $year ?></li>
            <ul>
                <?php foreach ($months as $month => $posts): ?>
                    <li><a name="<?php echo $year . $month ?>"></a><?php echo $month ?></li>
                    <ul>
                        <?php foreach ($posts as $post): ?>
                            <li>
                                <a href="<?php echo blog_url($blog, "post/{$post['post_id']}") ?>"><?php echo $post['title'] ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                <?php endforeach ?>
            </ul>
        <?php endforeach ?>
    </ul>
</article>
<?php $this->load->view('blog/footer') ?>
