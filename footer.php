<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kurtsimmonsio
 */

?>
<?php
global$template;

if (basename($template)=='front-page.php'): ?>
<footer class="footer"></footer>

<?php else: ?>
<footer class="footer"></footer>

<?php endif; ?>
<?php wp_footer();?>
</body>
</html>
