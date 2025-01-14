<?php  // 動的に出力するデータを取得
$photoId = block_value('photo');  // 画像IDを取得

// 画像URLを取得
$photoUrl = '';
if ($photoId) {
    // wp_get_attachment_image_src() を使って画像のURLを取得
    $photoData = wp_get_attachment_image_src($photoId, 'full'); // 'full' でフルサイズの画像を取得
    if ($photoData) {
        $photoUrl = $photoData[0]; // 画像URLを取得
    }
}

$presidentRoleAndName      = block_value('presidentRoleAndName');  // 役職 & 名前
$presidentLicense          = block_value('presidentLicense');  // 保有資格

// 経歴(『年度』と『内容』)の情報をまとめて配列に格納
$careerData = [];
for ($i = 1; $i <= 10; $i++) {
    $yearKey = "presidentCareerYear$i";
    $contentKey = "presidentCareerContent$i";

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


<!-- 社長 -->
<div class="member__president president">
  <div class="president__top">
    <?php if ($photoUrl): ?>
      <div class="president__img js-fadeInUp"><img src="<?php echo esc_url($photoUrl); ?>" alt="平田社長の写真"></div>
    <?php endif; ?>
    <div class="president__body js-fadeInUp">
      <?php if ($presidentRoleAndName): ?>
        <div class="president__name"><?php echo esc_html($presidentRoleAndName); ?></div>
      <?php endif; ?>
      <?php if ($presidentLicense): ?>
        <div class="president__license">
          <div class="president__license-title">保有資格 ： </div>
          <div class="president__license-items"><?php echo esc_html($presidentLicense); ?></div>
        </div>
      <?php endif; ?>
    </div>
  </div>
  <!-- 経歴表 -->
  <?php if (!empty($careerData)): ?>
    <table class="president__career-table table02 js-fadeInUp">
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
