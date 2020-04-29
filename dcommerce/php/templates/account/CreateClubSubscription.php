<div class="grid-x account">
<div class="cell medium-8 medium-offset-2 ecp-component ecp_CreateClubSubscription">
  <h1 aria-describedby="ecpi_createclubsubscription_info">{message:CreateClubSubscription/Title}</h1>
  <p id="ecpi_createclubsubscription_info" class="ecp-summary">{message:CreateClubSubscription/Summary_template}</p>
  <form class="ecp-form">
    <div>
      <div class="ecp-section">
        <div class="ecp-card" role="region" aria-labelledby="ecpi_ccs_tiers">
          <h2 id="ecpi_ccs_tiers">{message:CreateClubSubscription/TiersSubtitle}</h2>
          <div data-ecp-handle="tiers" role="list">
            <!-- | CreateClubSubscription__Tier template | -->
          </div>  
        </div>
        <div class="ecp-card" role="region" aria-labelledby="ecpi_ccs_addresses">
          <h2 id="ecpi_ccs_addresses">{message:CreateClubSubscription/ShippingAddressesSubtitle}</h2>
          <div data-ecp-handle="shipping_addresses" role="list">
            <!-- | CreateClubSubscription__Address template | -->
          </div>
          <div><a href="#" class="ecp-option" data-ecp-action="add-shipping-address">{message:CreateClubSubscription/AddShippingAddressLink}</a></div>
        </div>
        <div class="ecp-card" role="region" aria-labelledby="ecpi_ccs_paymentmethods">
          <h2 id="ecpi_ccs_paymentmethods">{message:CreateClubSubscription/PaymentMethodsSubtitle}</h2>
          <div data-ecp-handle="payment_methods" role="list">
            <!-- | SelectPaymentMethod__PaymentMethod template | -->
          </div>
          <div><a href="#" class="ecp-option" data-ecp-action="add-payment-method">{message:CreateClubSubscription/AddPaymentMethodLink}</a></div>
        </div>
      </div>
      <div class="ecp-section" data-ecp-handle="billing_address" role="region" aria-labelledby="ecpi_ccs_billingaddress">
        <a href="#" class="ecp-section-menu" data-ecp-action="copy-shipping-address">{message:CreateClubSubscription/BillingAddress/CopyShipToLink}</a>
        <h2 id="ecpi_ccs_billingaddress">{message:CreateClubSubscription/BillingAddress/Subtitle}</h2>
        <div class="ecp-form-fieldset-scrunched">
          <input type="text" name="first_name" placeholder="{message:CreateClubSubscription/BillingAddress/FirstNameInput}" aria-label="{message:CreateClubSubscription/BillingAddress/FirstNameInputLabel}" autocomplete="billing given-name" required>
          <input type="text" name="last_name" placeholder="{message:CreateClubSubscription/BillingAddress/LastNameInput}" aria-label="{message:CreateClubSubscription/BillingAddress/LastNameInputLabel}" autocomplete="billing family-name" required>
          <input type="text" name="company_name" placeholder="{message:CreateClubSubscription/BillingAddress/CompanyNameInput}" aria-label="{message:CreateClubSubscription/BillingAddress/CompanyNameInputLabel}" autocomplete="billing organization">
          <input type="text" name="address_line_1" placeholder="{message:CreateClubSubscription/BillingAddress/AddressLine1Input}" aria-label="{message:CreateClubSubscription/BillingAddress/AddressLine1InputLabel}" autocomplete="billing address-line1" required>
          <input type="text" name="address_line_2" placeholder="{message:CreateClubSubscription/BillingAddress/AddressLine2Input}" aria-label="{message:CreateClubSubscription/BillingAddress/AddressLine2InputLabel}" autocomplete="billing address-line2">
          <input type="text" name="city" placeholder="{message:CreateClubSubscription/BillingAddress/CityInput}" aria-label="{message:CreateClubSubscription/BillingAddress/CityInputLabel}" autocomplete="billing address-level2" required>
          <select name="state_code" aria-label="{message:CreateClubSubscription/BillingAddress/StateCodeLabel}" autocomplete="billing address-level1" required>
            <!-- | Address__StateOption template | -->
          </select>
          <input type="text" name="region" placeholder="{message:CreateClubSubscription/BillingAddress/RegionInput}" aria-label="{message:CreateClubSubscription/BillingAddress/RegionInputLabel}" autocomplete="billing address-level1">
          <input type="text" name="postal_code" placeholder="{message:CreateClubSubscription/BillingAddress/PostalCodeInput}" aria-label="{message:CreateClubSubscription/BillingAddress/PostalCodeInputLabel}" autocomplete="billing postal-code" required>
          <input type="text" name="zip_extension" placeholder="{message:CreateClubSubscription/BillingAddress/ZipExtensionInput}" maxlength="4" aria-label="{message:CreateClubSubscription/BillingAddress/ZipExtensionInputLabel}" autocomplete="xyzpdq">
          <select name="country_code" data-ecp-action="change-country" aria-label="{message:CreateClubSubscription/BillingAddress/CountryCodeLabel}" autocomplete="billing country" required>
            <!-- | Address__CountryOption template | -->
          </select>
        </div>
        <p class="ecp-summary">{message:CreateClubSubscription/BillingAddress/PhoneAndBirthDateInfo}</p>
        <div class="ecp-form-fieldset-scrunched">
          <input type="text" name="birth_date" placeholder="{message:CreateClubSubscription/BillingAddress/BirthDateInput}" aria-label="{message:CreateClubSubscription/BillingAddress/BirthDateInputLabel}" autocomplete="bday" required>
          <input type="text" name="phone" placeholder="{message:CreateClubSubscription/BillingAddress/PhoneInput}" aria-label="{message:CreateClubSubscription/BillingAddress/PhoneInputLabel}" autocomplete="mobile tel">
        </div>
      </div>
      <div class="ecp-section">
        <label for="ecpi_ccs_note">{message:CreateClubSubscription/NoteTip}</label>
        <textarea id="ecpi_ccs_note" name="note" rows="4"></textarea>
      </div>
      <div class="ecp-section">
        <div class="ecp-callout-box">
          <div class="ecp-html-content">
            {message:CreateClubSubscription/TermsHTML}
            
            <p style="margin-bottom: 20px;"><small>I authorize Benziger Family Winery (or its affiliates) to <strong><u>charge my card on an automatic, recurring basis</u></strong> for the cost of the wine club I have chosen to join, as those costs are described on this website. I understand I may cancel my membership in the wine club after receiving one season (Spring or Fall) of wine club selections, by a) email and <a href="mailto:wineclub@benziger.com">wineclub@benziger.com</a>, b) submitting your cancellation online at <a href="http://www.benziger.com/contact-us" target="_blank">www.benziger.com/contact-us</a>, c) calling 800-989-8890, or d) letter mailed to us at: Benziger Family Winery, 1883 London Ranch Rd. Glen Ellen, CA, 95442, ATTN: Wine Club Cancellation.</small></p>

<p style="margin-bottom: 40px;"><small>All prices listed on this website are approximate and are current as of this date. We reserve the right to change prices and other terms of the wine club at any time by sending you a written notice (including email) at least 30 days before the new prices/terms take effect.</small></p>

            <label><input type="checkbox" name="is_fee_confirmed" aria-label="{message:CreateClubSubscription/ConfirmationInputLabel}" required> {message:CreateClubSubscription/ConfirmationLabel}</label>
          </div>
        </div>
      </div>
    </div>
    
    <div class="ecp-form-buttonset-2 ecp-clearfix">
      <button class="ecp-secondary" data-ecp-action="cancel">{message:CreateClubSubscription/CancelButton}</button>
      <button data-ecp-action="save">{message:CreateClubSubscription/SaveButton}</button>
    </div>
    
  </form>
</div>
</div>
