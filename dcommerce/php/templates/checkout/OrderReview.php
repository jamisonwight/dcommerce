<div class="grid-x ecp-component ecp_OrderReview">
  <form class="ecp-form cell medium-8 medium-offset-2">
    <h2>{message:OrderReview/Title}</h2>
    <div data-ecp-handle="progress_bar">
      <!-- | Checkout__ProgressBar template | -->
    </div>
    <p class="ecp-summary">{message:OrderReview/Summary}</p>

    <div class="ecp-section" data-ecp-handle="coupon_section">
      <h3>{message:OrderReview/CouponTitle}</h3>
      <p data-ecp-handle="coupon_info">{message:OrderReview/CouponInfo}</p>
      <div class="ecp-grid">
        <div class="ecp-grid-row ecp-clearfix">
          <span class="ecp-grid-col-7"><input type="text" name="coupon_code" placeholder="{message:OrderReview/CouponInput}"></span>
          <span class="ecp-grid-col-5"><button class="ecp-secondary" data-ecp-action="apply-coupon">{message:OrderReview/CouponButton}</button></span>
        </div>
      </div>      
      <div class="ecp-validation-box" data-ecp-handle="coupon_is_invalid">{message:OrderReview/CouponIsInvalid_template}</div>
      <div class="ecp-alert-box" data-ecp-handle="coupon_is_not_best">{message:OrderReview/CouponIsNotBest_template}</div>
      <div class="ecp-alert-box" data-ecp-handle="coupon_is_for_order">{message:OrderReview/CouponIsForOrder_template}</div>
      <div class="ecp-alert-box" data-ecp-handle="coupon_is_for_free_shipping">{message:OrderReview/CouponIsForFreeShipping_template}</div>
      <div class="ecp-alert-box" data-ecp-handle="coupon_is_for_flat_shipping">{message:OrderReview/CouponIsForFlatShipping_template}</div>
    </div>
    
    <div class="ecp-section" data-ecp-handle="shipping_address_section">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-shipping">{message:OrderReview/ChangeShippingAddressLink}</a>
      <h3>{message:OrderReview/ShippingAddressTitle}</h3>
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
    
    <div class="ecp-section" data-ecp-handle="pickup_location_section">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-pickup">{message:OrderReview/ChangePickupLink}</a>
      <h3>{message:OrderReview/PickupLocationTitle}</h3>
      <dl class="ecp-address" data-ecp-handle="pickup_location">
        <dd>{message:pickup_company_name}</dd>
        <dd>{message:pickup_address_line_1}</dd>
        <dd>{message:pickup_city}, {message:pickup_state_code} {message:pickup_postal_code}</dd>
        <dd>{message:OrderReview/Phone} {message:pickup_phone}</dd>
      </dl>
      <div class="ecp-appendage" data-ecp-handle="pickup_date">
        <div class="ecp-html-content">{message:OrderReview/PickupDateInfo}</div>
        <input type="text" name="pickup_date" placeholder="{message:OrderReview/PickupDateInput}">
      </div>
    </div>
    
    <div class="ecp-section">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-payment-method">{message:OrderReview/ChangePaymentMethodLink}</a>
      <h3>{message:OrderReview/PaymentMethodTitle}</h3>
      <dl class="ecp-payment-method" data-ecp-handle="payment_method">
        <dt>{message:OrderReview/CardDescription_template}</dt>
        <dd data-ecp-handle="cc_name_on">{message:cc_name_on}</dd>
        <dd>{message:OrderReview/Expires} {message:cc_exp_mo}/{message:cc_exp_year}</dd>
      </dl>
    </div>
    
    <div class="ecp-section">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-billing">{message:OrderReview/ChangeBillingAddressLink}</a>
      <h3>{message:OrderReview/BillingAddressTitle}</h3>
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

    <div class="ecp-section">
      <a href="#" class="ecp-section-menu" data-ecp-action="change-cart">{message:OrderReview/ChangeCartLink}</a>
      <h3>{message:OrderReview/CartTitle}</h3>
      <div class="ecp-x-list" data-ecp-handle="cart_items"> 
        <!-- | OrderReview__Product template | -->
      </div>
    </div>

    <div class="ecp-section" data-ecp-handle="ship_methods_section">
      <h3>{message:OrderReview/ShipMethodsTitle}</h3>
      <div class="ecp-html-content">{message:OrderReview/ShipMethodsInfo}</div>
      <select name="ship_method_id" data-ecp-action="change-ship-method">
        <!-- | OrderReview__ShipMethodOption template | -->  
      </select>
      <div class="ecp-appendage" data-ecp-handle="ship_date">
        <div class="ecp-html-content">{message:OrderReview/ShipDateInfo}</div>
        <input type="text" name="ship_date" placeholder="{message:OrderReview/ShipDateInput}">
      </div>
      <div class="ecp-appendage ecp-form-fieldset" data-ecp-handle="shipping_comments">
        <div class="ecp-html-content">{message:OrderReview/ShipperMessage}</div>
        <textarea name="shipping_comments" rows="4"></textarea>
      </div>
    </div>

    <div class="ecp-section">
      <h3>{message:OrderReview/SummaryTitle}</h3>
      <div class="ecp-grid">
        <div class="ecp-grid-row ecp-clearfix">
          <span class="ecp-grid-col-8">{message:OrderReview/ItemsTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right">{currency:total_products}</span>
        </div>
        <div class="ecp-grid-row ecp-clearfix" data-ecp-handle="total_discount">
          <span class="ecp-grid-col-8">{message:OrderReview/DiscountTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right ecp-price-discounted">{currency:total_products_discount}</span>
        </div>
        <div class="ecp-grid-row ecp-clearfix" data-ecp-handle="total_extended">
          <span class="ecp-grid-col-8">{message:OrderReview/ExtendedTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right">{currency:total_products_extended}</span>
        </div>
        <div class="ecp-grid-row ecp-grid-row-topline ecp-clearfix">
          <span class="ecp-grid-col-8">{message:OrderReview/ShippingTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right" data-ecp-handle="total_shipping">{currency:total_shipping_extended}</span>
        </div>
        <div class="ecp-grid-row ecp-clearfix">
          <span class="ecp-grid-col-8">{message:OrderReview/TaxTotal}</span>
          <span class="ecp-grid-col-4 ecp-text-right" data-ecp-handle="total_tax">{currency:total_tax}</span>
        </div>
        <div class="ecp-grid-row ecp-grid-row-topline ecp-clearfix">
          <span class="ecp-grid-col-8"><strong>{message:OrderReview/GrandTotal}</strong></span>
          <span class="ecp-grid-col-4 ecp-text-right" data-ecp-handle="total"><strong>{currency:total}</strong></span>
        </div>
      </div>
    </div>

    <div class="ecp-form-fieldset">
      <label>{message:OrderReview/GiftMessage}</label>
      <textarea name="gift_message" rows="4"></textarea>
    </div>
    <div class="ecp-form-fieldset">
      <label>{message:OrderReview/Comments}</label>
      <textarea name="comments" rows="4"></textarea>
    </div>

    <button data-ecp-action="save">{message:OrderReview/SaveButton}</button>
  </form>
</div>