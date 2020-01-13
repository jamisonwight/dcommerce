<div class="grid-x account account_ShippingAddress">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_EditShippingAddress">
        <h1>{message:EditShippingAddress/Title}</h1>
        <div data-ecp-handle="invalid_state">
            <div class="ecp-callout-box">{message:EditShippingAddress/InvalidState_template}</div>
        </div>
        <form class="grid-x grid-margin-y grid-margin-x ecp-form">
            <input type="hidden" name="address_id" value="{message:address_id}">
            <div class="cell large-4">
                <input type="text" name="first_name" placeholder="{message:EditShippingAddress/FirstNameInput}">
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
                 <input type="text" name="postal_code" placeholder="{message:EditShippingAddress/PostalCodeInput}">
            </div>
            <div class="cell large-4">
                 <input type="text" name="zip_extension" placeholder="{message:EditShippingAddress/ZipExtensionInput}">
            </div>
            <div class="cell large-4">
                 <select name="country_code" data-ecp-action="change-country">
                    <!-- | Address__CountryOption template | -->
                </select>
            </div>
            <div class="cell medium-4">
                 <input type="text" name="region" placeholder="{message:EditShippingAddress/RegionInput}">
            </div>

            <p class="cell ecp-summary">{message:EditShippingAddress/PhoneAndBirthDateInfo}</p>
            <div class="cell">
                <input type="text" name="birth_date" placeholder="{message:EditShippingAddress/BirthDateInput}">
            </div>
            <div class="cell">
                <input type="text" name="phone" placeholder="{message:EditShippingAddress/PhoneInput}">
            </div>
            <div class="cell">
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
        <a href="/store/?view=account">< Back to Account</a>
    </div>
</div>