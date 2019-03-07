<div class="grid-x account account_Dashboard">
    <div class="ecp-component ecp_Dashboard">
        <h1>{message:Dashboard/Title}</h1>
        <p><strong>{message:Dashboard/Greeting} {message:first_name} {message:last_name}</strong></p>
        <p class="ecp-summary">{message:Dashboard/Summary}</p>
        <div class="ecp-callout-box" data-ecp-handle="reservation_message">{message:Dashboard/ReservationMessage}</div>
        <ul class="ecp-item-list">
            <li data-ecp-handle="reservations_link"><a href="#" data-ecp-action="load-reservations">{message:Dashboard/ReservationsLink}</a></li>
            <li data-ecp-handle="subscriptions_link"><a href="#" data-ecp-action="load-subscriptions">{message:Dashboard/ClubSubscriptionsLink}</a></li>
            <li><a href="#" data-ecp-action="load-editprofile">{message:Dashboard/ProfileLink}</a></li>
            <li data-ecp-handle="create_billing_address_link"><a href="#" data-ecp-action="load-createbillingaddress">{message:Dashboard/CreateBillingAddressLink}</a></li>
            <li data-ecp-handle="edit_billing_address_link"><a href="#" data-ecp-action="load-editbillingaddress">{message:Dashboard/EditBillingAddressLink}</a></li>
            <li data-ecp-handle="create_shipping_address_link"><a href="#" data-ecp-action="load-createshippingaddress">{message:Dashboard/CreateShippingAddressLink}</a></li>
            <li data-ecp-handle="shipping_addresses_link"><a href="#" data-ecp-action="load-shippingaddresses">{message:Dashboard/ShippingAddressesLink}</a></li>
            <li data-ecp-handle="create_payment_method_link"><a href="#" data-ecp-action="load-createpaymentmethod">{message:Dashboard/CreatePaymentMethodLink}</a></li>
            <li data-ecp-handle="payment_methods_link"><a href="#" data-ecp-action="load-paymentmethods">{message:Dashboard/PaymentMethodsLink}</a></li>
            <li data-ecp-handle="order_history_link"><a href="#" data-ecp-action="load-orderhistory">{message:Dashboard/OrderHistoryLink}</a></li>
            <li><a href="#" data-ecp-action="load-changepassword">{message:Dashboard/ChangePasswordLink}</a></li>
            <li><a href="#" data-ecp-action="load-logout">{message:Dashboard/LogoutLink}</a></li>
        </ul>
    </div>
</div>