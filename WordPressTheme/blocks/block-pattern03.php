<?php
  // 各値を取得
  $pattern03ImageVerticalID         = block_value('pattern03ImageVertical'); // 縦画像ID
  $pattern03TextVertical            = block_value('pattern03TextVertical') ?: ''; // 縦画像説明文
  $pattern03ImageHorizontalTopID    = block_value('pattern03ImageHorizontalTop'); // 右上画像ID
  $pattern03TextHorizontalTop       = block_value('pattern03TextHorizontalTop') ?: ''; // 右上説明文
  $pattern03ImageHorizontalBottomID = block_value('pattern03ImageHorizontalBottom'); // 右下画像ID
  $pattern03TextHorizontalBottom    = block_value('pattern03TextHorizontalBottom') ?: ''; // 右下説明文

  // 入力チェック
  $hasVerticalImage   = !empty($pattern03ImageVerticalID); // 縦画像が設定されているか
  $hasHorizontalTop   = !empty($pattern03ImageHorizontalTopID); // 右上画像が設定されているか
  $hasHorizontalBottom = !empty($pattern03ImageHorizontalBottomID); // 右下画像が設定されているか

  // 添付ファイルIDからURLを取得
  $pattern03ImageVerticalUrl         = $hasVerticalImage ? wp_get_attachment_url($pattern03ImageVerticalID) : '';
  $pattern03ImageHorizontalTopUrl    = $hasHorizontalTop ? wp_get_attachment_url($pattern03ImageHorizontalTopID) : '';
  $pattern03ImageHorizontalBottomUrl = $hasHorizontalBottom ? wp_get_attachment_url($pattern03ImageHorizontalBottomID) : '';
?>


<?php if ($hasVerticalImage && $hasHorizontalTop && $hasHorizontalBottom): // すべての画像が設定されている場合のみ表示 ?>
  <!-- 画像パターン③ (画像 縦1枚、横2枚) -->
  <div class="works-contents__images-area images03">
    <div class="images03__contents">

      <!-- 縦画像 -->
      <div class="images03__contents-item contents03 contents03--vertical">
        <div class="contents03__img">
          <img src="<?php echo esc_url($pattern03ImageVerticalUrl); ?>" alt="">
        </div>
        <?php if (!empty($pattern03TextVertical)): // 説明文がある場合のみ表示 ?>
          <p class="contents03__text"><?php echo $pattern03TextVertical; ?></p>
        <?php endif; ?>
      </div>

      <!-- 右上画像 -->
      <div class="images03__contents-item contents03 contents03--horizontal-top">
        <div class="contents03__img">
          <img src="<?php echo esc_url($pattern03ImageHorizontalTopUrl); ?>" alt="">
        </div>
        <?php if (!empty($pattern03TextHorizontalTop)): // 説明文がある場合のみ表示 ?>
          <p class="contents03__text"><?php echo $pattern03TextHorizontalTop; ?></p>
        <?php endif; ?>
      </div>

      <!-- 右下画像 -->
      <div class="images03__contents-item contents03 contents03--horizontal-bottom">
        <div class="contents03__img">
          <img src="<?php echo esc_url($pattern03ImageHorizontalBottomUrl); ?>" alt="">
        </div>
        <?php if (!empty($pattern03TextHorizontalBottom)): // 説明文がある場合のみ表示 ?>
          <p class="contents03__text"><?php echo $pattern03TextHorizontalBottom; ?></p>
        <?php endif; ?>
      </div>

    </div>
  </div>
<?php endif; ?>
