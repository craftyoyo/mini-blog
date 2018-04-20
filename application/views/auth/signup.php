

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
        <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
        <!-- Generated: 2018-04-16 09:29:05 +0200 -->
        <title>Login - tabler.github.io - a responsive, flat and full featured admin template</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
        <link href="<?php echo base_url() ?>assets/css/dashboard.css" rel="stylesheet" />
    </head>
    <body class="">
        <div class="page">
        <div class="page-single">
        <div class="container">
        <div class="row">
            <div class="col col-login mx-auto">
                <div class="text-center mb-6">
                    <img src="./assets/brand/tabler.svg" class="h-6" alt="">
                </div>
                <form class="card" action="" method="post">
                <div class="card-body p-6">
                    <div class="card-title">Sign Up</div>
                    <?php if(!empty($error)): ?>
                    <?php echo bootstrap_alert($error) ?>
                    <?php endif ?>
                    <?php echo form_open("auth/signup"); ?>
                    <div class="form-group">
                        <?php echo bootstrap_input('username'); ?>
                    </div>
                    <div class="form-group">
                        <?php echo bootstrap_input('email'); ?>
                    </div>
                    <div class="form-group">
                        <?php echo bootstrap_input('first_name'); ?>
                    </div>
                    <div class="form-group">
                        <?php echo bootstrap_input('last_name'); ?>
                    </div>
                    <div class="form-group">
                        <?php echo bootstrap_input('password', null, 'password'); ?>
                    </div>
                    <div class="form-group">
                        <?php echo bootstrap_input('password_confirm', 'Confirm Password', 'password'); ?>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                    </div>
                </div>
                <?php echo form_close(); ?>
                <div class="text-center text-muted">
                    Already have account? <a href="<?php echo base_url('auth/login') ?>">Sign in</a>
                </div>
            </div>
        </div>
    </body>
</html>

