<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="<?php bloginfo( 'charset' ); ?>">
 <title><?php wp_title(); ?></title>
 <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <meta name="keywords" content="<?php bloginfo( 'keywords' ); ?>">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
<!--    <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css"> -->
       <?php wp_head() ?>
   <!-- Script
   ================================================== -->
<!-- 	<script src="js/modernizr.js"></script> -->

   <!-- Favicons
	================================================== -->
<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />


</head>

<body>

   <!-- Header
   ================================================== -->
   <header>

      <div class="row">

         <div class="twelve columns">

            <div class="logo">
               <a href="index.html"><img alt="" src="images/logo.png"></a>
            </div>









<nav id="nav-wrap">
   <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
   <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
<?php wp_nav_menu( array(
'theme_location' => 'top', // вывести меню по индефикатору
'container' => null,        // удалить обвертку меню
'menu_class' => 'nav',        // класс привязанный к nav ul
'menu_id' => 'nav',        // id привязанный к nav ul
)); ?>

<!--
   <ul id="nav" class="nav">
      <li class="current"><a href="index.htm">Home</a></li>
      <li><span><a href="blog.html">Blog</a></span>
         <ul>
            <li><a href="blog.html">Blog Index</a></li>
            <li><a href="single.html">Post</a></li>
         </ul>
      </li>
      <li><span><a href="portfolio-index.html">Portfolio</a></span>
         <ul>
            <li><a href="portfolio-index.html">Portfolio Index</a></li>
            <li><a href="portfolio.html">Portfolio Entry</a></li>
         </ul>
      </li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="styles.html">Features</a></li>

   </ul> --> <!-- end #nav -->

</nav> <!-- end #nav-wrap -->

         </div>

      </div>

   </header> <!-- Header End -->