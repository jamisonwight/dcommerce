<div class="grid-x ecp-component ecp_EditClubSubscription">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:EditClubSubscription/Title}</h1>
        <h3>{message:club_tier_name}</h3>
        <div class="ecp-html-content" data-ecp-handle="pickup_message">
            {message:EditClubSubscription/PickupSummaryHTML_template}</div>
        <div class="ecp-html-content" data-ecp-handle="shipment_message">
            {message:EditClubSubscription/ShipmentSummaryHTML_template}</div>
        <form class="ecp-form grid-x grid-margin-y">
            <div class="cell ecp-card">
                <h4>{message:EditClubSubscription/ShippingAddressesSubtitle}</h4>
                <div data-ecp-handle="shipping_addresses">
                    <!-- | EditClubSubscription__Address template | -->
                </div>
                <div><a href="#" class="ecp-option"
                        data-ecp-action="add-shipping-address">{message:EditClubSubscription/AddShippingAddressLink}</a>
                </div>
            </div>
            <div class="cell ecp-card">
                <h4>{message:EditClubSubscription/PaymentMethodsSubtitle}</h4>
                <div data-ecp-handle="payment_methods">
                    <!-- | SelectPaymentMethod__PaymentMethod template | -->
                </div>
                <div><a href="#" class="ecp-option"
                        data-ecp-action="add-payment-method">{message:EditClubSubscription/AddPaymentMethodLink}</a></div>
            </div>
            <div class="cell ecp-form-buttonset-2 ecp-clearfix">
                <div class="grid-x grid-margin-x">
                    <div class="cell medium-6">
                        <button class="ecp-secondary" data-ecp-action="cancel">{message:EditClubSubscription/CancelButton}</button>
                    </div>
                    <div class="cell medium-6">
                        <button data-ecp-action="save">{message:EditClubSubscription/SaveButton}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>