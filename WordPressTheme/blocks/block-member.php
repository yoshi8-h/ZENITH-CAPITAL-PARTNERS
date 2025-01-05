<?php  // 動的に出力するデータを取得
$memberRole      = block_value('memberRole');  // 役職
$memberName      = block_value('memberName');  // 名前
$memberLicense   = block_value('memberLicense');  // 保有資格

// 経歴(『年度』と『内容』)の情報をまとめて配列に格納
$careerData = [];
for ($i = 1; $i <= 10; $i++) {
    $yearKey = "memberCareerYear$i";
    $contentKey = "memberCareerContent$i";

    // 値を取得
    $year = block_value($yearKey);
    $content = block_value($contentKey);

    // 条件を厳密化
    if (!empty($year) && !empty($content)) {
        $careerData[] = [
            'year' => $year,
            'content' => $content
        ];
    }
}
?>


<div class="member__member main-member">
  <div class="main-member__info">
    <div class="main-member__title">
      <?php if ($memberRole): ?>
        <div class="main-member__role"><?php echo esc_html($memberRole); ?></div>
      <?php endif; ?>
      <?php if ($memberName): ?>
        <div class="main-member__name"><?php echo esc_html($memberName); ?></div>
      <?php endif; ?>
    </div>
    <?php if ($memberLicense): ?>
      <div class="main-member__license">
        <div class="main-member__license-title">保有資格 ： </div>
        <div class="main-member__license-items"><?php echo esc_html($memberLicense); ?></div>
      </div>
    <?php endif; ?>
  </div>
  <!-- 経歴表 -->
  <?php if (!empty($careerData)): ?>
    <table class="main-member__table table02">
      <thead class="table02__head">
        <tr>
          <th class="table02__header">項目</th>
          <th class="table02__header-body">内容</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($careerData as $career): ?>
          <tr class="table02__row">
            <td class="table02__cell-head"><?php echo esc_html($career['year']); ?></td>
            <td class="table02__cell-body"><?php echo $career['content']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php endif; ?>
</div>
