<div class="grid-x login login-create">
    <div class="ecp-component ecp_CreateAccount cell medium-8 medium-offset-2">
        <h1>{message:CreateAccount/Title}</h1>
        <p class="ecp-summary">{message:CreateAccount/EmailAddress_template}</p>
        <form class="ecp-form grid-x grid-margin-y grid-margin-x">
            <div class="cell medium-6">
                <input type="text" name="first_name" placeholder="{message:CreateAccount/FirstNameInput}">
            </div>
            <div class="cell medium-6">
                <input type="text" name="last_name" placeholder="{message:CreateAccount/LastNameInput}">
            </div>
            <div class="cell medium-6">
                <input type="password" name="password_1" placeholder="{message:CreateAccount/PasswordInput1}">
            </div>
            <div class="cell medium-6">
                <input type="password" name="password_2" placeholder="{message:CreateAccount/PasswordInput2}">
            </div>
            <div class="cell medium-6">
                <input type="text" name="phone_1" placeholder="{message:CreateAccount/Phone1Input}">
            </div>
            <div class="cell">
                <div class="grid-x grid-margin-x">
                    <p class="ecp-form-tip cell">{message:CreateAccount/Phone1Tip}</p>
                    <div class="cell medium-6">
                        <button class="ecp-secondary" data-ecp-action="cancel">{message:CreateAccount/CancelButton}</button>
                    </div>
                    <div class="cell medium-6">
                        <button data-ecp-action="save">{message:CreateAccount/SaveButton}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>