<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Inkness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!--styles-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/app.css">

<?php wp_head(); ?>

<!--styles-->
<link rel="stylesheet" href="<?=base_url();?>assets/css/articles.css">


</head>

<body <?php body_class(); ?>>


<?php do_action( 'inkness_before' ); ?>

<?php echo file_get_contents(base_url() . 'wp_content/get_header_top_bar'); ?>   

<?php echo file_get_contents(base_url() . 'wp_content/get_nav'); ?>

    <div id="content">   
    
    <?php #get_template_part('slider', 'nivo'); ?>

	
