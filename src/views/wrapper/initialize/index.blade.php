@if($s_init != "{version}")
  <style class="init-error-style">@import url("/extensions/skatheme/libraries/initStyles.css?t={timestamp}");</style>
  @if(Auth::check() != true)
    @include('blueprint.extensions.skatheme.wrapper.initialize.auth')
  @else
    @if(Auth::user()->root_admin == 1)
      <div class="init-error-bg">
        <div class="init-error-overlay">
          <div class="ska-onboarding-container">
            <p class="ska-onboarding-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none"><path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#a855f7" stroke-width="2" stroke-linejoin="round"/><path d="M2 17L12 22L22 17" stroke="#22d3ee" stroke-width="2" stroke-linejoin="round"/></svg>
              <span>Nebula</span>
            </p>
            <div class="ska-onboarding-content">
              <p class="ska-onboarding-text">Greetings traveler, welcome to <b>SKA Theme</b>! Get started by <i>customizing</i> your Pterodactyl appearance in <b>SKA Theme Designer</b>.</p>
              <p align="center"><a href="/admin/extensions/skatheme"><button type="button" class="ska-onboarding-button">Get started <i class="bi bi-arrow-right"></i></button></a></p>
            </div>
          </div>
        </div>
      </div>
    @else
      <div class="init-error-bg">
        <div class="init-error-overlay">
          <p>You do not have administrator permissions on this panel and are thus unable to configure SKA Theme. Please wait for an administrator to configure SKA Theme for you to be able to manage your servers again.</p>
        </div>
      </div>
    @endif
  @endif
@endif