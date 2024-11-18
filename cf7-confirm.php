<!-- * Form Contact Start -->
<div class="p-form">
  <dl class="p-form__list">
    <!-- * Checkbox -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label>
          お問い合わせの種類（チェックボックス）
        </label>
      </dt>
      <dd class="p-form__description">[multiform your-checkbox id:f-checkbox]</dd>
    </div>
    <!-- * Name -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label>
          お名前<sup class="p-form__required">*</sup>
        </label>
      </dt>
      <dd class="p-form__description">
        [multiform your-name id:f-name]
      </dd>
    </div>
    <!-- * E-mail -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label>
          メールアドレス<sup class="p-form__required">*</sup>
        </label>
      </dt>
      <dd class="p-form__description">
        [multiform your-email id:f-mail]
      </dd>
    </div>
    <!-- * Telephone -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label>
          電話番号<sup class="p-form__required">*</sup>
        </label>
      </dt>
      <dd class="p-form__description">
        [multiform your-tel id:f-tel]
      </dd>
    </div>
    <!-- * Textarea -->
    <div class="p-form__item">
      <dt class="p-form__term">
        <label>
          お問い合わせ内容<sup class="p-form__required">*</sup>
        </label>
      </dt>
      <dd class="p-form__description">[multiform your-message id:f-textarea]</dd>
    </div>
  </dl>

  <div class="p-form__button">
    <!-- * Previous -->
    <div class="p-form__previous">
      <div class="c-button-normal">[previous "入力内容を修正する"]</div>
    </div>
    <!-- * Submit -->
    <div class="p-form__submit">
      <div class="c-button-normal">[submit "送信する"]</div>
      [multistep your-multistep02 last_step send_email "http://localhost:3000/contact/confirm/thanks/"]
      <!-- [multistep your-multistep02 last_step send_email "hogehoge/contact/confirm/thanks/"] -->
    </div>
  </div>
</div>
<!-- * Form Contact End -->