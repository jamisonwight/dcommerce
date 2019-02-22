<div class="grid-x login">
    <div class="cell medium-4 medium-offset-4 ecp-component ecp_LocateAccount">
        <h1>{message:LocateAccount/Title}</h1>
        <p class="ecp-summary">{message:LocateAccount/Summary}</p>
        <form class="ecp-form">
            <div class="ecp-form-fieldset">
                <input class="sign-in_email" type="text" name="username" placeholder="{message:LocateAccount/EmailInput}">
            </div>
            <button data-ecp-action="locate">{message:LocateAccount/LocateButton}</button>
        </form>
        <ul class="ecp-item-list">
            <li><a href="#" class="ecp-option" data-ecp-action="forgot">{message:LocateAccount/ForgotLink}</a></li>
            <li><a href="#" class="ecp-option" data-ecp-action="signup">{message:LocateAccount/SignupLink}</a></li>
        </ul>
    </div>
</div>