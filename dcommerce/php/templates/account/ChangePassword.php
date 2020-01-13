<div class="grid-x grid-padding-y account account_ChangePassword">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_ChangePassword">
        <h1>{message:ChangePassword/Title}</h1>
        <p class="ecp-summary">{message:ChangePassword/Summary}</p>
        <form class="ecp-form grid-x grid-margin-y">
            <div class="cell">
                <input type="text" name="username" placeholder="{message:ChangePassword/EmailInput}">
            </div>
            <div class="cell">
                <input type="password" name="password" placeholder="{message:ChangePassword/PasswordInput}">
            </div>
            <div class="cell">
                <input type="password" name="new_password_1" placeholder="{message:ChangePassword/NewPasswordInput1}">
                <input type="password" name="new_password_2" placeholder="{message:ChangePassword/NewPasswordInput2}">
            </div>
            <div class="cell">
                <div class="grid-x grid-margin-x ecp-clearfix">
                    <span class="cell medium-6">
                        <button class="ecp-secondary" data-ecp-action="cancel">{message:ChangePassword/CancelButton}</button>
                    </span>
                    <span class="cell medium-6">
                        <button data-ecp-action="save">{message:ChangePassword/ChangeButton}</button>
                    </span>
                </div>
            </div>
        </form>
        <a href="/store/?view=account">< Back to Account</a>
    </div>
</div>