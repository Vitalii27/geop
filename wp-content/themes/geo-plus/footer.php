<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package manicure
 */

?>

</main>

<?php $footer = get_option('footer'); ?>
<footer class="footer" id="footer">
    <div class="container-fluid">
        <div class="footer_container">
            <?php if (!empty($footer['footer-left'])) {
                ?>
                <div class="footer_left">
                    <p><?php echo $footer['footer-left']; ?></p>
                </div>
            <?php } ?>
            <div class="footer_right">
                <?php if (!empty($footer['footer-tel'])) {
                    ?>
                    <div class="footer_tel"><?php echo $footer['footer-tel']; ?></div>
                <?php } ?>
                <?php if (!empty($footer['footer-address'])) {
                    ?>
                    <div class="footer_address"><?php echo $footer['footer-address']; ?></div>
                <?php } ?>
                <?php if (!empty($footer['footer-email'])) {
                    ?>
                    <div class="footer_email"><?php echo $footer['footer-email']; ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>


</body>
</html>
