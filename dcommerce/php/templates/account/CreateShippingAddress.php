<div class="grid-x ecp-component account ecp_CreateShippingAddress">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:CreateShippingAddress/Title}</h1>
        <p class="ecp-summary">{message:CreateShippingAddress/Summary}</p>
        <form class="ecp-form grid-x grid-margin-x grid-margin-y">
            <div class="cell medium-4">
                <select name="country_code" data-ecp-action="change-country">
                    <!-- | Address__CountryOption template | -->
                </select>
            </div>
            <div class="cell medium-4">
                <input type="text" name="first_name" placeholder="{message:CreateShippingAddress/FirstNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="last_name" placeholder="{message:CreateShippingAddress/LastNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="company_name" placeholder="{message:CreateShippingAddress/CompanyNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="address_line_1" placeholder="{message:CreateShippingAddress/AddressLine1Input}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="address_line_2" placeholder="{message:CreateShippingAddress/AddressLine2Input}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="city" placeholder="{message:CreateShippingAddress/CityInput}">
            </div>
            <div class="cell medium-4">
                <select name="state_code">
                    <option value="">{message:CreateShippingAddress/StateInput}</option>
                    <!-- | Address__StateOption template | -->
                </select>
            </div>
            <div class="cell medium-4">
                <input type="text" name="postal_code" placeholder="{message:CreateShippingAddress/PostalCodeInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="zip_extension" placeholder="{message:CreateShippingAddress/ZipExtensionInput}" autocomplete="off" maxlength="4">
            </div>

            <div class="cell">
                <p class="ecp-summary">{message:CreateShippingAddress/PhoneAndBirthDateInfo}</p>
            </div>
            <div class="cell medium-4">
                <input type="text" name="birth_date" placeholder="{message:CreateShippingAddress/BirthDateInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="phone" placeholder="{message:CreateShippingAddress/PhoneInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="region" placeholder="{message:CreateShippingAddress/RegionInput}">
            </div>
        
            <div data-ecp-handle="make_default_section cell">
                <div class="grid-x grid-margin-x grid-padding-x grid-padding-y">
                    <p class="ecp-summary cell">{message:CreateShippingAddress/MakeDefaultInfo}</p>
                    <ul class="ecp-form-checkboxes cell medium-4">
                        <li><label><input type="checkbox" name="is_default">{message:CreateShippingAddress/MakeDefaultYesNo}</label></li>
                    </ul>
                </div>
            </div>

            <div class="cell">
                <div class="grid-x grid-margin-x">
                    <span class="cell medium-6">
                        <button class="ecp-secondary" data-ecp-action="cancel">{message:CreateShippingAddress/CancelButton}</button>
                    </span>
                    <span class="cell medium-6">
                        <button data-ecp-action="save">{message:CreateShippingAddress/SaveButton}</button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>