<div class="grid-x signup">
    <div class="ecp-component ecp_JoinList cell medium-8 medium-offset-2">
        <h1>{message:JoinList/Title}</h1>
        <div class="ecp-html-content intro">
            <p>By joining our mailing list, you are giving consent to be alerted to special events & offerings from our
                winery. If you have questions, please refer to our <a href="/privacy-policy/" target="_blank">Privacy
                    Policy</a>.</p>
        </div>
        <form class="ecp-form">

            <div class="ecp-section grid-x grid-margin-y grid-margin-x">
                <h3 class="cell">{message:JoinList/LoginTitle}</h3>
                <p class="ecp-summary cell">{message:JoinList/LoginInfo}</p>
                <div class="cell medium-6">
                    <input type="text" name="email_address" placeholder="{message:JoinList/EmailInput}">
                </div>
                <div class="cell medium-6">
                    <input type="password" name="password_1" placeholder="{message:JoinList/PasswordInput1}">
                </div>
                <div class="cell medium-6">
                    <input type="password" name="password_2" placeholder="{message:JoinList/PasswordInput2}">
                </div>
            </div>


            <div class="ecp-section grid-x grid-margin-y grid-margin-x">
                <h3 class="cell">{message:JoinList/AddressTitle}</h3>
                <p class="ecp-summary cell">{message:JoinList/AddressInfo}</p>
                <div class="cell medium-6">
                    <select name="country_code" data-ecp-action="change-country">
                        <!-- | Address__CountryOption template | -->
                    </select>
                </div>
                <div class="cell medium-6">
                    <input type="text" name="first_name" placeholder="{message:JoinList/FirstNameInput}">
                </div>
                <div class="cell medium-6">
                    <input type="text" name="last_name" placeholder="{message:JoinList/LastNameInput}">
                </div>
                <div class="cell medium-6">
                    <input type="text" name="company_name" placeholder="{message:JoinList/CompanyNameInput}">
                </div>
                <div class="cell medium-6">
                    <input type="text" name="address_line_1" placeholder="{message:JoinList/AddressLine1Input}">
                </div>
                <div class="cell medium-6">
                    <input type="text" name="address_line_2" placeholder="{message:JoinList/AddressLine2Input}">
                </div>
                <div class="cell medium-6">
                    <input type="text" name="city" placeholder="{message:JoinList/CityInput}">
                </div>
                <div class="cell medium-6">
                    <select name="state_code">
                        <option value="">{message:JoinList/StateInput}</option>
                        <!-- | Address__StateOption template | -->
                    </select>
                </div>
                <div class="cell medium-6">
                    <input type="text" name="region" placeholder="{message:JoinList/RegionInput}">
                </div>
                <div class="cell medium-6">
                    <input type="text" name="postal_code" placeholder="{message:JoinList/PostalCodeInput}">
                </div>
                <div class="cell medium-6">
                    <input type="text" name="zip_extension" placeholder="{message:JoinList/ZipExtensionInput}"
                        autocomplete="off" maxlength="4">
                </div>
            </div>


            <div class="ecp-section grid-x grid-margin-y grid-margin-x">
                <h3 class="cell">{message:JoinList/AdditionalInfoTitle}</h3>
                <p class="ecp-summary cell">{message:JoinList/AdditionalInfoInfo}</p>

                <div class="cell medium-6">
                <input type="text" name="birth_date" placeholder="{message:JoinList/BirthDateInput}">
                </div>
                <div class="cell medium-6">
                <input type="text" name="phone_1" placeholder="{message:JoinList/Phone1Input}">
                </div>
                <div class="cell medium-6">
                <input type="text" name="phone_2" placeholder="{message:JoinList/Phone2Input}">
                </div>
                <div class="cell medium-6">
                <input type="text" name="mobile_phone" placeholder="{message:JoinList/MobilePhoneInput}">
                </div>
            </div>


            <div class="ecp-section grid-x grid-margin-y grid-margin-x" data-ecp-handle="customer_tags_section">
                <h3 class="cell">{message:JoinList/TagsTitle}</h3>
                <div class="cell" data-ecp-handle="customer_tags">
                    <!-- 
                | JoinList__TagSingle template |
                or
                | JoinList__TagMulti template | 
                -->
                </div>
            </div>

            <div class="ecp-section grid-x grid-margin-y grid-margin-x">
                <label class="cell">{message:JoinList/NotesLabel}</label>
                <textarea class="cell" name="account_note" rows="4"></textarea>
            </div>
            <button data-ecp-action="save">{message:JoinList/SaveButton}</button>
        </form>
    </div>
</div>