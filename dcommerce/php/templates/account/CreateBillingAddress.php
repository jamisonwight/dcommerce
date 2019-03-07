<div class="grid-x account account_CreateBillingAddress">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_CreateBillingAddress">
        <h1>{message:CreateBillingAddress/Title}</h1>
        <form class="grid-x grid-margin-y grid-margin-x ecp-form">
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
            <!-- <div class="cell medium-4">
                <input type="text" name="region" placeholder="{message:CreateBillingAddress/RegionInput}">
            </div> -->
            <div class="cell large-4">
                 <input type="text" name="postal_code" placeholder="{message:CreateBillingAddress/PostalCodeInput}">
            </div>
            <div class="cell large-4">
                 <input type="text" name="zip_extension" placeholder="{message:CreateBillingAddress/ZipExtensionInput}">
            </div>
            <div class="cell large-4">
                 <select name="country_code" data-ecp-action="change-country">
                    <!-- | Address__CountryOption template | -->
                </select>
            </div>

            <p class="cell ecp-summary">{message:CreateBillingAddress/PhoneAndBirthDateInfo}</p>
            <div class="cell">
                <input type="text" name="birth_date" placeholder="{message:CreateBillingAddress/BirthDateInput}">
            </div>
            <div class="cell">
                <input type="text" name="phone" placeholder="{message:CreateBillingAddress/PhoneInput}">
            </div>
            <div class="cell ecp-grid">
                <div class="grid-x grid-margin-x ecp-clearfix">
                    <span class="cell medium-6">
                        <button class="ecp-secondary" data-ecp-action="cancel">{message:CreateBillingAddress/CancelButton}</button>
                    </span>
                    <span class="cell medium-6">
                        <button data-ecp-action="save">{message:CreateBillingAddress/SaveButton}</button>
                    </span>
                </div>
            </div>
        
        </form>
        <a href="/store/?view=account">< Back to Account</a>
    </div>
</div>