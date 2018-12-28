<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manicure
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>


    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="https://gmpg.org/xfn/11">


    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php $header = get_option('header'); ?>


<header class="header js-header" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="header_container">
                <div class="header_logo">
                    <?php if (!empty($header['header-logo'])) {
                        ?>
                        <a href="<?php echo get_home_url(); ?>" class="header_link"> <img
                                    src="<?php echo $header['header-logo']; ?>"
                                    alt="logo"
                                    class="header_img">
                        </a>
                    <?php } ?>
                </div>
                <div class="header_nav-wrap">
                    <?php if (!empty($header['header_nav-text'])) { ?>
                        <p><?php echo $header['header_nav-text']; ?></p>
                    <?php } ?>
                    <?php get_template_part('./template-parts/blocks/swipe-menu'); ?>   <?php get_template_part('./template-parts/blocks/menu-btn'); ?>
                </div>

                <div class="header_tel">
                    <?php if (!empty($header['header_top-text'])) {
                        ?>
                        <p><?php echo $header['header_top-text']; ?></p>
                    <?php } ?>
                    <div class="header_btn btn">
                        <a href="#pop-up-callback" class="js-pop-up header_link">Оставить заявку</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</header>

<main class="main-content">
