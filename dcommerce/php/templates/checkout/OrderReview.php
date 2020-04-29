<div class="ecp-component ecp_OrderReview">
  <form class="ecp-form">
    <h2 aria-describedby="ecpi_orderreview_info">{message:OrderReview/Title}</h2>
    <div data-ecp-handle="progress_bar">
      <!-- | Checkout__ProgressBar template | -->
    </div>
    <p id="ecpi_orderreview_info" class="ecp-summary">{message:OrderReview/Summary}</p>

    <div class="ecp-callout-warning" data-ecp-handle="allocation_minimum_quantity">
      <p>{message:OrderReview/Allocated/MinQuantity_template}</p>
      <p><a href="{message:__allocation_link}" data-ecp-action="load-allocation">{message:OrderReview/Allocated/MinQuantityLink}</a></p>
    </div>

    <div class="ecp-section" data-ecp-handle="coupon_section" role="region" aria-labelledby="ecpi_coupon_title" aria-describedby="ecpi_coupon_info">
      <h3 id="ecpi_coupon_title">{message:OrderReview/CouponTitle}</h3>
      <p id="ecpi_coupon_info" data-ecp-handle="coupon_info">{message:OrderReview/CouponInfo}</p>
      <div class="ecp-grid">
        <div class="ecp-grid-row ecp-clearfix">
          <span class="ecp-grid-col-7"><input type="text" name="coupon_code" placeholder="{message:OrderReview/CouponInput}" aria-label="{message:OrderReview/CouponInputLabel}"></span>
          <span class="ecp-grid-col-5"><button class="ecp-secondary" data-ecp-action="apply-coupon">{message:OrderReview/CouponButton}</button></span>
        </div>
      </div>
      <div class="ecp-validation-box" data-ecp-handle="coupon_is_invalid" role="alert">{message:OrderReview/CouponIsInvalid_template}</div>
      <div class="ecp-alert-box" data-ecp-handle="coupon_is_not_best" role="alert">{message:OrderReview/CouponIsNotBest_template}</div>
      <div class="ecp-alert-box" data-ecp-handle="coupon_is_for_order" role="alert">{message:OrderReview/CouponIsForOrder_template}</div>
      <div class="ecp-alert-box" data-ecp-handle="coupon_is_for_free_shipping" role="alert">{message:OrderReview/CouponIsForFreeShipping_template}</div>
      <div class="ecp-alert-box" data-ecp-handle="coupon_is_for_flat_shipping" role="alert">{message:OrderReview/CouponIsForFlatShipping_template}</div>
    </div>
    
    <div class="ecp-section" data-ecp-handle="shipping_address_section" role="region" aria-labelledby="ecpi_shipping_title">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-shipping" aria-label="{message:OrderReview/ChangeShippingAddressLinkLabel}">{message:OrderReview/ChangeShippingAddressLink}</a>
      <h3 id="ecpi_shipping_title">{message:OrderReview/ShippingAddressTitle}</h3>
      <dl class="ecp-address" data-ecp-handle="shipping_address">
        <dt>{message:shipping_first_name} {message:shipping_last_name}</dt>
        <dd data-ecp-handle="shipping_company_name">{message:shipping_company_name}</dd>
        <dd>{message:shipping_address_line_1}</dd>
        <dd data-ecp-handle="shipping_address_line_2">{message:shipping_address_line_2}</dd>
        <dd>{message:shipping_city}, <span data-ecp-handle="shipping_state_code">{message:shipping_state_code}</span><span data-ecp-handle="shipping_region">{message:shipping_region}</span> {message:shipping_postal_code}<span  data-ecp-handle="shipping_zip_extension">-{message:shipping_zip_extension}</span></dd>
        <dd>{message:shipping_country_name}</dd>
        <dd data-ecp-handle="shipping_phone">{message:OrderReview/Phone} {message:shipping_phone}</dd>
      </dl>
    </div>
    
    <div class="ecp-section" data-ecp-handle="pickup_location_section" role="region" aria-labelledby="ecpi_pickup_title">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-pickup" aria-label="{message:OrderReview/ChangePickupLinkLabel}">{message:OrderReview/ChangePickupLink}</a>
      <h3 id="ecpi_pickup_title">{message:OrderReview/PickupLocationTitle}</h3>
      <dl class="ecp-address" data-ecp-handle="pickup_location">
        <dt>{message:pickup_company_name}</dt>
        <dd>{message:pickup_address_line_1}</dd>
        <dd>{message:pickup_city}, {message:pickup_state_code} {message:pickup_postal_code}</dd>
        <dd>{message:OrderReview/Phone} {message:pickup_phone}</dd>
      </dl>
      <div class="ecp-appendage" data-ecp-handle="pickup_date">
        <div class="ecp-html-content">{message:OrderReview/PickupDateInfo}</div>
        <input type="text" name="pickup_date" placeholder="{message:OrderReview/PickupDateInput}" aria-label="{message:OrderReview/PickupDateInputLabel}">
      </div>
    </div>
    
    <div class="ecp-section" role="region" aria-labelledby="ecpi_paymentmethod_title">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-payment-method" aria-label="{message:OrderReview/ChangePaymentMethodLinkLabel}">{message:OrderReview/ChangePaymentMethodLink}</a>
      <h3 id="ecpi_paymentmethod_title">{message:OrderReview/PaymentMethodTitle}</h3>
      <dl class="ecp-payment-method" data-ecp-handle="payment_method">
        <dt>{message:OrderReview/CardDescription_template}</dt>
        <dd data-ecp-handle="cc_name_on">{message:cc_name_on}</dd>
        <dd>{message:OrderReview/Expires} {message:cc_exp_mo}/{message:cc_exp_year}</dd>
      </dl>
    </div>
    
    <div class="ecp-section" role="region" aria-labelledby="ecpi_billing_title">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-billing" aria-label="{message:OrderReview/ChangeBillingAddressLinkLabel}">{message:OrderReview/ChangeBillingAddressLink}</a>
      <h3 id="ecpi_billing_title">{message:OrderReview/BillingAddressTitle}</h3>
      <dl class="ecp-address" data-ecp-handle="billing_address">
        <dt>{message:billing_first_name} {message:billing_last_name}</dt>
        <dd data-ecp-handle="billing_company_name">{message:billing_company_name}</dd>
        <dd>{message:billing_address_line_1}</dd>
        <dd data-ecp-handle="billing_address_line_2">{message:billing_address_line_2}</dd>
        <dd>{message:billing_city}, <span data-ecp-handle="billing_state_code">{message:billing_state_code}</span><span data-ecp-handle="billing_region">{message:billing_region}</span> {message:billing_postal_code}<span  data-ecp-handle="billing_zip_extension">-{message:billing_zip_extension}</span></dd>
        <dd>{message:billing_country_name}</dd>
        <dd data-ecp-handle="billing_phone">{message:OrderReview/Phone} {message:billing_phone}</dd>
      </dl>
    </div>

    <div class="ecp-section" role="region" aria-labelledby="ecpi_cart_title">
      <a href="{message:__cart_link}" class="ecp-section-menu" data-ecp-handle="change-cart" data-ecp-action="change-cart" aria-label="{message:OrderReview/ChangeCartLinkLabel}">{message:OrderReview/ChangeCartLink}</a>
      <a href="{message:__allocation_link}" class="ecp-section-menu" data-ecp-handle="change-allocation" data-ecp-action="load-allocation" aria-label="{message:OrderReview/ChangeAllocationLinkLabel}">{message:OrderReview/ChangeAllocationLink}</a>
      <h3 id="ecpi_cart_title">{message:OrderReview/CartTitle}</h3>
      <div class="ecp-x-list" data-ecp-handle="cart_items" role="list"> 
        <!-- | OrderReview__CartItem template | -->
      </div>
    </div>

    <div class="ecp-section" data-ecp-handle="ship_methods_section" role="region" aria-labelledby="ecpi_shipmethods_title">
      <h3 id="ecpi_shipmethods_title">{message:OrderReview/ShipMethodsTitle}</h3>
      <div data-ecp-handle="ship_method_options"> <!-- NEW FOR ALLOCATION RELEASE 1 -->
        <div class="ecp-html-content">{message:OrderReview/ShipMethodsInfo}</div>
        <select name="ship_method_id" data-ecp-action="change-ship-method" aria-label="{message:OrderReview/ShipMethodSelectLabel}">
          <!-- | OrderReview__ShipMethodOption template | -->  
        </select>
      </div>

      <div class="ecp-callout-box" data-ecp-handle="ship_methods_unavailable">{message:OrderReview/ShipMethodsUnavailable}</div> <!-- NEW FOR ALLOCATION RELEASE 1 -->

      <div class="ecp-appendage" data-ecp-handle="ship_date">
        <div class="ecp-html-content">{message:OrderReview/ShipDateInfo}</div>
        <input type="text" name="ship_date" placeholder="{message:OrderReview/ShipDateInput}" aria-label="{message:OrderReview/ShipDateInputLabel}">
      </div>
      <div class="ecp-appendage ecp-form-fieldset" data-ecp-handle="shipping_comments">
        <div class="ecp-html-content">{message:OrderReview/ShipperMessage}</div>
        <textarea name="shipping_comments" rows="4" aria-label="{message:OrderReview/ShippingCommentsLabel}"></textarea>
      </div>
    </div>

    <div class="ecp-section" data-ecp-handle="allocated_shipping_section" role="region" aria-labelledby="ecpi_allocatedshipmethods_title"> <!-- NEW FOR ALLOCATION RELEASE 1 -->
      <h3 id="ecpi_allocatedshipmethods_title">{message:OrderReview/Allocated/ShipMethodsTitle}</h3>
      
      <div data-ecp-handle="ship_method_options">
        <div class="ecp-html-content">{message:OrderReview/Allocated/ShipMethodOptionsInfo}</div>
        <select name="ship_method_id" data-ecp-action="change-ship-method" aria-label="{message:OrderReview/Allocated/ShipMethodSelectLabel}">
          <!-- | OrderReview__ShipMethodOption template | -->  
        </select>
      </div>
      
      <div class="ecp-callout-box" data-ecp-handle="ship_methods_unavailable">{message:OrderReview/Allocated/ShipMethodsUnavailable}</div>
      <div class="ecp-callout-box" data-ecp-handle="ship_methods_deferred">{message:OrderReview/Allocated/ShipMethodsDeferred}</div>

      <div class="ecp-appendage" data-ecp-handle="ship_date_list">
        <div class="ecp-html-content">{message:OrderReview/Allocated/ShipDateListInfo}</div>
        <select name="ship_date" aria-label="{message:OrderReview/Allocated/ShipDateSelectLabel}">
          <!-- | OrderReview__AllocatedShipDateOption template | -->  
        </select>
      </div>
      <div class="ecp-appendage" data-ecp-handle="ship_from_date">
        <div class="ecp-html-content">{message:OrderReview/Allocated/ShipFromDateInfo_template}</div>
        <input type="text" name="ship_date" placeholder="{message:OrderReview/Allocated/ShipFromDateInput}" aria-label="{message:OrderReview/Allocated/ShipFromDateInputLabel}">
      </div>
      <div class="ecp-appendage" data-ecp-handle="shipping_begins_date">
        <div class="ecp-html-content">{message:OrderReview/Allocated/ShippingBeginsDateInfo_template}</div>
      </div>
      <div class="ecp-appendage" data-ecp-handle="client_ship_date">
        <div class="ecp-html-content">{message:OrderReview/Allocated/ShipDateInfo}</div>
        <input type="text" name="ship_date" placeholder="{message:OrderReview/Allocated/ShipDateInput}" aria-label="{message:OrderReview/Allocated/ShipDateInputLabel}">
      </div>
      <div class="ecp-appendage ecp-form-fieldset" data-ecp-handle="shipping_comments">
        <div class="ecp-html-content">{message:OrderReview/Allocated/ShipperMessage}</div>
        <textarea name="shipping_comments" rows="4" aria-label="{message:OrderReview/Allocated/ShippingCommentsLabel}"></textarea>
      </div>
    </div>

    <div class="ecp-section" role="region" aria-labelledby="ecpi_summary_title" aria-live="polite">
      <h3 id="ecpi_summary_title">{message:OrderReview/SummaryTitle}</h3>
      <div class="ecp-grid" role="table">
        <div class="ecp-grid-row ecp-clearfix" role="row">
          <span class="ecp-grid-col-8" role="rowheader">{message:OrderReview/ItemsTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right" role="cell">{currency:total_products}</span>
        </div>
        <div class="ecp-grid-row ecp-clearfix" data-ecp-handle="total_discount" role="row">
          <span class="ecp-grid-col-8" role="rowheader">{message:OrderReview/DiscountTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right ecp-price-discounted" role="cell">{currency:total_products_discount}</span>
        </div>
        <div class="ecp-grid-row ecp-grid-row-bottomline ecp-clearfix" data-ecp-handle="total_extended" role="row">
          <span class="ecp-grid-col-8" role="rowheader">{message:OrderReview/ExtendedTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right" role="cell">{currency:total_products_extended}</span>
        </div>
        <div class="ecp-grid-row ecp-clearfix" data-ecp-handle="total_shipping_row" role="row">
          <span class="ecp-grid-col-8" role="rowheader">{message:OrderReview/ShippingTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right" data-ecp-handle="total_shipping" role="cell">{currency:total_shipping_extended}</span>
        </div>
        <div class="ecp-grid-row ecp-clearfix" role="row">
          <span class="ecp-grid-col-8" role="rowheader">{message:OrderReview/TaxTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right" data-ecp-handle="total_tax" role="cell">{currency:total_tax}</span>
        </div>
        <div class="ecp-grid-row ecp-grid-row-topline ecp-clearfix" role="row">
          <span class="ecp-grid-col-8" role="rowheader"><strong>{message:OrderReview/GrandTotal}</strong></span>
          <span class="ecp-grid-col-4 ecp-text-right" data-ecp-handle="total" role="cell"><strong>{currency:total}</strong></span>
        </div>
      </div>
    </div>

    <div class="ecp-form-fieldset">
      <label for="ecpi_giftmessage">{message:OrderReview/GiftMessage}</label>
      <textarea id="ecpi_giftmessage" name="gift_message" rows="4"></textarea>
    </div>
    <div class="ecp-form-fieldset">
      <label for="ecpi_comments">{message:OrderReview/Comments}</label>
      <textarea id="ecpi_comments" name="comments" rows="4"></textarea>
    </div>

    <button data-ecp-handle="save_button" data-ecp-action="save">{message:OrderReview/SaveButton}</button>
  </form>
  <p style="line-height: 1;"><small><strong>CALIFORNIA RESIDENTS WARNING:</strong> Drinking distilled spirits, beer, coolers, wine and other alcoholic beverages may increase cancer risk, and, during pregnancy, can cause birth defects. For more information go to www.P65Warnings.ca.gov/alcohol.</small></p>

<p style="line-height: 1;"><small><strong>Please Note:</strong> Deliveries must be received by persons 21 years of age or older with a valid government issued picture ID.</small></p>

<p style="line-height: 1;"><small><strong>Return Policy:</strong> All sales are final. We will replace any bottle of wine that is damaged, flawed, or otherwise deemed to be unsatisfactory. If you have questions or need assistance please contact us at <a href="mailto:buywine@benziger.com">buywine@benziger.com</a>.</small></p>
</div>