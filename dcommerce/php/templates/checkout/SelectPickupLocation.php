<div class="grid-x ecp-component ecp_SelectPickupLocation">
  <div class="cell small-10 small-10-offset-1 large-8 large-offset-2">
    <h1>{message:SelectPickupLocation/Title}</h1>
    <div data-ecp-handle="progress_bar">
        <!-- | Checkout__ProgressBar template | -->
    </div>
    <p class="ecp-summary">{message:SelectPickupLocation/Summary}</p>
    <p><a href="#" class="ecp-option" data-ecp-action="load-shipping">{message:SelectPickupLocation/ShipLink}</a></p>
    <form class="ecp-form">
        <div class="ecp-x-list" data-ecp-handle="pickup_locations">
        <!-- | SelectPickupLocation__Location template | -->
        </div>
    </form>
  </div>
</div>