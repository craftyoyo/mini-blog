<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="bg-light">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Blog Title</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo blog_url($blog,'board') ?>">Board</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo blog_url($blog,'about') ?>">About</a>
                    </li>
                </ul>
                <?php if(!$this->ion_auth->logged_in()): ?>
                    <a href="<?php echo base_url('login') ?>" class="btn btn-link">Log In</a>
                    <a href="<?php echo base_url('signup') ?>" class="btn btn-primary">Sign Up</a>
                <?php else: ?>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $this->session->userdata('username') ?>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo base_url('~' . $this->session->userdata('username')) ?>">My Blog</a>
                                <a class="dropdown-item" href="<?php echo base_url('b/create') ?>">New Post</a>
                                <a class="dropdown-item" href="<?php echo base_url('settings') ?>">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('logout') ?>">Log Out</a>
                            </div>
                        </li>
                    </ul>
                <?php endif ?>
            </div>
        </nav>
    </div>
</div>
<div class="container">
