<div class="grid-x grid-padding-y cart cart_GeneralCart">
    <div class="cell ecp-component ecp_GeneralCart">
        <form class="ecp-form">
            <h1 aria-describedby="ecpi_generalcart_info">{message:GeneralCart/Title}</h1>
			<p id="ecpi_generalcart_info" class="ecp-summary">{message:GeneralCart/Summary}</p>

            <div class="ecp-x-list grid-x grid-padding-y" data-ecp-handle="products" role="list">
            <!-- 
	          | GeneralCart__Product_A template is used for products with no thumbnail image |
	
	          or
	
	          | GeneralCart__Product_B template is used for products with a thumbnail image |
		      -->
		    </div>
		    <div data-ecp-handle="allocation_section" class="ecp-box ecp-appendage" role="region" aria-labelledby="ecpi_allocated_title">
		      <h3 id="ecpi_allocated_title">{message:GeneralCart/Allocated/Title}</h3>
		      <div class="ecp-x-list" data-ecp-handle="allocated_products" role="list">
		        <!-- | GeneralCart__AllocatedProduct template | -->
		      </div>
		      <div class="ecp-callout-warning" data-ecp-handle="allocation_minimum_quantity">
		        <p>{message:GeneralCart/Allocated/MinQuantity_template}</p>
		        <p><a href="{message:__allocation_link}" data-ecp-action="load-allocation">{message:GeneralCart/Allocated/MinQuantityLink}</a></p>
		      </div>
		    </div>
		    <div data-ecp-handle="apply_changes_section">
		      <button data-ecp-action="apply-changes">{message:GeneralCart/ApplyChangesButton}</button>
		    </div>
		    <div data-ecp-handle="estimate_section" role="region" aria-label="{message:GeneralCart/SubtotalsRegionLabel}">
		      <div class="ecp-callout-box">
		        <div class="ecp-grid">
		          <div class="ecp-grid-row ecp-clearfix">
		            <span class="ecp-grid-col-8">{message:GeneralCart/ProductsSubtotal}</span>
		            <span class="ecp-grid-col-4 ecp-text-right">{currency:items_subtotal}</span>
		          </div>
		        </div>
		        <div class="ecp-grid">
		          <div class="ecp-grid-row ecp-clearfix">
		            <span class="ecp-grid-col-8">{message:GeneralCart/ProductsDiscountTotal}</span>
		            <span class="ecp-grid-col-4 ecp-text-right">{currency:items_discount_total}</span>
		          </div>
		        </div>
		        <div class="ecp-grid">
		          <div class="ecp-grid-row ecp-clearfix">
		            <span class="ecp-grid-col-8">{message:GeneralCart/ProductsTotal}</span>
		            <span class="ecp-grid-col-4 ecp-text-right">{currency:items_total}</span>
		          </div>
		        </div>
		      </div>
		      <p class="ecp-form-tip">{message:GeneralCart/PreCheckoutInfo}</p>
		      <button data-ecp-handle="checkout_button" data-ecp-action="checkout">{message:GeneralCart/CheckoutButton}</button>
		    </div>
		  </form>
    </div>
</div>

