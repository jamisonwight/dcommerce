<div class="grid-x ecp-component ecp_JoinClub__CreateShippingAddress">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:club_tier_name}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | JoinClub__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:JoinClub/CreateShippingAddress/Summary}</p>
        <form class="ecp-form grid-x grid-margin-x grid-margin-y">
            <div class="cell medium-4">
                <select name="country_code" data-ecp-action="change-country">
                    <!-- | Address__CountryOption template | -->
                </select>
            </div>
            <div class="cell medium-4">
                <input type="text" name="first_name" placeholder="{message:JoinClub/CreateShippingAddress/FirstNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="last_name" placeholder="{message:JoinClub/CreateShippingAddress/LastNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="company_name" placeholder="{message:JoinClub/CreateShippingAddress/CompanyNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="address_line_1"
                    placeholder="{message:JoinClub/CreateShippingAddress/AddressLine1Input}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="address_line_2"
                    placeholder="{message:JoinClub/CreateShippingAddress/AddressLine2Input}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="city" placeholder="{message:JoinClub/CreateShippingAddress/CityInput}">
            </div>
            <div class="cell medium-4">
                <select name="state_code">
                    <option value="">{message:JoinClub/CreateShippingAddress/StateInput}</option>
                    <!-- | Address__StateOption template | -->
                </select>
            </div>
            <div class="cell medium-4">
                <input type="text" name="region" placeholder="{message:JoinClub/CreateShippingAddress/RegionInput}">
            </div>
            <div class="cell medium-4">
                 <input type="text" name="postal_code"
                    placeholder="{message:JoinClub/CreateShippingAddress/PostalCodeInput}">
            </div>
            <div class="cell medium-4">
                 <input type="text" name="zip_extension"
                    placeholder="{message:JoinClub/CreateShippingAddress/ZipExtensionInput}" autocomplete="off"
                    maxlength="4">
            </div>
            <div class="cell">
                <p class="ecp-form-tip">{message:JoinClub/CreateShippingAddress/PhoneAndBirthDateTip}</p>
            </div>
            <div class="cell medium-4">
                <input type="text" name="birth_date" placeholder="{message:JoinClub/CreateShippingAddress/BirthDateInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="phone" placeholder="{message:JoinClub/CreateShippingAddress/PhoneInput}">
            </div>
            <div class="cell">
                <button data-ecp-action="continue">{message:JoinClub/CreateShippingAddress/ContinueButton}</button>
            </div>
        </form>
    </div>
</div>