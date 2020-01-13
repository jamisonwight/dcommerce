<div class="grid-x account account_ShippingAddresses">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_ShippingAddresses">
        <h1>{message:ShippingAddresses/Title}</h1>
        <form class="ecp-form">
            <button class="ecp-continue" data-ecp-action="add">
                {message:ShippingAddresses/AddShippingAddressButton}
            </button>
            <div class="ecp-x-list" data-ecp-handle="shipping_addresses">
                <!-- | ShippingAddresses_Address template | -->
            </div>
            <button class="ecp-secondary" data-ecp-action="load-dashboard">{message:ShippingAddresses/HomeButton}</button>
        </form>
        <a href="/store/?view=account">< Back to Account</a>
    </div>
</div> 