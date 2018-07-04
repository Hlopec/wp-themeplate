<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="UTF-8">
        <title>Themeplate</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="MobileOptimized" content="320"/>
        <meta name="HandheldFriendly" content="true"/>
        <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/fav.png?v=0">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <header>

        </header>
