<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <title>
    <?= $site->metaTitle() ?>
  </title>

  <meta name="author" content="">
  <meta name="description" content="<?= $site->metaDescription() ?>">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php snippet('favicon', ['size' => 57]); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php snippet('favicon', ['size' => 114]); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php snippet('favicon', ['size' => 72]); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php snippet('favicon', ['size' => 144]); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php snippet('favicon', ['size' => 60]); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php snippet('favicon', ['size' => 120]); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php snippet('favicon', ['size' => 76]); ?>" />
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php snippet('favicon', ['size' => 152]); ?>" />
  <link rel="icon" type="image/png" href="<?php snippet('favicon', ['size' => 196]); ?>" sizes="196x196" />
  <link rel="icon" type="image/png" href="<?php snippet('favicon', ['size' => 96]); ?>" sizes="96x96" />
  <link rel="icon" type="image/png" href="<?php snippet('favicon', ['size' => 32]); ?>" sizes="32x32" />
  <link rel="icon" type="image/png" href="<?php snippet('favicon', ['size' => 16]); ?>" sizes="16x16" />
  <link rel="icon" type="image/png" href="<?php snippet('favicon', ['size' => 128]); ?>" sizes="128x128" />
  <meta name="application-name" content="&nbsp;" />
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="<?php snippet('favicon', ['size' => 144]); ?>" />
  <meta name="msapplication-square70x70logo" content="<?php snippet('favicon', ['size' => 70]); ?>" />
  <meta name="msapplication-square150x150logo" content="<?php snippet('favicon', ['size' => 150]); ?>" />
  <meta name="msapplication-wide310x150logo" content="<?php snippet('favicon', ['size' => 310]); ?>" />
  <meta name="msapplication-square310x310logo" content="<?php snippet('favicon', ['size' => 310]); ?>" />

  <meta property="og:url" content="<?= $site->url() ?>">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= $site->metaTitle() ?>">
  <meta property="og:description" content="<?= $site->metaDescription() ?>">
  <meta property="og:image" content="<?php foreach($site->images()->template('seo') as $seo){echo $seo->url();} ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:description" content="<?= $site->metaDescription() ?>">
  <meta name="twitter:title" content="<?= $site->metaTitle() ?>">
  <meta name="twitter:image" content="<?php foreach($site->images()->template('seo') as $seo){echo $seo->url();} ?>">

  <?= css('assets/css/bundle.css') ?>

</head>

<body>