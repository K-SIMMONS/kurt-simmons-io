<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kurtsimmonsio
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
  <?php wp_head();?>
  <title>portfolio</title>
</head>
<body>
<?php

global$template;

if (basename($template)=='front-page.php'): ?>

<header class ="header"></header>



<?php else: ?>

<header class = "header">
  <nav class="navbar navbar-expand-md navbar-dark bg-none" id = "navBar"role="navigation">
    <div class="container-fluid">
     
      <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" onclick = "handleMenu()" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="toggler-icon top-bar"></span>
        <span class="toggler-icon middle-bar"></span>
        <span class="toggler-icon bottom-bar"></span>
          </button>
         <?php the_custom_logo();?> 
          <?php
          wp_nav_menu( array(
              'menu'              => 'menu-1',
              'theme_location'    => 'menu-1',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav ',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker(),
          ) );
          ?>
   </div>
  </nav>
</header>

<?php endif; ?>