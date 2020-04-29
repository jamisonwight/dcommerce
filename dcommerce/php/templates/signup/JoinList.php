<div class="ecp-component ecp_JoinList">
  <h2>{message:JoinList/Title}</h2>
  <div class="ecp-html-content"><p>By joining our mailing list, you are giving consent to be alerted to special events & offerings from our winery. If you have questions, please refer to our <a href="/privacy-policy/" target="_blank">Privacy Policy</a>.</p></div>
  <form class="ecp-form">
    <div class="ecp-section">
      <h3>{message:JoinList/LoginTitle}</h3>
      <p class="ecp-summary">{message:JoinList/LoginInfo}</p>
      <div class="ecp-form-fieldset-scrunched">
        <input type="text" name="email_address" placeholder="{message:JoinList/EmailInput}">
        <input type="password" name="password_1" placeholder="{message:JoinList/PasswordInput1}">
        <input type="password" name="password_2" placeholder="{message:JoinList/PasswordInput2}">
      </div>
    </div>
    <div class="ecp-section">
      <h3>{message:JoinList/AddressTitle}</h3>
      <p class="ecp-summary">{message:JoinList/AddressInfo}</p>
      <div class="ecp-form-fieldset">
      <select name="country_code" data-ecp-action="change-country">
        <!-- | Address__CountryOption template | -->
      </select>
      </div>
      <div class="ecp-form-fieldset-scrunched">
        <input type="text" name="first_name" placeholder="{message:JoinList/FirstNameInput}">
        <input type="text" name="last_name" placeholder="{message:JoinList/LastNameInput}">
        <input type="text" name="company_name" placeholder="{message:JoinList/CompanyNameInput}">
        <input type="text" name="address_line_1" placeholder="{message:JoinList/AddressLine1Input}">
        <input type="text" name="address_line_2" placeholder="{message:JoinList/AddressLine2Input}">
        <input type="text" name="city" placeholder="{message:JoinList/CityInput}">
        <select name="state_code">
          <option value="">{message:JoinList/StateInput}</option>
          <!-- | Address__StateOption template | -->
        </select>
        <input type="text" name="region" placeholder="{message:JoinList/RegionInput}">
        <input type="text" name="postal_code" placeholder="{message:JoinList/PostalCodeInput}">
        <input type="text" name="zip_extension" placeholder="{message:JoinList/ZipExtensionInput}" autocomplete="off" maxlength="4">
      </div>
    </div>
    <div class="ecp-section">
      <h3>{message:JoinList/AdditionalInfoTitle}</h3>
      <p class="ecp-summary">{message:JoinList/AdditionalInfoInfo}</p>
      <div class="ecp-form-fieldset-scrunched">
        <input type="text" name="birth_date" placeholder="{message:JoinList/BirthDateInput}">
      </div>
      <div class="ecp-form-fieldset-scrunched">
        <input type="text" name="phone_1" placeholder="{message:JoinList/Phone1Input}">
        <input type="text" name="phone_2" placeholder="{message:JoinList/Phone2Input}">
        <input type="text" name="mobile_phone" placeholder="{message:JoinList/MobilePhoneInput}">
      </div>
    </div>
    <div class="ecp-section" data-ecp-handle="customer_tags_section">
      <h3>{message:JoinList/TagsTitle}</h3>
      <div data-ecp-handle="customer_tags">
        <!-- 
          | JoinList__TagSingle template |
          or
          | JoinList__TagMulti template | 
        -->
      </div>
    </div>
    <div class="ecp-section">
      <label>{message:JoinList/NotesLabel}</label>
      <textarea name="account_note" rows="4"></textarea>
    </div>
    <button data-ecp-action="save">{message:JoinList/SaveButton}</button>
  </form>
</div>