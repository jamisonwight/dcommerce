<div class="grid-x account">
<div class="cell medium-8 medium-offset-2 ecp-component ecp_CreateClubSubscription">
  <h1>{message:CreateClubSubscription/Title}</h1>
  <p class="ecp-summary">{message:CreateClubSubscription/Summary_template}</p>
  <form class="ecp-form">
    <div>
      <div class="ecp-section">
        <div class="ecp-card">
          <h4>{message:CreateClubSubscription/TiersSubtitle}</h4>
          <div data-ecp-handle="tiers">
            <!-- | CreateClubSubscription__Tier template | -->
          </div>  
        </div>
        <div class="ecp-card">
          <h4>{message:CreateClubSubscription/ShippingAddressesSubtitle}</h4>
          <div data-ecp-handle="shipping_addresses">
            <!-- | CreateClubSubscription__Address template | -->
          </div>
          <div><a href="#" class="ecp-option" data-ecp-action="add-shipping-address">{message:CreateClubSubscription/AddShippingAddressLink}</a></div>
        </div>
        <div class="ecp-card">
          <h4>{message:CreateClubSubscription/PaymentMethodsSubtitle}</h4>
          <div data-ecp-handle="payment_methods">
            <!-- | SelectPaymentMethod__PaymentMethod template | -->
          </div>
          <div><a href="#" class="ecp-option" data-ecp-action="add-payment-method">{message:CreateClubSubscription/AddPaymentMethodLink}</a></div>
        </div>
      </div>
      <div class="ecp-section" data-ecp-handle="billing_address">
        <a href="#" class="ecp-section-menu" data-ecp-action="copy-shipping-address">{message:CreateClubSubscription/BillingAddress/CopyShipToLink}</a>
        <h2>{message:CreateClubSubscription/BillingAddress/Subtitle}</h2>
        <div class="ecp-form-fieldset-scrunched">
          <input type="text" name="first_name" placeholder="{message:CreateClubSubscription/BillingAddress/FirstNameInput}">
          <input type="text" name="last_name" placeholder="{message:CreateClubSubscription/BillingAddress/LastNameInput}">
          <input type="text" name="company_name" placeholder="{message:CreateClubSubscription/BillingAddress/CompanyNameInput}">
          <input type="text" name="address_line_1" placeholder="{message:CreateClubSubscription/BillingAddress/AddressLine1Input}">
          <input type="text" name="address_line_2" placeholder="{message:CreateClubSubscription/BillingAddress/AddressLine2Input}">
          <input type="text" name="city" placeholder="{message:CreateClubSubscription/BillingAddress/CityInput}">
          <select name="state_code">
            <option value="">{message:CreateClubSubscription/BillingAddress/StateInput}</option>
            <!-- | Address__StateOption template | -->
          </select>
          <input type="text" name="region" placeholder="{message:CreateClubSubscription/BillingAddress/RegionInput}">
          <input type="text" name="postal_code" placeholder="{message:CreateClubSubscription/BillingAddress/PostalCodeInput}">
          <input type="text" name="zip_extension" placeholder="{message:CreateClubSubscription/BillingAddress/ZipExtensionInput}" autocomplete="off" maxlength="4">
          <select name="country_code" data-ecp-action="change-country">
            <!-- | Address__CountryOption template | -->
          </select>
        </div>
        <p class="ecp-summary">{message:CreateClubSubscription/BillingAddress/PhoneAndBirthDateInfo}</p>
        <div class="ecp-form-fieldset-scrunched">
          <input type="text" name="birth_date" placeholder="{message:CreateClubSubscription/BillingAddress/BirthDateInput}">
          <input type="text" name="phone" placeholder="{message:CreateClubSubscription/BillingAddress/PhoneInput}">
        </div>
      </div>
      <div class="ecp-section">
        <label>{message:CreateClubSubscription/NoteTip}</label>
        <textarea name="note" rows="4"></textarea>
      </div>
    </div>
    <div class="ecp-form-buttonset-2 ecp-clearfix">
      <button class="ecp-secondary" data-ecp-action="cancel">{message:CreateClubSubscription/CancelButton}</button>
      <button data-ecp-action="save">{message:CreateClubSubscription/SaveButton}</button>
    </div>
    <small style="display: block; margin-bottom: 20px !important;">I authorize Imagery Estate Winery (or its affiliates) to <b><u>charge my card on an automatic, recurring basis</u></b> 
                for the cost of the wine club I have chosen to join, as those costs are described on this website. I understand 
                I may cancel my membership in the wine club after receiving one season (Spring or Fall) of wine club selections, 
                by (a) email at <a style="color: #aaa086 !important;" href="mailto:wineclub@imagerywinery.com">wineclub@imagerywinery.com</a>, (b) submitting your cancellation online at <a style="color: #aaa086 !important;" href="www.imagerywinery.com/contact" class="gold">www.imagerywinery.com/contact</a>, (c) 
                calling <a style="color: #aaa086 !important;" href="tel:8009898890">800-989-8890</a>, or (d) letter mailed to our sister winery at: Benziger Family Winery, 1883 London Ranch Rd. Glen 
                Ellen, CA, 95442, ATTN: Wine Club Cancellation.
            </small>
            <small style="display: block; margin-bottom: 20px !important;">All prices listed on this website are approximate and are current as 
                of this date. We reserve the right to change prices and other terms of the wine club at any time by sending you a 
                written notice (including email) at least 30 days before the new prices/terms take effect.</small>
  </form>
</div>
</div>
