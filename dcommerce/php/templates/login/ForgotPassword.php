<div class="grid-x login forgot-password">
    <div class="cell medium-4 medium-offset-4 ecp-component ecp_ForgotPassword">
        <h1>{message:ForgotPassword/Title}</h1>
        <p class="ecp-summary">{message:ForgotPassword/Summary}</p>
        <form class="ecp-form grid-x grid-margin-x">
            <div class="cell ecp-form-fieldset">
                <input class="sign-in_email" type="text" name="username" placeholder="{message:ForgotPassword/EmailInput}">
            </div>
            <button class="cell" data-ecp-action="submit">{message:ForgotPassword/SendButton}</button>
        </form>
        <ul class="ecp-item-list">
            <li><a href="#" class="ecp-option" data-ecp-action="login">{message:ForgotPassword/LoginLink}</a></li>
            <li><a href="#" class="ecp-option" data-ecp-action="signup">{message:ForgotPassword/SignupLink}</a></li>
        </ul>
    </div>
</div>