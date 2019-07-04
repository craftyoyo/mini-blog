<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo get_title() ? get_title() . ' | ' : '' ?><?php echo $blog->getName() ?></title>
    <link href="<?php echo base_url() ?>css/blog-base.css" rel="stylesheet"/>
    <style>
        <?php echo $blog->getStyle() ?>
        <?php if($blog->getHeader()): ?>
        header {
            background-image: url(<?php echo $blog->getHeader() ?>);
            background-position: center;
            background-size: 100%;
        }
        <?php endif ?>
    </style>
</head>

<body>

<?php if ($this->ion_auth->logged_in()): ?>
    <a class="dashboard-link" href="<?php echo base_url('posts') ?>">Admin</a>
<?php endif ?>
<section>
    <a href="<?php echo blog_url($blog, '') ?>">
        <header></header>
    </a>
    <nav>
        <br/>
        <h1><a href="<?php echo blog_url($blog, '') ?>"><?php echo $blog->getName() ?></a></h1>
        <p><?php echo $blog->getDescription() ?></p>
        <hr/>
        <ul>
            <li><a href="<?php echo blog_url($blog, '') ?>">Home</a></li>
            <li><a href="<?php echo blog_url($blog, 'archive') ?>">Archive</a></li>
            <?php foreach ($blog->getPages() as $page): ?>
                <li>
                    <a href="<?php echo blog_url($blog, 'page/' . $page->getPageId()) ?>"><?php echo $page->getTitle() ?></a>
                </li>
            <?php endforeach ?>
            <li><a href="<?php echo blog_url($blog, 'about') ?>">About</a></li>
        </ul>
        <hr/>

        <h1>Archive</h1>

        <ul>
            <?php foreach ($blog->getSidebarArchive() as $key => $item): ?>
                <li><a href="<?php echo blog_url($blog, 'archive#' . $key) ?>"><?php echo $item['monthyear'] ?></a>
                    (<?php echo $item['postcount'] ?>)
                </li>
            <?php endforeach ?>
        </ul>

    </nav>
