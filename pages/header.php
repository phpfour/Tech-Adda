<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo ViewHelper::config('app.title') ?></title>
    <meta name="description" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="<?php echo ViewHelper::url("assets/css/bootstrap.css") ?>" rel="stylesheet">
    <link href="<?php echo ViewHelper::url("assets/css/app.css") ?>" rel="stylesheet">

</head>

<body>

<div class="topbar">

    <div class="fill">

        <div class="container">

            <a class="brand" href="<?php ViewHelper::url() ?>"><?php echo ViewHelper::config('app.title') ?></a>

            <ul class="nav">
                <li><a href="<?php ViewHelper::url() ?>">Home</a></li>
                <li><a href="<?php ViewHelper::url('?page=events') ?>">Events</a></li>
                <li><a href="<?php ViewHelper::url('?page=about') ?>">About</a></li>
            </ul>

            <span class="pull-right">
                <?php if ($_SESSION['user']): ?>
                    <span><?php echo $_SESSION['user']['email'] ?></span> | <a href="<?php ViewHelper::url('?page=logout') ?>">Logout</a>
                <?php else: ?>
                    <a href="<?php ViewHelper::url('?page=login') ?>">
                        <img width="150px" height="26px" src="<?php ViewHelper::url('assets/images/google_signin.png') ?>" alt="Sign in with Google">
                    </a>
                <?php endif; ?>
            </span>

        </div>

    </div>

</div>

<div class="container">

