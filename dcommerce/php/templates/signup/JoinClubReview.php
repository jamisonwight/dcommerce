<div class="grid-x ecp-component ecp_JoinClub__Review">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:club_tier_name}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | JoinClub__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:JoinClub/Review/Summary}</p>
        <div class="ecp-section">
            <a href="#" class="ecp-section-menu" data-ecp-action="change-account">{message:JoinClub/Review/ChangeAccountLink}</a>
            <h4>{message:JoinClub/Review/AccountTitle}</h4>
            <div data-ecp-handle="account_info">
            <!-- | JoinClubReview__AccountInfo template | -->
            </div>
        </div>
        <div class="ecp-section">
            <a href="#" class="ecp-section-menu" data-ecp-action="change-shipping">{message:JoinClub/Review/ChangeShippingLink}</a>
            <h4>{message:JoinClub/Review/ShippingAddressTitle}</h4>
            <div data-ecp-handle="shipping_address">
            <!-- | JoinClubReview__ShippingAddress template | -->
            </div>
        </div>
        <div class="ecp-section">
            <a href="#" class="ecp-section-menu" data-ecp-action="change-payment-method">{message:JoinClub/Review/ChangePaymentMethodLink}</a>
            <h4>{message:JoinClub/Review/PaymentMethodTitle}</h4>
            <div data-ecp-handle="payment_method">
            <!-- | JoinClubReview__PaymentMethod template | -->
            </div>
        </div>
        <div class="ecp-section">
            <a href="#" class="ecp-section-menu" data-ecp-action="change-billing">{message:JoinClub/Review/ChangeBillingAddressLink}</a>
            <h4>{message:JoinClub/Review/BillingAddressTitle}</h4>
            <div data-ecp-handle="billing_address">
            <!-- | JoinClubReview__BillingAddress template | -->
            </div>
        </div>
        <div class="ecp-section">
            <form class="ecp-form">
            <label>{message:JoinClub/Review/CommentsTip}</label>
            <textarea name="account_note" rows="4"></textarea>
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
            <button data-ecp-action="save">{message:JoinClub/Review/SaveButton}</button>
            </form>
        </div>
    </div>
</div>