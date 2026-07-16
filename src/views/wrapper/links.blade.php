@if($s_website_links == "1" && Auth::check())
  <!-- Weblinks -->
  <div class="ska-weblinks">
    <div class="weblink-container">
      <!-- Websites -->
      @if($s_weblink_support != "")<a href="{{ $s_weblink_support }}" target="_blank"><button class="weblink" to="support"><i class="bi bi-life-preserver"></i> Support</button></a>@endif
      @if($s_weblink_billing != "")<a href="{{ $s_weblink_billing }}" target="_blank"><button class="weblink" to="billing"><i class="bi bi-currency-exchange"></i> Billing</button></a>@endif
      @if($s_weblink_status != "")<a href="{{ $s_weblink_status }}" target="_blank"><button class="weblink" to="status"><i class="bi bi-bar-chart-fill"></i> Status</button></a>@endif
      <!-- Social -->
      @if($s_weblink_social_discord != "")
        <a href="https://discord.com/invite/{{ $s_weblink_social_discord }}" target="_blank"><button class="weblink-social" to="discord"><i class="bi bi-discord"></i> Discord</button></a>@endif
      @if($s_weblink_social_github != "")<a href="https://github.com/{{ $s_weblink_social_github }}" target="_blank"><button class="weblink-social" to="github"><i class="bi bi-github"></i> GitHub</button></a>@endif
    </div>
  </div>
  <style>
    .weblink-social, .weblink {
      @if($s_website_links_align == "0") --weblink_float: left; --weblink_mleft: 0px; --weblink_mright: 10px; --weblinkalt_float: right; --weblinkalt_mleft: 10px; --weblinkalt_mright: 0px;
      @else --weblink_float: right; --weblink_mleft: 10px; --weblink_mright: 0px; --weblinkalt_float: left; --weblinkalt_mleft: 0px; --weblinkalt_mright: 10px; @endif
    }
  </style>
@endif