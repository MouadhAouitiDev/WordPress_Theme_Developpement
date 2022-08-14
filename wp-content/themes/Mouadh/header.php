<?php
/*
 *
 * Header Tempalte
 *
 * @package Mouadh
 */
?>
<!doctype html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    </meta>
    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>> 

      <?php if ( function_exists('wp_body_open()')){

            wp_body_open();
      } 
      ?> 

<header>Header</header>


</body>




