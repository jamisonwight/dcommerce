<div class="grid-x ecp-component ecp_EditShippingAddress--checkout">
  <div class="cell small-10 small-offset-1 large-8 large-offset-2">
      <h1>{message:EditShippingAddress/Title}</h1>
      <div data-ecp-handle="progress_bar">
        <!-- | Checkout__ProgressBar template | -->
      </div>
      <p class="ecp-summary">{message:EditShippingAddress/Summary}</p>
      <div data-ecp-handle="invalid_state">
        <div class="ecp-callout-box">{message:EditShippingAddress/InvalidState_template}</div>
      </div>
      <form class="ecp-form grid-x grid-margin-x grid-margin-y">
        <input type="hidden" name="address_id" value="{message:address_id}">

        <div class="cell large-4">
            <input type="text" name="first_name" placeholder="{message:CreateBillingAddress/FirstNameInput}">
        </div>
        <div class="cell large-4">
            <input type="text" name="last_name" placeholder="{message:EditShippingAddress/LastNameInput}">
        </div>
        <div class="cell large-4">
            <input type="text" name="company_name" placeholder="{message:EditShippingAddress/CompanyNameInput}">
        </div>
        <div class="cell large-4">
            <input type="text" name="address_line_1" placeholder="{message:EditShippingAddress/AddressLine1Input}">
        </div>
        <div class="cell large-4">
            <input type="text" name="address_line_2" placeholder="{message:EditShippingAddress/AddressLine2Input}">
        </div>
        <div class="cell large-4">
            <input type="text" name="city" placeholder="{message:EditShippingAddress/CityInput}">
        </div>
        <div class="cell large-4">
            <select name="state_code">
              <option value="">{message:EditShippingAddress/StateInput}</option>
              <!-- | Address__StateOption template | -->
            </select>
        </div>

        <div class="cell large-4">
            <input type="text" name="postal_code" placeholder="{message:EditShippingAddress/PostalCodeInput}">
        </div>
        <div class="cell large-4">
            <input type="text" name="zip_extension" placeholder="{message:EditShippingAddress/ZipExtensionInput}" autocomplete="off" maxlength="4">
        </div>
        <div class="cell large-4">
            <select name="country_code" data-ecp-action="change-country">
                <!-- | Address__CountryOption template | -->
            </select>
        </div>
        <p class="ecp-summary cell">{message:EditShippingAddress/PhoneAndBirthDateInfo}</p>
        <div class="cell large-4">
            <input type="text" name="birth_date" placeholder="{message:EditShippingAddress/BirthDateInput}">
        </div>
        <div class="cell large-4">
            <input type="text" name="phone" placeholder="{message:EditShippingAddress/PhoneInput}">
        </div>
        <div class="cell large-4">
            <input type="text" name="region" placeholder="{message:EditShippingAddress/RegionInput}">
        </div>
      
        <div class="cell" data-ecp-handle="make_default_section">
          <p class="ecp-summary">{message:EditShippingAddress/MakeDefaultInfo}</p>
          <ul class="ecp-form-checkboxes">
            <li><label><input type="checkbox" name="make_default">{message:EditShippingAddress/MakeDefaultYesNo}</label></li>
          </ul>
        </div>
        
        <div class="cell">
          <div class="grid-x grid-margin-x ecp-clearfix">
            <span class="cell medium-6">
              <button class="ecp-secondary" data-ecp-action="cancel">{message:EditShippingAddress/CancelButton}</button>
            </span>
            <span class="cell medium-6">
              <button data-ecp-action="save">{message:EditShippingAddress/SaveButton}</button>
            </span>
          </div>
        </div>
      </form>
  </div>
</div>