<div class="grid-x checkout checkout_EditBillingAddress">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_EditBillingAddress--checkout">
        <h1>{message:EditBillingAddress/Title}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | Checkout__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:EditBillingAddress/Summary}</p>
        <form class="grid-x grid-margin-x grid-margin-y ecp-form">
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
            <button class="cell" data-ecp-action="save">{message:EditBillingAddress/SaveButton}</button>
        </form>
    </div>
</div>