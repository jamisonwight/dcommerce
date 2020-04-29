<div class="grid-x checkout checkout_ShippingAddress">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_CreateShippingAddress--checkout">
        <h1>{message:CreateShippingAddress/Title}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | Checkout__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:CreateShippingAddress/Summary}</p>
        <p data-ecp-handle="pickup_link"><a href="#" class="ecp-option" data-ecp-action="load-pickup">{message:CreateShippingAddress/PreferPickupLink}</a></p>
        <form class="ecp-form">
            <div class="grid-x grid-margin-y grid-margin-x">
                <div class="cell">
                    <select name="country_code" data-ecp-action="change-country">
                        <!-- | Address__CountryOption template | -->
                    </select>
                </div>
                <div class="cell large-4">
                    <input type="text" name="first_name" placeholder="{message:CreateShippingAddress/FirstNameInput}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="last_name" placeholder="{message:CreateShippingAddress/LastNameInput}">
                </div>
                <div class="cell large-4">
                     <input type="text" name="company_name" placeholder="{message:CreateShippingAddress/CompanyNameInput}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="address_line_1" placeholder="{message:CreateShippingAddress/AddressLine1Input}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="address_line_2" placeholder="{message:CreateShippingAddress/AddressLine2Input}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="city" placeholder="{message:CreateShippingAddress/CityInput}">
                </div>
                <div class="cell large-4">
                     <select name="state_code">
                        <option value="">{message:CreateShippingAddress/StateInput}</option>
                        <!-- | Address__StateOption template | -->
                     </select>
                </div>
                <div class="cell large-4">
                    <input type="text" name="region" placeholder="{message:CreateShippingAddress/RegionInput}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="postal_code" placeholder="{message:CreateShippingAddress/PostalCodeInput}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="zip_extension" placeholder="{message:CreateShippingAddress/ZipExtensionInput}">
                </div>
            </div>
            <div class="grid-x grid-margin-y">
                <p class="ecp-summary">{message:CreateShippingAddress/PhoneAndBirthDateInfo}</p>
                <div class="cell small-12">
                     <input type="text" name="birth_date" placeholder="{message:CreateShippingAddress/BirthDateInput}">
                </div>
                <div class="cell small-12">
                    <input type="text" name="phone" placeholder="{message:CreateShippingAddress/PhoneInput}">
                </div>
                
                <div class="cell" data-ecp-handle="make_default_section">
                    <p class="ecp-summary">{message:CreateShippingAddress/MakeDefaultInfo}</p>
                    <ul class="ecp-form-checkboxes">
                        <li><label><input type="checkbox" name="is_default">{message:CreateShippingAddress/MakeDefaultYesNo}</label></li>
                    </ul>
                </div>
                <div class="cell" data-ecp-handle="one_button">
                    <button data-ecp-action="save">{message:CreateShippingAddress/SaveButton}</button>
                </div>
                <div class="cell ecp-form-buttonset-2 ecp-clearfix" data-ecp-handle="two_buttons">
                    <button class="ecp-secondary" data-ecp-action="cancel">{message:CreateShippingAddress/CancelButton}</button>
                    <button data-ecp-action="save">{message:CreateShippingAddress/SaveButton}</button>
                </div>
            </div>
        </form>
    </div>
</div>