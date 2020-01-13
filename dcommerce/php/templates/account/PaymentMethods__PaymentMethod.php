<div class="ecp-card" data-ecp-id="{message:payment_method_id}">
    <dl class="ecp-payment-method">
        <dt>{message:PaymentMethods/CardDescription_template}</dt>
        <dd data-ecp-handle="name_on_card">{message:name_on_card}</dd>
        <dd>{message:PaymentMethods/Expires} {message:expiration_month}/{message:expiration_year}</dd>
    </dl>
    <div class="ecp-form-linkset">
        <a href="#" data-ecp-action="replace">{message:PaymentMethods/ReplaceLink}</a>
        <a href="#" data-ecp-handle="delete_link" data-ecp-action="delete">{message:PaymentMethods/DeleteLink}</a>
    </div>
    <div class="ecp-callout-footer" data-ecp-handle="club_message">{message:PaymentMethods/UsedByClub}</div>
</div>