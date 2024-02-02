<footer class="footer" id="footer">
  <div class="footer__inner">
    <div class="footer__header">
      <div class="footer__logo logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img width="200" height="47" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo/logo.png" alt="TOMORROW COMPANY" decoding="auto" loading="lazy">
        </a>
      </div>
      <div class="footer-contact js-fadein">
        <div class="footer-contact__header">
          <div class="footer-contact__lead _en js-reveal" data-reveal>
            Contact
          </div>
          <a href="<?php echo esc_url(home_url("contact")); ?>" class="button-round">
            <div class="button-round__icon">
              <img width="200" height="47" src="<?php echo get_template_directory_uri(); ?>/dist/images/icon/icon-mail-brown.png" alt="contact" decoding="auto" loading="lazy">
            </div>
          </a>
        </div>
        <div class="footer-contact__body">
          <p class="footer-contact__text _serif">院内・企業内保育園運営についてお気軽にご相談ください</p>
          <a href="tel:0977-80-7575" class="footer-contact__tel _serif"><span class="_serif">TEL</span>　0977-80-7575</a>
        </div>
      </div>
    </div>
    <?php
    get_template_part("template-part/component/fnav");
    ?>
    <a href="#" class="privacy-policy">プライバシーポリシー</a>
    <div class="copyright">©2023 tomorrow company</div>
  </div>
</footer>

</div><!-- scroll-ccontent -->
</div><!-- scroll-container -->

<?php wp_footer(); ?>
</body>

</html>