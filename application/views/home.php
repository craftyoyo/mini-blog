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
        <link rel="icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>favicon.ico" />
        <title>churro</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
        <link href="<?php echo base_url() ?>assets/css/dashboard.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet" />
    </head>
    <body class="">
        <div class="container">
            <div class="row top">
                <div class="col text-logo">
                    <img class="logo mr-1" src="<?php echo base_url('images/dark_logo.png') ?>">churro
                </div>
                <div class="col text-right">
                    <?php if ($this->ion_auth->logged_in()): ?>
                        <a href="<?php echo base_url('posts') ?>" class="btn btn-primary">Admin</a>
                    <?php else: ?>
                        <a href="<?php echo base_url('signup') ?>" class="btn btn-primary mr-1">Sign Up</a>
                        <a href="<?php echo base_url('login') ?>" class="btn btn-secondary">Log In</a>
                    <?php endif ?>
                </div>
            </div>

            <div class="row hero">
                <div class="col">
                    <h1>Customizeable free blog service</h1>
                    <p class="w-75">Churro is an open-source blog and home page service where you can create custom pages and completely customize the CSS - all for free.</p>
                    <a href="<?php echo base_url('signup') ?>" class="mt-5 btn btn-lg btn-primary mr-1">Get Started</a>
                    <a href="<?php echo base_url('~tom3') ?>" class="mt-5 btn btn-lg btn-secondary">Demo</a>
                </div>
                <div class="col text-right">
                    <a href="<?php echo base_url('images/blog.png') ?>" class="thumbnail"><img src="<?php echo base_url('images/blog.png') ?>"></a>
                </div>
            </div>

            <div class="row features">
                <div class="col">
                    <h5>Create your pages</h5>
                    <p>Creating pages on your blog is as easy as creating posts, and will appear in your menu.</p>
                    <a href="<?php echo base_url('images/page.png') ?>" class="thumbnail"><div style="background-image: url(<?php echo base_url('images/page.png') ?>)"></div></a>
                </div>
                <div class="col">
                    <h5>Style it your way</h5>
                    <p>For those who want to completely customize the look, you can put in your own CSS code.</p>
                    <a href="<?php echo base_url('images/settings.png') ?>" class="thumbnail"><div style="background-image: url(<?php echo base_url('images/settings.png') ?>)"></div></a>
                </div>
                <div class="col">
                    <h5>Simple URL</h5>
                    <p>Your new blog URL will be based on your username - For example, coco.lat/c/~username</p>
                    <a href="<?php echo base_url('images/admin.png') ?>" class="thumbnail"><div style="background-image: url(<?php echo base_url('images/admin.png') ?>)"></div></a>
                </div>
            </div>
        </div>

        <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
        <link rel="stylesheet" href="//dbrekalo.github.io/simpleLightbox/dist/simpleLightbox.min.css">
        <script src="//dbrekalo.github.io/simpleLightbox/dist/simpleLightbox.min.js"></script>

        <script type="text/javascript">
            var $items = $('.post img');
            $('a.thumbnail').simpleLightbox({
                nextOnImageClick: false,
                nextBtnClass: ' d-none',
                prevBtnClass: ' d-none',
            });
            $items.on('click', function (e) {
                $.SimpleLightbox.open({
                    items: [e.target.src]
                });
            });
        </script>
    </body>
</html>