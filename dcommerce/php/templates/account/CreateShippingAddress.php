<div class="grid-x account">
	<div class="cell medium-8 medium-offset-2 ecp-component ecp_CreateShippingAddress">
	  <h2>{message:CreateShippingAddress/Title}</h2>
	  <p class="ecp-summary">{message:CreateShippingAddress/Summary}</p>
	  <form class="ecp-form">
	    <div class="ecp-form-fieldset">
	      <select name="country_code" data-ecp-action="change-country">
	        <!-- | Address__CountryOption template | -->
	      </select>
	    </div>
	    <div class="ecp-form-fieldset-scrunched">
	      <input type="text" name="first_name" placeholder="{message:CreateShippingAddress/FirstNameInput}">
	      <input type="text" name="last_name" placeholder="{message:CreateShippingAddress/LastNameInput}">
	      <input type="text" name="company_name" placeholder="{message:CreateShippingAddress/CompanyNameInput}">
	      <input type="text" name="address_line_1" placeholder="{message:CreateShippingAddress/AddressLine1Input}">
	      <input type="text" name="address_line_2" placeholder="{message:CreateShippingAddress/AddressLine2Input}">
	      <input type="text" name="city" placeholder="{message:CreateShippingAddress/CityInput}">
	      <select name="state_code">
	        <option value="">{message:CreateShippingAddress/StateInput}</option>
	        <!-- | Address__StateOption template | -->
	      </select>
	      <input type="text" name="region" placeholder="{message:CreateShippingAddress/RegionInput}">
	      <input type="text" name="postal_code" placeholder="{message:CreateShippingAddress/PostalCodeInput}">
	      <input type="text" name="zip_extension" placeholder="{message:CreateShippingAddress/ZipExtensionInput}" autocomplete="off" maxlength="4">
	    </div>
	    <p class="ecp-summary">{message:CreateShippingAddress/PhoneAndBirthDateInfo}</p>
	    <div class="ecp-form-fieldset-scrunched">
	      <input type="text" name="birth_date" placeholder="{message:CreateShippingAddress/BirthDateInput}">
	      <input type="text" name="phone" placeholder="{message:CreateShippingAddress/PhoneInput}">
	    </div>
	    <div data-ecp-handle="make_default_section">
	      <p class="ecp-summary">{message:CreateShippingAddress/MakeDefaultInfo}</p>
	      <ul class="ecp-form-checkboxes">
	        <li><label><input type="checkbox" name="is_default">{message:CreateShippingAddress/MakeDefaultYesNo}</label></li>
	      </ul>
	    </div>
	    <div class="ecp-grid">
	      <div class="ecp-grid-row ecp-clearfix">
	        <span class="ecp-grid-col-6">
	          <button class="ecp-secondary" data-ecp-action="cancel">{message:CreateShippingAddress/CancelButton}</button>
	        </span>
	        <span class="ecp-grid-col-6">
	          <button data-ecp-action="save">{message:CreateShippingAddress/SaveButton}</button>
	        </span>
	      </div>
	    </div>
	  </form>
	</div>
</div>