<div class="grid-x login login-create">
    <div class="ecp-component ecp_CreateAccount">
        <h2>{message:CreateAccount/Title}</h2>
        <p class="ecp-summary">{message:CreateAccount/EmailAddress_template}</p>
        <form class="ecp-form">
            <div class="ecp-form-fieldset-scrunched">
                <input type="text" name="first_name" placeholder="{message:CreateAccount/FirstNameInput}">
                <input type="text" name="last_name" placeholder="{message:CreateAccount/LastNameInput}">
            </div>
            <div class="ecp-form-fieldset-scrunched">
                <input type="password" name="password_1" placeholder="{message:CreateAccount/PasswordInput1}">
                <input type="password" name="password_2" placeholder="{message:CreateAccount/PasswordInput2}">
            </div>
            <div class="ecp-form-fieldset-scrunched">
                <input type="text" name="phone_1" placeholder="{message:CreateAccount/Phone1Input}">
            </div>
            <p class="ecp-form-tip">{message:CreateAccount/Phone1Tip}</p>
            <div class="ecp-grid-row ecp-clearfix">
                <span class="ecp-grid-col-6">
                    <button class="ecp-secondary" data-ecp-action="cancel">{message:CreateAccount/CancelButton}</button>
                </span>
                <span class="ecp-grid-col-6">
                    <button data-ecp-action="save">{message:CreateAccount/SaveButton}</button>
                </span>
            </div>
        </form>
    </div>
</div>