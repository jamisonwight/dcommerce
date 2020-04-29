<div class="grid-x signup">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_CreateCustomer">
        <h1>{message:CreateCustomer/Title}</h1>
        <p class="ecp-summary">{message:CreateCustomer/Summary}:</p>
        <form class="ecp-form">
            <h3>{message:CreateCustomer/PersonalInfoTitle}</h3>
            <div class="grid-x grid-margin-x grid-padding-y ecp-form-fieldset-scrunched">
                <div class="cell medium-6">
                    <input type="text" name="first_name" placeholder="{message:CreateCustomer/FirstNameInput}">
                </div>
                <div class="cell medium-6">
                     <input type="text" name="last_name" placeholder="{message:CreateCustomer/LastNameInput}">
                </div>
                <div class="cell medium-6">
                     <input type="text" name="company_name" placeholder="{message:CreateCustomer/CompanyNameInput}">
                </div>
                <div class="cell medium-6">
                     <input type="text" name="birth_date" placeholder="{message:CreateCustomer/BirthDateInput}">
                </div>
                <div class="cell medium-4">
                     <input type="text" name="phone_1" placeholder="{message:CreateCustomer/Phone1Input}">
                </div>
                <div class="cell medium-4">
                     <input type="text" name="phone_2" placeholder="{message:CreateCustomer/Phone2Input}">
                </div>
                <div class="cell medium-4">
                     <input type="text" name="mobile_phone" placeholder="{message:CreateCustomer/MobilePhoneInput}">
                </div>
            </div>
            <!-- Login creds -->
            <h3>{message:CreateCustomer/LoginTitle}</h3>
                <div class="cell">
                     <input type="text" name="email_address" placeholder="{message:CreateCustomer/EmailInput}">
                </div>
                <div class="cell medium-4">
                     <input type="password" name="password_1" placeholder="{message:CreateCustomer/PasswordInput1}">
                </div>
                <div class="cell medium-4">
                     <input type="password" name="password_2" placeholder="{message:CreateCustomer/PasswordInput2}">
                </div>
                <p class="ecp-form-tip">{Cmessage:CreateCustomer/redentialsTip}</p>
                <button data-ecp-action="save">{message:CreateCustomer/SaveButton}</button>
            </div>
        </form>
    </div>
</div>