<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-solution.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-solution-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja">採用情報</div>
            <div class="title__en">RECRUIT</div>
          </h2>
          <p class="sub-fv__text">当社の採用情報をご確認いただけます。</p>
        </div>
      </div>
    </div>

    <!-- recruit セクション -->
    <section class="recruit l-recruit">
      <div class="recruit__inner inner">
        <div class="recruit__contents">
          <!-- 募集要項 (表) -->
          <table class="recruit__table table">
            <thead class="table__head">
              <tr>
                <th class="table__header">項目</th>
                <th class="table__header-body">内容</th>
              </tr>
            </thead>
            <tbody>
              <tr class="table__row">
                <td class="table__cell-head">職種</td>
                <td class="table__cell-body">不動産コンサルタント</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">雇用形態</td>
                <td class="table__cell-body">正社員</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">業務内容</td>
                <td class="table__cell-body">
                  不動産に関する総合的なサービス業務を担当していただきます。<br
                  >事業会社のお客様が保有される不動産に関する調査、有効活用の提案、売却のサポート等の業務や、投資ファンドのお客様が保有される不動産の管理・運営(アセットマネジメント業務)、不動産投資家(大家さん)向けの投資用不動産の紹介業務などです。
                </td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">応募資格</td>
                <td class="table__cell-body">高卒以上（不動産コンサルティング、調査、売買仲介、管理・運営業務の経験者）</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">資格</td>
                <td class="table__cell-body">宅地建物取引士、不動産鑑定士の資格保有者、事業承継、M&Aの実務経験者優遇</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">勤務地</td>
                <td class="table__cell-body">東京都千代田区</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">転勤</td>
                <td class="table__cell-body">なし</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">給与形態</td>
                <td class="table__cell-body">年俸制</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">諸手当</td>
                <td class="table__cell-body">通勤手当</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">定期昇給</td>
                <td class="table__cell-body">年1回</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">保険</td>
                <td class="table__cell-body">健康保険、厚生年金保険、雇用保険、労災保険　完備</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">応募方法</td>
                <td class="table__cell-body">書類選考の上、合格者には面接の設定をいたします。</td>
              </tr>
              <tr class="table__row">
                <td class="table__cell-head">応募先</td>
                <td class="table__cell-body">
                  〒100-0006　東京都千代田区有楽町１丁目9番4号　蚕糸会館７階<br
                  >ゼニス・キャピタル・パートナーズ株式会社 　管理部<br
                  >メール：〇〇〇〇〇〇
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

  </main>

<?php get_footer(); ?>
