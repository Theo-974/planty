</main>
</div>
<footer id="footer" role="contentinfo">
<div class="footer-background-image">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/group8.png" />
  </div>
  <div id="copyright">
    &copy;
    <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?>
    <?php echo esc_html(get_bloginfo('name')); ?>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>