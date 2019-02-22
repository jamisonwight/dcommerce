<div class="grid-x account account_EditBillingAddress">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_EditBillingAddress">
        <h1>{message:EditBillingAddress/Title}</h1>
        <form class="grid-x grid-margin-y grid-margin-x ecp-form">
            <div class="cell large-4">
                <input type="text" name="first_name" placeholder="{message:EditBillingAddress/FirstNameInput}">
            </div>
            <div class="cell large-4">
                <input type="text" name="last_name" placeholder="{message:EditBillingAddress/LastNameInput}">
            </div>
            <div class="cell large-4">
                <input type="text" name="company_name" placeholder="{message:EditBillingAddress/CompanyNameInput}">
            </div>
            <div class="cell large-4">
                 <input type="text" name="address_line_1" placeholder="{message:EditBillingAddress/AddressLine1Input}">
            </div>
            <div class="cell large-4">
                <input type="text" name="address_line_2" placeholder="{message:EditBillingAddress/AddressLine2Input}">
            </div>
            <div class="cell large-4">
                <input type="text" name="city" placeholder="{message:EditBillingAddress/CityInput}">
            </div>
            <div class="cell large-4">
                <select name="state_code">
                    <option value="">{message:EditBillingAddress/StateInput}</option>
                    <!-- | Address__StateOption template | -->
                </select>
            </div>
            <!-- <div class="cell medium-4">
                <input type="text" name="region" placeholder="{message:EditBillingAddress/RegionInput}">
            </div> -->
            <div class="cell large-4">
                 <input type="text" name="postal_code" placeholder="{message:EditBillingAddress/PostalCodeInput}">
            </div>
            <div class="cell large-4">
                 <input type="text" name="zip_extension" placeholder="{message:EditBillingAddress/ZipExtensionInput}">
            </div>
            <div class="cell large-4">
                 <select name="country_code" data-ecp-action="change-country">
                    <!-- | Address__CountryOption template | -->
                </select>
            </div>

            <p class="cell ecp-summary">{message:EditBillingAddress/PhoneAndBirthDateInfo}</p>
            <div class="cell">
                <input type="text" name="birth_date" placeholder="{message:EditBillingAddress/BirthDateInput}">
            </div>
            <div class="cell">
                <input type="text" name="phone" placeholder="{message:EditBillingAddress/PhoneInput}">
            </div>
            <div class="cell ecp-grid">
                <div class="grid-x grid-margin-x ecp-clearfix">
                    <span class="cell medium-6">
                        <button class="ecp-secondary" data-ecp-action="cancel">{message:EditBillingAddress/CancelButton}</button>
                    </span>
                    <span class="cell medium-6">
                        <button data-ecp-action="save">{message:EditBillingAddress/SaveButton}</button>
                    </span>
                </div>
            </div>
        
        </form>
        <a href="/store/?view=account">< Back to Account</a>
    </div>
</div>