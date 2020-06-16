<?php
    $telephone1 = get_field('telephone1');
    $telephone2 = get_field('telephone2');
    $email = get_field('e-mail');
    $address = get_field('address');
?>

</div>

<footer class="footer">
  <div class="footer-left">
    <div class="social-icons">
      <div class="icon-container">
        <a href="https://www.facebook.com/Cotswold-Hybrid-Organs-107668987427276">
          <img src="<?php bloginfo('template_url'); ?>/img/fb_icon.svg" alt="Facebook">
        </a>
      </div>
      <div class="icon-container">
        <a href="https://www.twitter.com">
          <img src="<?php bloginfo('template_url'); ?>/img/twitter_icon.svg" alt="Facebook">
        </a>
      </div>
    </div>
    <p class="telephone">
      Tel: <span class="tel-number"><?php echo $telephone1; ?></span> | <span class="tel-number"><?php echo $telephone2; ?></span> </p>
    <p>E-Mail: <?php echo $email; ?></p>
  </div>
  <div class="footer-right">
    <p><?php echo $address; ?></p>
  </div>
</footer>

<?php wp_footer();?>
</body>
</html>