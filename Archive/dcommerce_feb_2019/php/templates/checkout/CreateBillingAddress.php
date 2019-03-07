<div class="grid-x checkout checkout_BillingAddress">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_CreateBillingAddress--checkout">
        <h1>{message:CreateBillingAddress/Title}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | Checkout__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:CreateBillingAddress/Summary}</p>
        <form class="ecp-form">
            <div class="grid-x grid-margin-y grid-margin-x">
                <div class="cell">
                    <select name="country_code" data-ecp-action="change-country">
                        <!-- | Address__CountryOption template | -->
                    </select>
                </div>
                <div class="cell large-4">
                    <input type="text" name="first_name" placeholder="{message:CreateBillingAddress/FirstNameInput}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="last_name" placeholder="{message:CreateBillingAddress/LastNameInput}">
                </div>
                <div class="cell large-4">
                     <input type="text" name="company_name" placeholder="{message:CreateBillingAddress/CompanyNameInput}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="address_line_1" placeholder="{message:CreateBillingAddress/AddressLine1Input}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="address_line_2" placeholder="{message:CreateBillingAddress/AddressLine2Input}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="city" placeholder="{message:CreateBillingAddress/CityInput}">
                </div>
                <div class="cell large-4">
                     <select name="state_code">
                        <option value="">{message:CreateBillingAddress/StateInput}</option>
                        <!-- | Address__StateOption template | -->
                     </select>
                </div>
                <div class="cell large-4">
                    <input type="text" name="region" placeholder="{message:CreateBillingAddress/RegionInput}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="postal_code" placeholder="{message:CreateBillingAddress/PostalCodeInput}">
                </div>
                <div class="cell large-4">
                    <input type="text" name="zip_extension" placeholder="{message:CreateBillingAddress/ZipExtensionInput}">
                </div>
            </div>
            <div class="grid-x grid-margin-y">
                <p class="ecp-summary">{message:CreateBillingAddress/PhoneAndBirthDateInfo}</p>
                <div class="cell small-12">
                    <input type="text" name="birth_date" placeholder="{message:CreateBillingAddress/BirthDateInput}">
                </div>
                <div class="cell small-12">
                     <input type="text" name="phone" placeholder="{message:CreateBillingAddress/PhoneInput}">
                </div>
                <div class="cell">
                    <button data-ecp-action="save">{message:CreateBillingAddress/SaveButton}</button>
                </div>
            </div>
        </form>
    </div>
</div>