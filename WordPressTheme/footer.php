  <!-- TOPへ戻るボタン -->
  <a href="#" class="top-btn js-top-btn">
    <div class="top-btn__wrap">
      <div class="top-btn__arrow">
        <svg class="top-btn__arrow-sp" xmlns="http://www.w3.org/2000/svg" width="8" height="30" viewBox="0 0 8 30" fill="none">
          <path d="M7 29L7 1L1 8" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <svg class="top-btn__arrow-pc" xmlns="http://www.w3.org/2000/svg" width="8" height="42" viewBox="0 0 8 42" fill="none">
          <path d="M7 41L7 1L1 8" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </a>

  <!-- footer -->
  <footer class="footer l-footer <?php echo is_404() ? 'l-footer--404' : ''; ?>">
    <small class="footer__copyright">Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
