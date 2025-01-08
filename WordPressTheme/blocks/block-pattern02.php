<?php
  // 各値を取得
  $pattern02ImageLeftID   = block_value('pattern02ImageLeft'); // 左側画像ID
  $pattern02ImageRightID  = block_value('pattern02ImageRight'); // 右側画像ID
  $pattern02TextLeft      = block_value('pattern02TextLeft') ?: ''; // 左側テキスト
  $pattern02TextRight     = block_value('pattern02TextRight') ?: ''; // 右側テキスト

  // 入力チェック
  $hasLeftImage  = !empty($pattern02ImageLeftID); // 左側画像が設定されているか
  $hasRightImage = !empty($pattern02ImageRightID); // 右側画像が設定されているか

  // 添付ファイルIDからURLを取得
  $pattern02ImageLeftUrl  = $hasLeftImage ? wp_get_attachment_url($pattern02ImageLeftID) : ''; // 左側画像URL
  $pattern02ImageRightUrl = $hasRightImage ? wp_get_attachment_url($pattern02ImageRightID) : ''; // 右側画像URL
?>

<?php if ($hasLeftImage && $hasRightImage): // 両方の画像が設定されている場合のみ表示 ?>
  <!-- 画像パターン② (画像 横2枚) -->
  <div class="works-contents__images-area images02">
    <div class="images02__contents">
      <!-- 左側画像とテキスト -->
      <div class="images02__contents-item contents02">
        <div class="contents02__img">
          <img src="<?php echo esc_url($pattern02ImageLeftUrl); ?>" alt="">
        </div>
        <?php if (!empty($pattern02TextLeft)): // 左側テキストが設定されている場合のみ表示 ?>
          <p class="contents02__text"><?php echo $pattern02TextLeft; ?></p>
        <?php endif; ?>
      </div>

      <!-- 右側画像とテキスト -->
      <div class="images02__contents-item contents02">
        <div class="contents02__img">
          <img src="<?php echo esc_url($pattern02ImageRightUrl); ?>" alt="">
        </div>
        <?php if (!empty($pattern02TextRight)): // 右側テキストが設定されている場合のみ表示 ?>
          <p class="contents02__text"><?php echo $pattern02TextRight; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
