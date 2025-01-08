<?php
  // 各値を取得
  $pattern04ImageLeftID   = block_value('pattern04ImageLeft'); // 左側画像ID
  $pattern04ImageRightID  = block_value('pattern04ImageRight'); // 右側画像ID
  $pattern04TextLeft      = block_value('pattern04TextLeft') ?: ''; // 左側テキスト
  $pattern04TextRight     = block_value('pattern04TextRight') ?: ''; // 右側テキスト

  // 入力チェック
  $hasLeftImage  = !empty($pattern04ImageLeftID); // 左側画像が設定されているか
  $hasRightImage = !empty($pattern04ImageRightID); // 右側画像が設定されているか

  // 添付ファイルIDからURLを取得
  $pattern04ImageLeftUrl  = $hasLeftImage ? wp_get_attachment_url($pattern04ImageLeftID) : ''; // 左側画像URL
  $pattern04ImageRightUrl = $hasRightImage ? wp_get_attachment_url($pattern04ImageRightID) : ''; // 右側画像URL
?>

<?php if ($hasLeftImage && $hasRightImage): // 両方の画像が設定されている場合のみ表示 ?>
  <!-- 画像パターン④ (画像 縦2枚) -->
  <div class="works-contents__images-area images04">
    <div class="images04__contents">
      <!-- 左側画像とテキスト -->
      <div class="images04__contents-item contents04">
        <div class="contents04__img">
          <img src="<?php echo esc_url($pattern04ImageLeftUrl); ?>" alt="">
        </div>
        <?php if (!empty($pattern04TextLeft)): // 左側テキストが設定されている場合のみ表示 ?>
          <p class="contents04__text"><?php echo $pattern04TextLeft; ?></p>
        <?php endif; ?>
      </div>

      <!-- 右側画像とテキスト -->
      <div class="images04__contents-item contents04">
        <div class="contents04__img">
          <img src="<?php echo esc_url($pattern04ImageRightUrl); ?>" alt="">
        </div>
        <?php if (!empty($pattern04TextRight)): // 右側テキストが設定されている場合のみ表示 ?>
          <p class="contents04__text"><?php echo $pattern04TextRight; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
