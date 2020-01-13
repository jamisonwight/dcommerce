<div class="ecp-card cell medium-8 medium-offset-2" data-ecp-id="{message:subscription_id}">
    <div class="ecp-section">
        <a href="#" class="ecp-section-menu" data-ecp-action="edit">{message:ClubSubscriptions/EditLink}</a>
        <h4>{message:ClubSubscriptions/PickupTitle}</h4>
        <dl class="ecp-address">
            <dt>{message:ClubSubscriptions/PickupFor} {message:shipping_first_name} {message:shipping_last_name}</dt>
            <dd data-ecp-handle="phone">{message:ClubSubscriptions/Phone} {message:shipping_phone}</dd>
        </dl>
    </div>
    <div class="ecp-section">
        <h4>{message:ClubSubscriptions/PaymentMethodTitle}</h4>
        <dl class="ecp-payment-method">
            <dt>{message:ClubSubscriptions/CardDescription_template}</dt>
            <dd data-ecp-handle="name_on_card">{message:payment_method_name_on_card}</dd>
            <dd>{message:ClubSubscriptions/Expires}
                {message:payment_method_expiration_month}/{message:payment_method_expiration_year}</dd>
        </dl>
        <div class="ecp-callout-box" data-ecp-handle="suspend_message">{message:ClubSubscriptions/Suspended_template}
        </div>
        <div class="ecp-callout-box" data-ecp-handle="hold_message">{message:ClubSubscriptions/Hold_template}</div>
    </div>
</div>