<?php
  // 各値を取得
  $pattern01ImageID = block_value('pattern01Image'); // 画像ID
  $pattern01Text    = block_value('pattern01Text') ?: ''; // テキスト（未定義時は空文字）

  // 入力チェック
  $hasImage = !empty($pattern01ImageID); // 画像が入力されているか
  $hasText  = !empty($pattern01Text);    // テキストが入力されているか

  // 添付ファイルIDからURLを取得
  $pattern01ImageUrl = $hasImage ? wp_get_attachment_url($pattern01ImageID) : ''; // 画像URL
?>


<!-- 画像パターン① (画像 横1枚) -->
<?php if ($hasImage): // 画像がある場合のみ .images01 を表示 ?>
  <div class="works-contents__images-area images01">
    <div class="images01__contents">
      <div class="images01__contents-item contents01">
        <div class="contents01__img">
          <img src="<?php echo esc_url($pattern01ImageUrl); ?>" alt="">
        </div>
        <?php if ($hasText): // テキストがある場合のみ表示 ?>
          <p class="contents01__text"><?php echo $pattern01Text; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
