<div class="grid-x account">
	<div class="cell medium-8 medium-offset-2 ecp-component ecp_EditClubSubscription">
	  <h2>{message:EditClubSubscription/Title}</h2>
	  <h4>{message:club_tier_name}</h4>
	  <div class="ecp-html-content" data-ecp-handle="pickup_message">{message:EditClubSubscription/PickupSummaryHTML_template}</div>
	  <div class="ecp-html-content" data-ecp-handle="shipment_message">{message:EditClubSubscription/ShipmentSummaryHTML_template}</div>
	  <form class="ecp-form">
	    <div class="ecp-card">
	      <h4>{message:EditClubSubscription/ShippingAddressesSubtitle}</h4>
	      <div data-ecp-handle="shipping_addresses">
	        <!-- | EditClubSubscription__Address template | -->
	      </div>
	      <div><a href="#" class="ecp-option" data-ecp-action="add-shipping-address">{message:EditClubSubscription/AddShippingAddressLink}</a></div>
	    </div>
	    <div class="ecp-card">
	      <h4>{message:EditClubSubscription/PaymentMethodsSubtitle}</h4>
	      <div data-ecp-handle="payment_methods">
	        <!-- | SelectPaymentMethod__PaymentMethod template | -->
	      </div>
	      <div><a href="#" class="ecp-option" data-ecp-action="add-payment-method">{message:EditClubSubscription/AddPaymentMethodLink}</a></div>
	    </div>
	     <p style="margin-bottom: 20px;"><small>I authorize Benziger Family Winery (or its affiliates) to <strong><u>charge my card on an automatic, recurring basis</u></strong> for the cost of the wine club I have chosen to join, as those costs are described on this website. I understand I may cancel my membership in the wine club after receiving one season (Spring or Fall) of wine club selections, by a) email and <a href="mailto:wineclub@benziger.com">wineclub@benziger.com</a>, b) submitting your cancellation online at <a href="http://www.benziger.com/contact-us" target="_blank">www.benziger.com/contact-us</a>, c) calling 800-989-8890, or d) letter mailed to us at: Benziger Family Winery, 1883 London Ranch Rd. Glen Ellen, CA, 95442, ATTN: Wine Club Cancellation.</small></p>

<p style="margin-bottom: 40px;"><small>All prices listed on this website are approximate and are current as of this date. We reserve the right to change prices and other terms of the wine club at any time by sending you a written notice (including email) at least 30 days before the new prices/terms take effect.</small></p>
	    <div class="ecp-form-buttonset-2 ecp-clearfix">
	      <button class="ecp-secondary" data-ecp-action="cancel">{message:EditClubSubscription/CancelButton}</button>
	      <button data-ecp-action="save">{message:EditClubSubscription/SaveButton}</button>
	    </div>
	   
	  </form>
	</div>
</div>