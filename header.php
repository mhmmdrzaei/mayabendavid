<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="https://fonts.googleapis.com/css?family=Nosifer|Montserrat:400,700" rel="stylesheet">
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
  <div class="container headerContainer">

      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <h1><?php bloginfo( 'name' ); ?></h1>
      </a>

 <div class="fuckyou" id="">
       <div class="fa fa-bars " title="menu">
        <div id="nav-icon4">
         <span></span>
         <span></span>
         <span></span>
       </div>
       </div>

       
     </div> 
     <div class="Menuflex" id="Menuflex">
           <div class="menuContent away" >
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'primary'
        )); ?>
          
        </div>
     </div>
  </div> <!-- /.container -->
</header><!--/.header-->

