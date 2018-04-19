<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Language" content="en" />
        <meta name="msapplication-TileColor" content="#2d89ef">
        <meta name="theme-color" content="#4188c9">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="<?php echo base_url() . '/' ?>favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() . '/' ?>favicon.ico" />
        <!-- Generated: 2018-04-16 09:29:05 +0200 -->
        <title>Empty page - tabler.github.io - a responsive, flat and full featured admin template</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
        <script src="<?php echo base_url() . '/' ?>assets/js/require.min.js"></script>
        <script>
            requirejs.config({
                baseUrl: '.'
            });
        </script>
        <!-- Dashboard Core -->
        <link href="<?php echo base_url() . '/' ?>assets/css/dashboard.css" rel="stylesheet" />
        <script src="<?php echo base_url() . '/' ?>assets/js/dashboard.js"></script>
        <!-- c3.js Charts Plugin -->
        <link href="<?php echo base_url() . '/' ?>assets/plugins/charts-c3/plugin.css" rel="stylesheet" />
        <script src="<?php echo base_url() . '/' ?>assets/plugins/charts-c3/plugin.js"></script>
        <!-- Google Maps Plugin -->
        <link href="<?php echo base_url() . '/' ?>assets/plugins/maps-google/plugin.css" rel="stylesheet" />
        <script src="<?php echo base_url() . '/' ?>assets/plugins/maps-google/plugin.js"></script>
        <!-- Input Mask Plugin -->
        <script src="<?php echo base_url() . '/' ?>assets/plugins/input-mask/plugin.js"></script>
    </head>
    <body class="">
        <div class="page">
        <div class="page-main">
            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <a class="header-brand" href="<?php echo base_url() . '/' ?>index.html">
                        <img src="<?php echo base_url() . '/' ?>demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
                        </a>
                        <div class="d-flex order-lg-2 ml-auto">
                            <div class="nav-item d-none d-md-flex">
                                <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <span class="avatar" style="background-image: url(<?php echo base_url() . '/' ?>demo/faces/female/25.jpg)"></span>
                                <span class="ml-2 d-none d-lg-block">
                                <span class="text-default">Jane Pearson</span>
                                <small class="text-muted d-block mt-1">Administrator</small>
                                </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="<?php echo base_url('~' . $this->session->userdata('username')) ?>">My Blog</a>
                                    <!--                                <a class="dropdown-item" href="--><?php //echo base_url('settings') ?><!--">Account Settings</a>-->
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="<?php echo base_url('logout') ?>">Log Out</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                        <span class="header-toggler-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 ml-auto">
                            <form class="input-icon my-3 my-lg-0">
                                <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                                <div class="input-icon-addon">
                                    <i class="fe fe-search"></i>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg order-lg-first">
                            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                                <li class="nav-item active">
                                    <a class="nav-link" href="<?php echo base_url('/') ?>">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('posts') ?>">Posts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('pages') ?>">Pages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('settings') ?>">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-3 my-md-5">
            </div>
            
            <div class="container">
