<div class="ecp-list-item" data-ecp-handle="shipping_address" data-ecp-id="{message:address_id}">
  <div class="ecp-columns ecp-clearfix">
    <div class="ecp-columns-left">
      <input type="radio" name="address_id" value="{message:address_id}">
    </div>
    <div class="ecp-columns-right">
      <dl class="ecp-address">
        <dt>{message:first_name} {message:last_name}</dt>
        <dd data-ecp-handle="company_name">{message:company_name}</dd>
        <dd>{message:address_line_1}</dd>
        <dd data-ecp-handle="address_line_2">{message:address_line_2}</dd>
        <dd>{message:city}, <span data-ecp-handle="state_code">{message:state_code}</span><span data-ecp-handle="region">{message:region}</span> {message:postal_code}<span  data-ecp-handle="zip_extension">-{message:zip_extension}</span></dd>
        <dd>{message:country_name}</dd>
        <dd data-ecp-handle="phone">{message:EditClubSubscription/Phone} {message:phone}</dd>
      </dl>
    </div>
  </div>
</div>