<div class="grid-x login account-found">
    <div class="cell medium-4 medium-offset-4 ecp-component ecp_AccountFound">
        <h1>{message:AccountFound/Title}</h1>
        <p class="ecp-summary">{message:AccountFound/Summary_template}</p>
        <form class="ecp-form">
            <div class="ecp-form-fieldset">
                <input type="password" name="password" placeholder="{message:AccountFound/PasswordInput}">
            </div>
            <div class="grid-x grid-margin-x ecp-clearfix">
                <span class="cell medium-6">
                    <button class="ecp-secondary" data-ecp-action="cancel">{message:AccountFound/CancelButton}</button>
                </span>
                <span class="cell medium-6">
                    <button data-ecp-action="login">{message:AccountFound/LoginButton}</button>
                </span>
            </div>
            <a href="#" class="ecp-option" data-ecp-action="forgot">{message:AccountFound/ForgotLink}</a>
        </form>
    </div>
</div>