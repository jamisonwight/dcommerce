<div class="grid-x login logout">
    <div class="cell medium-8 medium-offset-2 ecp-component ecp_Logout">
        <h1>{message:Logout/Title}?</h1>
        <p class="ecp-summary">{message:Logout/Summary}</p>
        <form class="ecp-form">
            <div class="ecp-grid">
                <div class="grid-x grid-margin-x ecp-clearfix">
                    <span class="cell medium-6">
                        <button class="ecp-secondary" data-ecp-action="cancel">{message:Logout/CancelButton}</button>
                    </span>
                    <span class="cell medium-6">
                        <button data-ecp-action="logout">{message:Logout/LogoutButton}</button>
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>