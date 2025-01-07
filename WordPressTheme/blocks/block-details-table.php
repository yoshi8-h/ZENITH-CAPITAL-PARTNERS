<?php

  // 各値を取得
  $worksPlace     = block_value('worksPlace');
  $worksScale     = block_value('worksScale');
  $worksProposal  = block_value('worksProposal');
  $worksContent   = block_value('worksContent');
  $worksResult    = block_value('worksResult');

  // 入力チェック（どれか一つでも値があれば true）
  $hasInfo = $worksPlace || $worksScale || $worksProposal || $worksContent || $worksResult;
?>


<!-- 詳細情報 (表 & タイトル) -->
<?php if ($hasInfo): // 入力がある場合のみ .info02 を表示 ?>
  <div class="works-contents__info info02">
    <div class="info02__title">詳細情報</div>
    <table class="info02__table table">
      <thead class="table__head">
        <tr>
          <th class="table__header">項目</th>
          <th class="table__header-body">内容</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($worksPlace): ?>
        <tr class="table__row">
          <td class="table__cell-head">所在・種別</td>
          <td class="table__cell-body"><?php echo $worksPlace; ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($worksScale): ?>
        <tr class="table__row">
          <td class="table__cell-head">規模</td>
          <td class="table__cell-body"><?php echo $worksScale; ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($worksProposal): ?>
        <tr class="table__row">
          <td class="table__cell-head">業務内容（提案内容）</td>
          <td class="table__cell-body"><?php echo $worksProposal; ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($worksContent): ?>
        <tr class="table__row">
          <td class="table__cell-head">業務実施内容</td>
          <td class="table__cell-body"><?php echo $worksContent; ?></td>
        </tr>
        <?php endif; ?>

        <?php if ($worksResult): ?>
        <tr class="table__row">
          <td class="table__cell-head">効果・結果</td>
          <td class="table__cell-body"><?php echo $worksResult; ?></td>
        </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>



<?php

// カスタム投稿メタにデータを保存
add_action('save_post', function($post_id) {
  // 投稿タイプが 'works' の場合のみ実行
  if (get_post_type($post_id) === 'works') {
      // 投稿のコンテンツを取得
      $post_content = get_post_field('post_content', $post_id);

      // ブロックデータを解析
      $blocks = parse_blocks($post_content);

      // デバッグ用: ブロックデータを出力
      var_dump($blocks); // ブロックの中身を確認する
      exit; // スクリプトを停止してデバッグ結果を確認

      // 必要なデータを抽出
      foreach ($blocks as $block) {
          if ($block['blockName'] === 'acf/block-details-table') { // GCBのブロックスラッグを指定
              $worksPlace = $block['attrs']['worksPlace'] ?? '';
              $worksProposal = $block['attrs']['worksProposal'] ?? '';

              // データを保存
              update_post_meta($post_id, 'worksPlace', $worksPlace);
              update_post_meta($post_id, 'worksProposal', $worksProposal);
          }
      }
  }
});

?>

