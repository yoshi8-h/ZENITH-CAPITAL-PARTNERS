<?php
  // 各値を取得
  $pattern05ImageID = block_value('pattern05Image'); // 画像ID
  $pattern05Text    = block_value('pattern05Text') ?: ''; // テキスト（未定義時は空文字）

  // 入力チェック
  $hasImage = !empty($pattern05ImageID); // 画像が入力されているか
  $hasText  = !empty($pattern05Text);    // テキストが入力されているか

  // 添付ファイルIDからURLを取得
  $pattern05ImageUrl = $hasImage ? wp_get_attachment_url($pattern05ImageID) : ''; // 画像URL
?>


<!-- 画像パターン⑤ (画像 縦1枚) -->
<?php if ($hasImage): // 画像がある場合のみ .images05 を表示 ?>
  <div class="works-contents__images-area images05">
    <div class="images05__contents">
      <div class="images05__contents-item contents05">
        <div class="contents05__img">
          <img src="<?php echo esc_url($pattern05ImageUrl); ?>" alt="">
        </div>
        <?php if ($hasText): // テキストがある場合のみ表示 ?>
          <p class="contents05__text"><?php echo $pattern05Text; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
