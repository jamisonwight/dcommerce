<div class="grid-x account account_EditProfile">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_EditProfile">
        <h1>{message:EditProfile/Title}</h1>
        <p class="ecp-summary">{message:EditProfile/Summary}</p>
        <form class="grid-x grid-margin-x grid-margin-y ecp-form">
            <h3 class="cell">{message:EditProfile/PersonalInfoTitle}</h3>
            <div class="cell large-4">
                <input type="text" name="first_name" placeholder="{message:EditProfile/FirstNameInput}">
            </div>
            <div class="cell large-4">
                <input type="text" name="last_name" placeholder="{message:EditProfile/LastNameInput}">
            </div>
            <div class="cell large-4">
                <input type="text" name="company_name" placeholder="{message:EditProfile/CompanyNameInput}">
            </div>
            <div class="cell large-4">
                <input type="text" name="phone_1" placeholder="{message:EditProfile/Phone1Input}">
            </div>
            <div class="cell large-4">
                <input type="text" name="phone_2" placeholder="{message:EditProfile/Phone2Input}">
            </div>
            <div class="cell large-4">
                <input type="text" name="mobile_phone" placeholder="{message:EditProfile/MobilePhoneInput}">
            </div>
            <div class="cell large-4">
                <input type="text" name="birth_date" placeholder="{message:EditProfile/BirthDateInput}">
            </div>

            <h3 class="cell">{message:EditProfile/PreferencesTitle}</h3>
            <p class="cell ecp-form-tip">{message:EditProfile/PreferencesTip}</p>
            <ul class="cell ecp-form-checkboxes">
                <li><label><input type="checkbox" name="is_ok_to_email">{message:EditProfile/OKToEmail}</label></li>
                <li><label><input type="checkbox" name="is_ok_to_mail">{message:EditProfile/OKToMail}</label></li>
            </ul>
            <div class="cell">
                <div class="grid-x grid-margin-x ecp-clearfix">
                    <span class="cell medium-6">
                        <button class="ecp-secondary" data-ecp-action="cancel">{message:EditProfile/CancelButton}</button>
                    </span>
                    <span class="cell medium-6">
                        <button data-ecp-action="save">{message:EditProfile/SaveButton}</button>
                    </span>
                </div>
            </div>
        </form>
        <a href="/store/?view=account">< Back to Account</a>
    </div>
</div>