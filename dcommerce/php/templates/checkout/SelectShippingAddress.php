<div class="grid-x checkout checkout_SelectShippingAddress">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_SelectShippingAddress">
        <h1>{message:SelectShippingAddress/Title}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | Checkout__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:SelectShippingAddress/Summary}</p>
        <p data-ecp-handle="pickup_link"><a href="#" class="ecp-option" data-ecp-action="load-pickup">{message:SelectShippingAddress/PreferPickupLink}</a></p>
        <form class="ecp-form">
            <div class="ecp-x-list" data-ecp-handle="shipping_addresses">
                <!-- | SelectShippingAddress__Address template | -->
            </div>
            <p><a href="#" class="ecp-option" data-ecp-action="add">{message:SelectShippingAddress/AddShippingAddressLink}</a></p>
        </form>
    </div>
</div>