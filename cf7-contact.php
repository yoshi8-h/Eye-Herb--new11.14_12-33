<!-- ! 確認画面の遷移は案件に合わせて選択すること -->

<!-- * Form Contact Start -->
<div class="p-form">
  <dl class="p-form__list">
    <!-- * Checkbox -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label for="f-checkbox">
          お問い合わせ種別
        </label>
      </dt>
      <dd class="p-form__description">
        [checkbox* your-checkbox id:f-checkbox use_label_element "予約について" "当サロンについて" "その他"]
      </dd>
    </div>
    <!-- * Name -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label for="f-name">
          お名前<sup class="p-form__required">*</sup>
        </label>
      </dt>
      <dd class="p-form__description">
        [text* your-name id:f-name placeholder "例）山田　花子"]
      </dd>
    </div>
    <!-- * E-mail -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label for="f-mail">
          メールアドレス<sup class="p-form__required">*</sup>
        </label>
      </dt>
      <dd class="p-form__description">
        [email* your-email id:f-mail placeholder "例）yourmail@sample.jp"]
      </dd>
    </div>
    <!-- * Telephone -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label for="f-tel">
          電話番号<sup class="p-form__required">*</sup>
        </label>
      </dt>
      <dd class="p-form__description">
        [tel* your-tel id:f-tel placeholder "例）03-6416-4229"]
      </dd>
    </div>
    <!-- * Textarea -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label for="f-textarea">
          お問い合わせ内容<sup class="p-form__required">*</sup>
        </label>
      </dt>
      <dd class="p-form__description">[textarea* your-message id:f-textarea placeholder "お気軽にご相談ください。"]</dd>
    </div>
  </dl>
  <!-- * Acceptance -->
  <div class="p-form__policy">
    [acceptance your-acceptance]
    <a href="/privacy-policy/" target="_blank" rel="noreferrer noopener">プライバシーポリシー</a>に同意して進む
    [/acceptance]
  </div>

  <!-- * To Confirm -->
  <div class="p-form__submit">
    <div class="c-button-normal">[submit "確認する"]</div>
    [multistep your-multistep01 first_step "http://localhost:3000/contact/confirm/"]
    <!-- [multistep your-multistep01 first_step "hogehoge/contact/confirm/"] -->
  </div>
</div>
<!-- * Form Contact End -->