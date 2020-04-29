<div class="ecp-component ecp_AddedToCart ecp-sidekick">
  <div class="ecp-sidekick-header">
    <a href="#" class="ecp-dismiss-link" data-ecp-action="close" aria-hidden="true">{message:AddedToCart/DismissLink}</a>
    <h2>{message:AddedToCart/Title}</h2>
  </div>
  <div class="ecp-sidekick-content">
    <div class="ecp-section" role="region">
      <div class="ecp-columns ecp-clearfix">
        <div class="ecp-columns-left">
          <img src="{message:thumbnail}" alt="{message:AddedToCart/ImageAlt_template}">
        </div>
        <div class="ecp-columns-right">
          <dl>
            <dt>{message:product_name}</dt>
            <dd data-ecp-handle="discounted">
              <span class="ecp-price-discounted" aria-label="{message:AddedToCart/DiscountPriceLabel}">{currency:discount_price}</span><span class="ecp-price-regular" aria-label="{message:AddedToCart/RegularPriceLabel}">{currency:regular_price}</span>
            </dd>
            <dd data-ecp-handle="not_discounted">
              <span class="ecp-price" aria-label="{message:AddedToCart/PriceLabel}">{currency:regular_price}</span>
            </dd>
            <dd>{message:AddedToCart/QuantityLabel}{message:cart_quantity}</dd>
          </dl>
        </div>
      </div>
      <div class="ecp-grid">
        <div class="ecp-grid-row ecp-clearfix">
          <span class="ecp-grid-col-6">
            <button data-ecp-action="continue-shopping">{message:AddedToCart/ShopMoreButton}</button>
          </span>
          <span class="ecp-grid-col-6">
            <button data-ecp-action="load-cart" class="ecp-secondary">{message:AddedToCart/ViewCartButton}</button>
          </span>
        </div>
      </div>
    </div>
    <div class="ecp-list-wrapper" data-ecp-handle="suggestions_section" role="region" aria-labelledby="ecpi_suggestions_title">
      <h2 id="ecpi_suggestions_title">{message:AddedToCart/SuggestionsTitle}</h2>
      <ul class="ecp-horizontal-list ecp-clearfix" data-ecp-handle="suggestions">
        <!-- | AddedToCart__Suggestion template | -->
      </ul>
    </ul>
  </div>
</div>
