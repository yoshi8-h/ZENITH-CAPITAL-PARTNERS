<?php get_header(); ?>

  <main class="main">
    <!-- sub-fv -->
    <div class="sub-fv">
      <div class="sub-fv__inner">
        <picture class="sub-fv__bg">
          <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-contact.webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sub-fv_bg-contact-sp.webp" alt="">
        </picture>
        <div class="sub-fv__contents">
          <h2 class="sub-fv__title title">
            <div class="title__ja is-narrow">お問い合わせ</div>
            <div class="title__en">CONTACT</div>
          </h2>
          <p class="sub-fv__text">当社へのお問い合わせ・ご質問について、<br class="u-mobile">お気軽にお問い合わせください。</p>
        </div>
      </div>
    </div>

    <!-- contact-page セクション -->
    <section class="contact-page l-contact-page">
      <div class="contact-page__inner inner">
        <div class="contact-page__wrap">
          <!-- Form 画面 -->
          <div class="contact-page__form-section-wrap">
            <div class="contact-page__form-title title05">下記のフォームに必要事項ご入力の上、送信してください。</div>
            <div class="contact-page__form-wrap">
              <form class="contact-page__form form" novalidate>  <!-- form -->
                <div class="form__fields fields">
                  <div class="fields__item field">
                    <div class="field__head">
                      <label for="your-campaign" class="field__label">
                        <span class="field__label-require">必須</span>
                        <span class="field__label-text">お問い合わせ種別</span>
                      </label>
                    </div>
                    <div class="field__select-wrap">
                      <select class="field__select select js-form-input" name="your-type" id="your-type" required>
                        <option value="">選択してください。</option>
                        <option value="type1">不動産売却</option>
                        <option value="type2">事業継承</option>
                        <option value="type3">その他</option>
                      </select>
                    </div>
                  </div>
                  <div class="fields__item field">
                    <div class="field__head">
                      <label for="your-name-kanji" class="field__label">
                        <span class="field__label-require">必須</span>
                        <span class="field__label-text">お名前(漢字)</span>
                      </label>
                    </div>
                    <div class="field__item input">
                      <input
                        class="input__text js-form-input"
                        type="text"
                        name="your-name-kanji"
                        id="your-name-kanji"
                        placeholder="例：山田　太郎"
                        required
                      >
                    </div>
                  </div>
                  <div class="fields__item field">
                    <div class="field__head">
                      <label for="your-name-kana" class="field__label">
                        <span class="field__label-require">必須</span>
                        <span class="field__label-text">お名前(カナ)</span>
                      </label>
                    </div>
                    <div class="field__item input">
                      <input
                        class="input__text js-form-input"
                        type="text"
                        name="your-name-kana"
                        id="your-name-kana"
                        placeholder="例：ヤマダ　タロウ"
                        required
                      >
                    </div>
                  </div>
                  <div class="fields__item field">
                    <div class="field__head">
                      <label for="your-company" class="field__label">
                        <span class="field__label-any">任意</span>
                        <span class="field__label-text">社名</span>
                      </label>
                    </div>
                    <div class="field__item input">
                      <input
                        class="input__text js-form-input"
                        type="text"
                        name="your-company"
                        id="your-company"
                        placeholder="例：ゼニス・キャピタル・パートナーズ株式会社"
                      >
                    </div>
                  </div>
                  <div class="fields__item field">
                    <div class="field__head">
                      <label for="your-email" class="field__label">
                        <span class="field__label-require">必須</span>
                        <span class="field__label-text">メールアドレス</span>
                      </label>
                    </div>
                    <div class="field__item input">
                      <input
                        class="input__text js-form-input"
                        type="email"
                        name="your-email"
                        id="your-email"
                        placeholder="例：example@example.com"
                        required
                      >
                    </div>
                  </div>
                  <div class="fields__item field">
                    <div class="field__head">
                      <label for="your-email-confirm" class="field__label">
                        <span class="field__label-require">必須</span>
                        <span class="field__label-text">確認用メールアドレス</span>
                      </label>
                    </div>
                    <div class="field__item input">
                      <input
                        class="input__text js-form-input"
                        type="email"
                        name="your-email-confirm"
                        id="your-email-confirm"
                        placeholder="例：example@example.com"
                        required
                      >
                    </div>
                  </div>
                  <div class="fields__item field">
                    <div class="field__head">
                      <label for="your-tel" class="field__label">
                        <span class="field__label-any">任意</span>
                        <span class="field__label-text">電話番号</span>
                      </label>
                    </div>
                    <div class="field__item input">
                      <input
                        class="input__text js-form-input"
                        type="tel"
                        name="your-tel"
                        id="your-tel"
                        placeholder="例：0300000000"
                      >
                    </div>
                  </div>
                  <div class="fields__item field is-textarea">  <!-- 『テキストエリア』の項目 -->
                    <div class="field__head is-textarea">
                      <label for="your-message" class="field__label">
                        <span class="field__label-require">必須</span>
                        <span class="field__label-text">お問合せ内容</span>
                      </label>
                    </div>
                    <div class="field__item is-textarea">
                      <textarea
                        id="your-message"
                        class="field__textarea textarea js-form-input"
                        name="your-message"
                        cols="30"
                        rows="7"
                        placeholder="こちらにお問い合わせの内容を入力してください。"
                        required
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="form__sendbtn-wrap">
                  <button type="submit" value="submit" class="form__sendbtn btn2">
                    <div class="btn2__text">実績一覧に戻る</div>
                    <div class="btn2__arrow"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/btn2-arrow-white.webp" alt="→"></div>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main>

<?php get_footer(); ?>