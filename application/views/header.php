<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $assigned_data['page_title']->title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,cyrillic-ext,cyrillic'
          rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/normalize.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/grid.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" type="text/css" media="all"/>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.5/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-2.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.jcarousel.min.js"></script>
    <script src="<?php echo base_url(); ?>js/functions.js"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>    <![endif]--></head>
<body class="<?= $assigned_data['page_title']->body_class; ?>">
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&appId=119193478248072&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<header>
    <div class="container">
        <div class="row">
            <a id="logo" href="<?php echo base_url();?>welcome/index/home" role="banner">logo</a>
            <nav role="navigation">
                <?php foreach ($menu as $menuItem): ?>
                    <a href="<?php echo base_url() . $menuItem['permalink'] ?>"
                       class="<?php $url = $this->uri->uri_string(); echo ($url == $menuItem['permalink']) ? 'active' : ''; ?>"><?= $menuItem['label'] ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </div>
    </div>
</header>