<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<!-- wp_head -->
	<?php wp_head(); ?>
	<!-- /wp_head -->
    <link href="/wp-content/themes/rsttheme/assets/css/main.css" rel="stylesheet">
  <link href="/wp-content/themes/rsttheme/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="starter-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="/themes/rst/img/logo.png" alt=""> -->
        <h1 class="sitename">RST Consulting</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>
          <li><a href="https://portal.robtacey.com" target="_blank">Portal</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">
