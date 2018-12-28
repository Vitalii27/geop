<?php
/**
 * Template Name: Home Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package geo-plus
 */

get_header(); ?>


<?php get_template_part( './template-parts/sections/hero' ); ?>
<?php get_template_part( './template-parts/sections/about' ); ?>
<?php get_template_part( './template-parts/sections/license' ); ?>
<?php get_template_part( './template-parts/sections/services' ); ?>
<?php get_template_part( './template-parts/sections/how-order' ); ?>
<?php get_template_part( './template-parts/sections/services2' ); ?>
<?php get_template_part( './template-parts/sections/price' ); ?>
<?php get_template_part( './template-parts/sections/advantages' ); ?>
<?php get_template_part( './template-parts/sections/question' ); ?>
<?php get_template_part( './template-parts/sections/map' ); ?>

<?php get_footer();?>
<?php get_template_part( './template-parts/blocks/popup' ); ?>
<?php get_template_part( './template-parts/blocks/alert' ); ?>