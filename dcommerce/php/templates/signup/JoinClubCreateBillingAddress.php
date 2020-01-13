<div class="grid-x ecp-component ecp_JoinClub__CreateBillingAddress">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:club_tier_name}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | JoinClub__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:JoinClub/CreateBillingAddress/Summary}</p>
        <div class="ecp-section">
            <input type="checkbox" name="copy_shipping" data-ecp-action="copy-shipping">{message:JoinClub/CreateBillingAddress/CopyShipping}
        </div>
        <form class="ecp-form grid-x grid-margin-x grid-margin-y">
            <div class="cell medium-4">
                <select name="country_code" data-ecp-action="change-country">
                <!-- | Address__CountryOption template | -->
                </select>
            </div>
            <div class="cell medium-4">
                <input type="text" name="first_name" placeholder="{message:JoinClub/CreateBillingAddress/FirstNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="last_name" placeholder="{message:JoinClub/CreateBillingAddress/LastNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="company_name" placeholder="{message:JoinClub/CreateBillingAddress/CompanyNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="address_line_1" placeholder="{message:JoinClub/CreateBillingAddress/AddressLine1Input}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="address_line_2" placeholder="{message:JoinClub/CreateBillingAddress/AddressLine2Input}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="city" placeholder="{message:JoinClub/CreateBillingAddress/CityInput}">
            </div>
            <div class="cell medium-4">
                <select name="state_code">
                    <option value="">{message:JoinClub/CreateBillingAddress/StateInput}</option>
                    <!-- | Address__StateOption template | -->
                </select>
            </div>
            <div class="cell medium-4">
                 <input type="text" name="postal_code" placeholder="{message:JoinClub/CreateBillingAddress/PostalCodeInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="zip_extension" placeholder="{message:JoinClub/CreateBillingAddress/ZipExtensionInput}" autocomplete="off" maxlength="4">
            </div>
            <div class="cell medium-4">
                 <input type="text" name="birth_date" placeholder="{message:JoinClub/CreateBillingAddress/BirthDateInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="phone" placeholder="{message:JoinClub/CreateBillingAddress/PhoneInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="region" placeholder="{message:JoinClub/CreateBillingAddress/RegionInput}">
            </div>
            <div class="cell">
                <p class="ecp-form-tip">{message:JoinClub/CreateBillingAddress/PhoneAndBirthDateTip}</p>
                <button data-ecp-action="continue">{message:JoinClub/CreateBillingAddress/ContinueButton}</button>
            </div>
        </form>
    </div>
</div>