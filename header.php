<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 */
?>
<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/wp-content/themes/arc/css/prism.css">
        <link rel="stylesheet" href="/wp-content/themes/arc/css/app.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic" rel="stylesheet" type="text/css">
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
        <script src="/wp-content/themes/arc/js/prism.js"></script>
        <?= wp_head() ?>
    </head>
    <body class="docs language-php ">
        <nav class="main">
            <ul class="main-nav">
                <li class="nav-docs"><a href="/docs">Documentation</a></li>
            </ul>

            <div class="responsive-sidebar-nav">
                <a href="#" class="toggle-slide menu-link btn">☰</a>
            </div>
        </nav>
