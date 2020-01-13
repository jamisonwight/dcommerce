<div class="ecp-card cell medium-8 medium-offset-2" data-ecp-id="{message:subscription_id}">
    <div class="ecp-section">
        <a href="#" class="ecp-section-menu" data-ecp-action="edit">{message:ClubSubscriptions/EditLink}</a>
        <h4>{message:ClubSubscriptions/ShipsToTitle}</h4>
        <dl class="ecp-address">
            <dt>{message:shipping_first_name} {message:shipping_last_name}</dt>
            <dd data-ecp-handle="company_name">{message:shipping_company_name}</dd>
            <dd>{message:shipping_address_line_1}</dd>
            <dd data-ecp-handle="address_line_2">{message:shipping_address_line_2}</dd>
            <dd>{message:shipping_city}, <span data-ecp-handle="state_code">{message:shipping_state_code}</span><span
                    data-ecp-handle="region">{message:shipping_region}</span> {message:shipping_postal_code}<span
                    data-ecp-handle="zip_extension">-{message:shipping_zip_extension}</span></dd>
            <dd>{message:shipping_country_name}</dd>
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