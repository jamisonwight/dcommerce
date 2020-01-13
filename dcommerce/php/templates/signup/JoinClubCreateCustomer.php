<div class="grid-x ecp-component ecp_JoinClub__CreateCustomer">
    <div class="cell medium-8 medium-offset-2">
        <h1>{message:club_tier_name}</h1>
        <div data-ecp-handle="progress_bar">
            <!-- | JoinClub__ProgressBar template | -->
        </div>
        <p class="ecp-summary">{message:JoinClub/CreateCustomer/Summary}</p>
        <form class="ecp-form grid-x grid-margin-x grid-margin-y">
            <div class="cell medium-4">
                <input type="text" name="first_name" placeholder="{message:JoinClub/CreateCustomer/FirstNameInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="last_name" placeholder="{message:JoinClub/CreateCustomer/LastNameInput}">
            </div>
            <div class="cell">
                <p class="ecp-form-tip">{message:JoinClub/CreateCustomer/CredentialsTip}</p>
            </div>
            <div class="cell medium-4">
                <input type="text" name="email_address" placeholder="{message:JoinClub/CreateCustomer/EmailInput}">
            </div>
            <div class="cell medium-4">
                <input type="password" name="password_1" placeholder="{message:JoinClub/CreateCustomer/PasswordInput1}">
            </div>
            <div class="cell medium-4">
                <input type="password" name="password_2" placeholder="{message:JoinClub/CreateCustomer/PasswordInput2}">
            </div>
            <div class="cell">
                <p class="ecp-form-tip">{message:JoinClub/CreateCustomer/PhoneAndBirthDateTip}</p>
            </div>
            <div class="cell medium-4">
                <input type="text" name="birth_date" placeholder="{message:JoinClub/CreateCustomer/BirthDateInput}">
            </div>
            <div class="cell medium-4">
                <input type="text" name="phone" placeholder="{message:JoinClub/CreateCustomer/PhoneInput}">
            </div>
            <div class="cell">
                <button data-ecp-action="continue">{message:JoinClub/CreateCustomer/ContinueButton}</button>
            </div>
        </form>
    </div>
</div>