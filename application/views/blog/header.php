<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title><?php echo $blog->getName() ?></title>
    <style type="text/css">
        body, html {
            height: 100%;
            width: 100%;
            margin: 0;
            font-family: Geneva, sans-serif;
            font-size: 11px;
            line-height: 20px;
        }

        a {
            text-decoration: none;
            border-bottom-width: 1px;
            border-bottom-style: dotted;
            border-bottom-color: #CCC;
            color: #666;
        }

        a:hover {
            color: #999;
        }

        section {
            height: 100%;
            width: 800px;
            margin: auto;
        }

        article {
            padding: 20px;
            width: 56%;
            margin-left: 110px;
        }

        article.page {
            margin-left: 0;
            width: 66%;
        }

        header {
            background-image: url(http://colourlovers.com.s3.amazonaws.com/images/patterns/3481/3481412.png?1363789348);
            height: 200px;
            width: 100%;
            border: 1px solid #000;
        }

        hr {
            border: 0;
            background-color: #999;
            margin-top: 20px;
            margin-bottom: 20px;
            height: 1px;
        }

        nav {
            float: right;
            width: 25%;
            margin-left: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 14px;
            letter-spacing: 1px;
            font-family: Helvetica, sans-serif;
        }

        .date {
            text-align: right;
            position: relative;
            left: -475px;
            top: 13px;
            float: right;
            color: #999;
        }

        article.pagination {
            text-align: center;
        }

        img {
            max-width: 100%;
        }
        
        img.avatar {
            height: 240px;
            -webkit-border-radius: 120px;
            -moz-border-radius: 120px;
            border-radius: 120px;
            margin: auto;
            display: block;
        }

        ul.archive li {
            list-style-type: disc;
        }

        ul.archive > li {
            list-style-type: none;
            font-weight: bold;
        }
        a.dashboard-link {
            position: fixed;
            right: 10px;
            top: 10px;
            border: 1px solid;
            padding: 0px 5px;
        }
        h1 a {
            color: inherit;
            border: 0;
        }

        article.pagination {
            height: 40px;
        }

        a.read-more {
            display: block;
            margin-top: 1rem;
            width: 55px;
        }

    </style>
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
    <header></header>
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
                    <a href="<?php echo blog_url($blog, 'page/' . $page->getTitle()) ?>"><?php echo $page->getTitle() ?></a>
                </li>
            <?php endforeach ?>
            <li><a href="<?php echo blog_url($blog, 'about') ?>">About</a></li>
        </ul>
        <hr/>

        <h1>Archive</h1>

        <ul>
            <?php foreach ($blog->getSidebarArchive() as $key => $item): ?>
                <li><a href="<?php echo blog_url($blog, 'archive#' . $key) ?>"><?php echo $item['monthyear'] ?></a> (<?php echo $item['postcount'] ?>)</li>
            <?php endforeach ?>
        </ul>

    </nav>
