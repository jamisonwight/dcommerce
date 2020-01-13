<div class="grid-x ecp-component ecp_ResetPassword">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:ResetPassword/Title}</h1>
        <p class="ecp-summary">{message:ResetPassword/Summary}</p>
        <form class="ecp-form">
            <div class="cell medium-6">
                <input type="password" name="new_password_1" placeholder="{message:ResetPassword/NewPasswordInput1}">
            </div>
            <div class="cell medium-6">
                <input type="password" name="new_password_2" placeholder="{message:ResetPassword/NewPasswordInput2}">
            </div>
            <button data-ecp-action="submit">{message:ResetPassword/SaveButton}</button>
            <div><a href="#" data-ecp-action="forgot">{message:ResetPassword/ForgotLink}</a>
        </form>
    </div>
</div>