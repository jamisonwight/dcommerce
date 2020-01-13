<div class="grid-x ecp-component ecp_Reservations">
    <form class="ecp-form cell medium-8 medium-offset-2">
        <h1>{message:Reservations/Title}</h1>
        <p class="ecp-summary">{message:Reservations/Summary}</p>
        <div>
            <div class="ecp-section" data-ecp-handle="requested_section">
                <h3>{message:Reservations/RequestedReservationsTitle}</h3>
                <div data-ecp-handle="requested">
                    <!-- | Reservations__Reservation template -->
                </div>
            </div>
            <div class="ecp-section" data-ecp-handle="future_section">
                <h3>{message:Reservations/FutureReservationsTitle}</h3>
                <div data-ecp-handle="future">
                    <!-- | Reservations__Reservation template -->
                </div>
            </div>
            <div class="ecp-section" data-ecp-handle="past_section">
                <h3>{message:Reservations/PastReservationsTitle}</h3>
                <div data-ecp-handle="past">
                    <!-- | Reservations__Reservation template -->
                </div>
            </div>
        </div>
        <button class="ecp-secondary" data-ecp-action="load-dashboard">{message:Reservations/HomeButton}</button>
    </form>
</div>