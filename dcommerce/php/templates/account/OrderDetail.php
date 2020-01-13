<div class="grid-x ecp-component ecp_OrderDetail">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:OrderDetail/Title}</h1>
        <div class="ecp-section">
            <div class="ecp-grid">
            <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-4">{message:OrderDetail/OrderIDLabel}</span>
                <span class="ecp-grid-col-8">{message:order_id}</span>
            </div>
            <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-4">{message:OrderDetail/OrderDateLabel}</span>
                <span class="ecp-grid-col-8">{datetime:order_date}</span>
            </div>
            <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-4">{message:OrderDetail/OrderTotalLabel}</span>
                <span class="ecp-grid-col-8">{currency:order_total} - {message:order_billing_status}</span>
            </div>
            <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-4">{message:OrderDetail/OrderStatusLabel}</span>
                <span class="ecp-grid-col-8">{message:order_status}</span>
            </div>
            </div>
        </div>
        <div class="ecp-section" data-ecp-handle="shipping_address_section">
            <h3>{message:OrderDetail/ShippingAddressTitle}</h3>
            <dl class="ecp-address">
            <dt>{message:shipment_first_name} {message:shipment_last_name}</dt>
            <dd data-ecp-handle="shipment_company_name">{message:shipment_company_name}</dd>
            <dd>{message:shipment_address_line_1}</dd>
            <dd data-ecp-handle="shipment_address_line_2">{message:shipment_address_line_2}</dd>
            <dd>{message:shipment_city}, <span data-ecp-handle="shipment_state_code">{message:shipment_state_code}</span><span data-ecp-handle="shipment_region">{message:shipment_region}</span> {message:shipment_postal_code}<span data-ecp-handle="shipment_zip_extension">-{message:shipment_zip_extension}</span></dd>
            <dd>{message:shipment_country_name}</dd>
            <dd data-ecp-handle="shipment_phone">{message:OrderDetail/PhoneLabel} {message:shipment_phone}</dd>
            <dd></dd>
            <dd>{message:OrderDetail/ShippingMethodLabel} {message:shipment_shipper}</dd>
            </dl>
            <div data-ecp-handle="tracking_info_section">
            <ul class="ecp-item-list" data-ecp-handle="tracking_info">
                <!-- | OrderDetail__TrackingInfo template -->
            </ul>
            </div>
        </div>
        <div class="ecp-section" data-ecp-handle="pickup_address_section">
            <h3>{message:OrderDetail/PickupAddressTitle}</h3>
            <dl class="ecp-address">
            <dd>{message:shipment_company_name}</dd>
            <dd>{message:shipment_address_line_1}</dd>
            <dd>{message:shipment_city}, {message:shipment_state_code} {message:shipment_postal_code}</dd>
            <dd>{message:OrderDetail/PhoneLabel} {message:shipment_phone}</dd>
            <dd>{message:OrderDetail/PickupFor} {message:pickup_first_name} {message:pickup_last_name}</dd>
            </dl>
        </div>
        <div class="ecp-section" data-ecp-handle="payments_section">
            <h3>{message:OrderDetail/PaymentsTitle}</h3>
            <div data-ecp-handle="payments">
            <!-- | OrderDetail__Payment template -->
            </div>
        </div>
        <div class="ecp-section" data-ecp-handle="billing_address_section">
            <h3>{message:OrderDetail/BillingAddressTitle}</h3>
            <dl class="ecp-address">
            <dt>{message:billing_first_name} {message:billing_last_name}</dt>
            <dd data-ecp-handle="billing_company_name">{message:billing_company_name}</dd>
            <dd>{message:billing_address_line_1}</dd>
            <dd data-ecp-handle="billing_address_line_2">{message:billing_address_line_2}</dd>
            <dd>{message:billing_city}, <span data-ecp-handle="billing_state_code">{message:billing_state_code}</span><span data-ecp-handle="billing_region">{message:billing_region}</span> {message:billing_postal_code}<span data-ecp-handle="billing_zip_extension">-{message:billing_zip_extension}</span></dd>
            <dd>{message:billing_country_name}</dd>
            <dd data-ecp-handle="billing_phone">{message:OrderDetail/PhoneLabel} {message:billing_phone}</dd>
            </dl>
        </div>
        <div class="ecp-section">
            <h3>{message:OrderDetail/CartTitle}</h3>
            <div class="ecp-x-list" data-ecp-handle="products"> 
            <!-- | OrderDetail__Product template -->
            </div>
            <div class="ecp-subtotals">
            <div class="ecp-grid">
                <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-8 ecp-text-right">{message:OrderDetail/SubtotalLabel}</span>
                <span class="ecp-grid-col-4 ecp-text-right">{currency:order_subtotal}</span>
                </div>
                <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-8 ecp-text-right">{message:OrderDetail/ShippingLabel}</span>
                <span class="ecp-grid-col-4 ecp-text-right">{currency:order_shipping}</span>
                </div>
                <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-8 ecp-text-right">{message:OrderDetail/TaxLabel}</span>
                <span class="ecp-grid-col-4 ecp-text-right">{currency:order_tax}</span>
                </div>
            </div>
            </div>
            <div class="ecp-grandtotals">
            <div class="ecp-grid">
                <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-8 ecp-text-right">{message:OrderDetail/TotalLabel}</span>
                <span class="ecp-grid-col-4 ecp-text-right">{currency:order_total}</span>
                </div>
            </div>
            </div>
        </div>
        <div class="ecp-section" data-ecp-handle="gift_message_section">
            <label>{message:OrderDetail/GiftMessageLabel}</label>
            <div>{message:order_gift_message}</div>
        </div>
        <div class="ecp-section" data-ecp-handle="shipping_comments_section">
            <label>{message:OrderDetail/ShippingCommentsLabel}</label>
            <div>{message:order_shipping_comments}</div>
        </div>
        <div class="ecp-section" data-ecp-handle="comments_section">
            <label>{message:OrderDetail/CommentsLabel}</label>
            <div>{message:order_comments}</div>
        </div>
        <form class="ecp-form">
            <button class="ecp-secondary" data-ecp-action="load-dashboard">{message:ClubSubscriptions/HomeButton}</button>
        </form>
    </div>
</div>