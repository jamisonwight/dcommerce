<div class="grid-x ecp-component ecp_PaymentMethods">
  <h1>{message:PaymentMethods/Title}</h1>
  <form class="cell medium-8 medium-offset-2 ecp-form">
        <button class="ecp-continue" data-ecp-action="add">
            {message:PaymentMethods/AddPaymentMethodButton}
        </button>
        <div class="ecp-x-list" data-ecp-handle="payment_methods">
            <!-- | PaymentMethods__PaymentMethod template | -->
        </div>
        <button class="ecp-secondary" data-ecp-action="load-dashboard">{message:PaymentMethods/HomeButton}</button>
  </form>
</div>