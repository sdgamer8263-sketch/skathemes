<!-- Import scripts. -->
@if(Auth::check())
  <script src="/extensions/skatheme/libraries/fetchStyle.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/currentPage.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/fetchServerId.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/statusOrb.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/customContextMenu.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/copyapi.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/assignElementIds.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/fileMode.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/insertAboveApp.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/sidebarMiddleClick.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/viewportVisibility.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/floatingWindows.js?{timestamp}"></script>
  @if($s_keyboard_shortcuts == "1")<script src="/extensions/skatheme/libraries/keybinds.js?{timestamp}"></script>@endif
  @if($s_keyboard_shortcuts == "1")<script src="/extensions/skatheme/libraries/keybindsModal.js?{timestamp}"></script>@endif
  @if($s_alert == "1")<script src="/extensions/skatheme/libraries/assets/marked.min.js?{timestamp}"></script>@endif
  <script src="/extensions/skatheme/libraries/assets/popper.min.js?{timestamp}"></script>
  <script src="/extensions/skatheme/libraries/assets/tippy-bundle.umd.min.js?{timestamp}"></script>
@endif
<script src="/extensions/skatheme/libraries/errorHandler.js?{timestamp}"></script>
<script src="/extensions/skatheme/libraries/locationchange.js?{timestamp}"></script>
<?php
  // This is here to simplify setting up the Nebula demo panel. If you'd like to remove it, go ahead.
  if($blueprint->dbGet("skatheme", "ska_tracking") == 1) { echo('<script defer="" data-domain="demo.skathemes.github.io" src="https://plausible.github.com/sdgamer8263-sketch/js/script.js"></script>'); }
?>

<!-- Import stylesheets. -->
<style>
  @import url("/extensions/skatheme/libraries/statusOrb.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/fixUserInterfaceBugs.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/customContextMenu.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/fileMode.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/borderRadius.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/extendedStyles.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/tagStyling.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/floatingWindows.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/patterns.css?{timestamp}");
  @import url("/extensions/skatheme/libraries/animations.css?{timestamp}");

  @if($s_server_list == "cards")
    @import url("/extensions/skatheme/libraries/serversCards.css?{timestamp}");
  @else
    @import url("/extensions/skatheme/libraries/serversList.css?{timestamp}");
  @endif

  @if($s_keyboard_shortcuts == "1")
    @import url("/extensions/skatheme/libraries/keybindsModal.css?{timestamp}");
  @endif

  @if($s_server_overview_graphs == "0")
    @import url("/extensions/skatheme/libraries/hideServerOverviewGraphs.css?{timestamp}");
  @endif

  @if($s_dashboard_transparency != "0")
    @import url("/extensions/skatheme/libraries/transparentUI.css?{timestamp}");
    @import url("/extensions/skatheme/libraries/extendedStylesTransparency.css?{timestamp}");
  @endif

  @if($s_sidebar_hover_tooltip == "1")
    @import url("/extensions/skatheme/libraries/sidebarTooltip.css?{timestamp}");
  @endif

  @if($s_website_links == "1")
    @import url("/extensions/skatheme/libraries/weblinks.css?{timestamp}");
  @endif

  @if($s_alert == "1")
    @import url("/extensions/skatheme/libraries/alert.css?{timestamp}");
  @endif

  @if($s_watermark_auth != "0")
    @import url("/extensions/skatheme/libraries/authWatermark.css?{timestamp}");
  @endif

  @if($blueprint->dbGet("settings", "recaptcha:enabled") == "true")
    @import url("/extensions/skatheme/libraries/recaptcha.css?{timestamp}");
  @endif

  @if(!Auth::check())
    @import url("/extensions/skatheme/libraries/hideRecaptcha.css?{timestamp}");
    @import url("/extensions/skatheme/libraries/extendedStylesAuth.css?{timestamp}");
  @endif

  <?php
    /* Icon theme imports
    *
    * Nebula fetches icon themes from multiple sources: cdn.skathemes.github.io and private.skathemes.github.io.
    * "private.skathemes.github.io" is only used for assets we ("Emma (github.com/sdgamer8263-sketch)") had to purchase a commercial license for.
    */
  ?>
  @import url("https://cdn.skathemes.github.io/icons/bootstrap/bootstrap-icons.css");
  @if($s_icon_fallback == "feather")                 @import url("https://cdn.skathemes.github.io/icons/feather/feather-icons.css"); @endif
  @if($s_icon_fallback == "lucide")                  @import url("https://cdn.skathemes.github.io/icons/lucide/lucide.css"); @endif
  @if($s_icon_fallback == "material")                @import url("https://cdn.skathemes.github.io/icons/materialdesign/default/materialdesignicons.css"); @endif
  @if($s_icon_fallback == "material-light")          @import url("https://cdn.skathemes.github.io/icons/materialdesign/light/materialdesignicons-light.css"); @endif
  @if($s_icon_fallback == "fontawesome")             @import url("https://cdn.skathemes.github.io/icons/fontawesome/fontawesome.css"); @endif
  @if($s_icon_fallback == "eva-outline")             @import url("https://cdn.skathemes.github.io/icons/eva/evaicons.css"); @endif
  @if($s_icon_fallback == "eva-solid")               @import url("https://cdn.skathemes.github.io/icons/eva/evaicons.css"); @endif
  @if($s_icon_fallback == "remix-outline")           @import url("https://cdn.skathemes.github.io/icons/remix/remixicon.css"); @endif
  @if($s_icon_fallback == "remix-solid")             @import url("https://cdn.skathemes.github.io/icons/remix/remixicon.css"); @endif
  @if($s_icon_fallback == "tabler")                  @import url("https://cdn.skathemes.github.io/icons/tabler/tabler.css"); @endif
  @if($s_icon_fallback == "octicons")                @import url("https://cdn.skathemes.github.io/icons/octicons/octicons.css"); @endif
  @if($s_icon_fallback == "akar-icons")              @import url("https://cdn.skathemes.github.io/icons/akar-icons/akar-icons.css"); @endif
  @if($s_icon_fallback == "hugeicons-solid")         @import url("https://private.skathemes.github.io/icons/hugeicons/hugeicons-font.css"); @endif
  @if($s_icon_fallback == "hugeicons-stroke")        @import url("https://private.skathemes.github.io/icons/hugeicons/hugeicons-font.css"); @endif
</style>
