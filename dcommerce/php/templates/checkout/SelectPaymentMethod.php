<div class="grid-x ecp-component ecp_SelectPaymentMethod">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:SelectPaymentMethod/Title}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | Checkout__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:SelectPaymentMethod/Summary}</p>
        <form class="ecp-form">
            <div class="ecp-x-list" data-ecp-handle="payment_methods">
                <!-- | SelectPaymentMethod__PaymentMethod template | -->
            </div>
            <p><a href="#" class="ecp-option" data-ecp-action="add">{message:SelectPaymentMethod/AddPaymentMethodLink}</a>
            </p>
        </form>
    </div>
</div>