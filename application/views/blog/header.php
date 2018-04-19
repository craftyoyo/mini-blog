<!DOCTYPE html>
<html>
<head>
    <title>Churro</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        <?php echo $blog->getStyle() ?>
    </style>
</head>
<body>
<?php if($this->ion_auth->logged_in()): ?>
    <a class="float-right p-3" href="<?php echo base_url('/') ?>">Dashboard</a>
<?php endif ?>
<div class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><?php echo $blog->getName() ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo blog_url($blog,'') ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo blog_url($blog,'archive') ?>">Archive</a>
                    </li>
                    <?php foreach($blog->getPages() as $page): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo blog_url($blog,'page/' . $page->getTitle()) ?>"><?php echo $page->getTitle() ?></a>
                        </li>
                    <?php endforeach ?>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="--><?php //echo blog_url($blog,'board') ?><!--">Board</a>-->
<!--                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo blog_url($blog,'about') ?>">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="container">
