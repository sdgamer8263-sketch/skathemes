<style id="ska-variables">
  <?php
    $__transparency="";
    if($s_dashboard_transparency == "1") { $__transparency="BB"; }
    elseif($s_dashboard_transparency == "2") { $__transparency="99"; }
    elseif($s_dashboard_transparency == "3") { $__transparency="60"; }
  ?>

  /* Variables */
  :root {
    --sidebarPrimary: {{ $s_palette_sidebar_1 }};
    --sidebarPrimaryHover: {{ $s_palette_sidebar_2 }};
    --sidebarSecondary: {{ $s_palette_sidebar_3 }};
    --sidebarSecondaryHover: {{ $s_palette_sidebar_4 }};
    --sidebarSecondaryActive: {{ $s_palette_sidebar_5 }};
    --sidebarSecondarySelected: {{ $s_palette_sidebar_6 }};
    --sidebarButtonActive: {{ $s_palette_sidebar_8 }};

    --pagePrimary: {{ $s_palette_dashboard_1 }};
    --pagePrimaryHover: {{ $s_palette_dashboard_2 }};
    --pageSecondary: {{ $s_palette_dashboard_3 }}{{ $__transparency }};
    --pageSecondaryHover: {{ $s_palette_dashboard_4 }}{{ $__transparency }};
    --pageSecondaryActive: {{ $s_palette_dashboard_5 }}{{ $__transparency }};
    --pageSecondarySelected: {{ $s_palette_dashboard_6 }}{{ $__transparency }};
    --pageButtonDefault: {{ $s_palette_dashboard_8 }};
    --pageButtonHover: {{ $s_palette_dashboard_9 }};

    --statusOffline: {{ $s_palette_status_offline }};
    --statusError: {{ $s_palette_status_error }};
    --statusStarting: {{ $s_palette_status_starting }};
    --statusOnline: {{ $s_palette_status_online }};

    --authA: {{ $s_palette_auth_1 }};
    --authB: {{ $s_palette_auth_2 }};
    --authC: {{ $s_palette_auth_3 }};
    --authD: {{ $s_palette_auth_4 }};
    --authE: {{ $s_palette_auth_5 }};
    --authF: {{ $s_palette_auth_6 }};
    --authG: {{ $s_palette_auth_7 }};
    --authH: {{ $s_palette_auth_8 }};
    
    --sidebarBackground: {{ $s_palette_sidebar_7 }};
    --pageBackground: {{ $s_palette_dashboard_7 }};

    --borderRadius: {{ $s_border_radius }}px;
    --borderRadiusSidebar: {{ $s_sidebar_border_radius }}px;
    --borderRadiusAuth: 10px;

    --patternSizeAuth: {{ $s_auth_background_magicsize }}px;
    --patternSizeDashboard: {{ $s_background_magicsize }}px;

    /* ── Arix: font & glass ── */
    --ska-font: '{{ $s_font_family }}', system-ui, -apple-system, sans-serif;
    <?php
      $__glass = '0';
      if($s_glass_intensity == '1') { $__glass = '0.7'; }
      elseif($s_glass_intensity == '2') { $__glass = '0.5'; }
      elseif($s_glass_intensity == '3') { $__glass = '0.25'; }
      $__blur = '0px';
      if($s_glass_intensity == '1') { $__blur = '8px'; }
      elseif($s_glass_intensity == '2') { $__blur = '16px'; }
      elseif($s_glass_intensity == '3') { $__blur = '24px'; }
    ?>
    --ska-glass-alpha: {{ $__glass }};
    --ska-glass-blur: {{ $__blur }};
  }

  /* ── Font ── */
  @if($s_font_family && $s_font_family !== 'system')
  * { font-family: var(--ska-font) !important; }
  @endif

  /* ── Light mode override ── */
  @if($s_dark_mode === 'light')
  :root {
    --pageBackground: #f1f5f9;
    --pagePrimary: #1e293b;
    --pagePrimaryHover: #334155;
    --pageSecondary: #e2e8f0cc;
    --pageSecondaryHover: #cbdaeccc;
    --pageSecondaryActive: #c8d9eacc;
    --pageSecondarySelected: #bfcfe0cc;
    --sidebarBackground: #1e1b4b;
    --sidebarPrimary: #c4b5fd;
    --sidebarSecondary: #2d2b6b;
  }
  @endif

</style>