<div class="ecp-component ecp_JoinClub__Review">
  <h2 aria-describedby="ecpi_jc__review_info">{message:club_tier_name}</h2>
  <div data-ecp-handle="progress_bar">
    <!-- | JoinClub__ProgressBar template | -->
  </div>
  <p id="ecpi_jc__review_info" class="ecp-summary">{message:JoinClub/Review/Summary}</p>
  <div class="ecp-section" role="region" aria-labelledby="ecpi_account_title">
    <a href="#" class="ecp-section-menu" data-ecp-action="change-account" aria-label="{message:JoinClub/Review/ChangeAccountLinkLabel}">{message:JoinClub/Review/ChangeAccountLink}</a>
    <h3 id="ecpi_account_title">{message:JoinClub/Review/AccountTitle}</h3>
    <div data-ecp-handle="account_info">
      <!-- | JoinClubReview__AccountInfo template | -->
    </div>
  </div>
  <div class="ecp-section" role="region" aria-labelledby="ecpi_shipping_title">
    <a href="#" class="ecp-section-menu" data-ecp-action="change-shipping" aria-label="{message:JoinClub/Review/ChangeShippingLinkLabel}">{message:JoinClub/Review/ChangeShippingLink}</a>
    <h3 id="ecpi_shipping_title">{message:JoinClub/Review/ShippingAddressTitle}</h3>
    <div data-ecp-handle="shipping_address">
      <!-- | JoinClubReview__ShippingAddress template | -->
    </div>
  </div>
  <div class="ecp-section" role="region" aria-labelledby="ecpi_paymentmethod_title">
    <a href="#" class="ecp-section-menu" data-ecp-action="change-payment-method" aria-label="{message:JoinClub/Review/ChangePaymentMethodLinkLabel}">{message:JoinClub/Review/ChangePaymentMethodLink}</a>
    <h3 id="ecpi_paymentmethod_title">{message:JoinClub/Review/PaymentMethodTitle}</h3>
    <div data-ecp-handle="payment_method">
      <!-- | JoinClubReview__PaymentMethod template | -->
    </div>
  </div>
  <div class="ecp-section" role="region" aria-labelledby="ecpi_billing_title">
    <a href="#" class="ecp-section-menu" data-ecp-action="change-billing" aria-label="{message:JoinClub/Review/ChangeBillingAddressLinkLabel}">{message:JoinClub/Review/ChangeBillingAddressLink}</a>
    <h3 id="ecpi_billing_title">{message:JoinClub/Review/BillingAddressTitle}</h3>
    <div data-ecp-handle="billing_address">
      <!-- | JoinClubReview__BillingAddress template | -->
    </div>
  </div>
  <div class="ecp-section" role="region" aria-label="{message:JoinClub/Review/SaveRegionLabel}">
    <form class="ecp-form">
      <label for="ecpi_jc_note">{message:JoinClub/Review/CommentsTip}</label>
      <textarea id="ecpi_jc_note" name="account_note" rows="4"></textarea>
      <div class="ecp-callout-box">
        <div class="ecp-html-content">
          {message:JoinClub/Review/TermsHTML}
          <p style="margin-bottom: 20px;"><small>I authorize Benziger Family Winery (or its affiliates) to <strong><u>charge my card on an automatic, recurring basis</u></strong> for the cost of the wine club I have chosen to join, as those costs are described on this website. I understand I may cancel my membership in the wine club after receiving one season (Spring or Fall) of wine club selections, by a) email and <a href="mailto:wineclub@benziger.com">wineclub@benziger.com</a>, b) submitting your cancellation online at <a href="http://www.benziger.com/contact-us" target="_blank">www.benziger.com/contact-us</a>, c) calling 800-989-8890, or d) letter mailed to us at: Benziger Family Winery, 1883 London Ranch Rd. Glen Ellen, CA, 95442, ATTN: Wine Club Cancellation.</small></p>

<p style="margin-bottom: 40px;"><small>All prices listed on this website are approximate and are current as of this date. We reserve the right to change prices and other terms of the wine club at any time by sending you a written notice (including email) at least 30 days before the new prices/terms take effect.</small></p>
          <label><input type="checkbox" name="is_fee_confirmed" aria-label="{message:JoinClub/Review/ConfirmationInputLabel}" required> {message:JoinClub/Review/ConfirmationLabel}</label>
        </div>
      </div>
		
      <button data-ecp-action="save">{message:JoinClub/Review/SaveButton}</button>
    </form>
  </div>
</div>