<div class="grid-x account">
<div class="cell ecp-list-item" data-ecp-handle="payment_method" data-ecp-id="{message:payment_method_id}">
  <div class="ecp-columns ecp-clearfix">
    <div class="ecp-columns-left">
      <input type="radio" name="payment_method_id" value="{message:payment_method_id}">
    </div>
    <div class="ecp-columns-right">
      <dl class="ecp-payment-method">
        <dt>{message:CreateClubSubscription/CardDescription_template}</dt>
        <dd data-ecp-handle="name_on_card">{message:name_on_card}</dd>
        <dd>{message:CreateClubSubscription/Expires} {message:expiration_month}/{message:expiration_year}</dd>
      </dl>
      <div>
        <div class="ecp-callout-footer" data-ecp-handle="club_message">{message:CreateClubSubscription/PaymentMethodUsedByClub}</div>
      </div>
    </div>
  </div>
</div>
</div>