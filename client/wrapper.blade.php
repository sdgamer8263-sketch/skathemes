<?php
  $skatheme_data = $blueprint->dbGetMany('skatheme', [
    'sidebar_home',
    'sidebar_admin',
    'sidebar_account',
    'sidebar_logout',
    'sidebar_server_terminal',
    'sidebar_server_files',
    'sidebar_server_databases',
    'sidebar_server_schedules',
    'sidebar_server_users',
    'sidebar_server_backups',
    'sidebar_server_network',
    'sidebar_server_startup',
    'sidebar_server_settings',
    'sidebar_server_activity',
    'sidebar_server_more',
    'sidebar_account_account',
    'sidebar_account_api',
    'sidebar_account_ssh',
    'sidebar_account_activity',
    'sidebar_account_more',
    'icon_scale',
    'watermark',
    'init',
    'background_image',
    'sidebar_background',
    'content_background',
    'background_appearance',
    'background_magic',
    'background_magicsize',
    'auth_background_image',
    'auth_background_appearance',
    'auth_background_magic',
    'auth_background_magicsize',
    'palette_dashboard_1',
    'palette_dashboard_2',
    'palette_dashboard_3',
    'palette_dashboard_4',
    'palette_dashboard_5',
    'palette_dashboard_6',
    'palette_dashboard_7',
    'palette_dashboard_8',
    'palette_dashboard_9',
    'palette_sidebar_1',
    'palette_sidebar_2',
    'palette_sidebar_3',
    'palette_sidebar_4',
    'palette_sidebar_5',
    'palette_sidebar_6',
    'palette_sidebar_7',
    'palette_sidebar_8',
    'palette_auth_1',
    'palette_auth_2',
    'palette_auth_3',
    'palette_auth_4',
    'palette_auth_5',
    'palette_auth_6',
    'palette_auth_7',
    'palette_auth_8',
    'keyboard_shortcuts',
    'keybind_icons',
    'sidebar_hover_tooltip',
    'server_overview_graphs',
    'server_colored_power',
    'sidebar_always_visible_buttons',
    'icon_fallback',
    'dashboard_transparency',
    'page_indexing',
    'website_links',
    'weblink_support',
    'weblink_billing',
    'weblink_status',
    'weblink_social_discord',
    'weblink_social_github',
    'website_links_align',
    'alert',
    'alert_text',
    'alert_icon',
    'watermark_auth',
    'server_list',
    'reset',
    'border_radius',
    'sidebar_full',
    'sidebar_buttonstyle',
    'sidebar_customlogo',
    'auth_customlogo',
    'alert_position',
    'sidebar_border_radius',
    'alert_dismiss',
    'palette_status_offline',
    'palette_status_error',
    'palette_status_starting',
    'palette_status_online',
    'statusgradient_style',
    'sidebar_hover',
    'animations',
    'sidebar_separators',
    'font_family',
    'custom_css',
    'glass_intensity',
    'server_card_style',
    'dark_mode',
    'content_background',
  ]);
  $s_sidebar_home = $skatheme_data['sidebar_home'];
  $s_sidebar_admin = $skatheme_data['sidebar_admin'];
  $s_sidebar_account = $skatheme_data['sidebar_account'];
  $s_sidebar_logout = $skatheme_data['sidebar_logout'];
  $s_sidebar_server_terminal = $skatheme_data['sidebar_server_terminal'];
  $s_sidebar_server_files = $skatheme_data['sidebar_server_files'];
  $s_sidebar_server_databases = $skatheme_data['sidebar_server_databases'];
  $s_sidebar_server_schedules = $skatheme_data['sidebar_server_schedules'];
  $s_sidebar_server_users = $skatheme_data['sidebar_server_users'];
  $s_sidebar_server_backups = $skatheme_data['sidebar_server_backups'];
  $s_sidebar_server_network = $skatheme_data['sidebar_server_network'];
  $s_sidebar_server_startup = $skatheme_data['sidebar_server_startup'];
  $s_sidebar_server_settings = $skatheme_data['sidebar_server_settings'];
  $s_sidebar_server_activity = $skatheme_data['sidebar_server_activity'];
  $s_sidebar_server_more = $skatheme_data['sidebar_server_more'];
  $s_sidebar_account_account = $skatheme_data['sidebar_account_account'];
  $s_sidebar_account_api = $skatheme_data['sidebar_account_api'];
  $s_sidebar_account_ssh = $skatheme_data['sidebar_account_ssh'];
  $s_sidebar_account_activity = $skatheme_data['sidebar_account_activity'];
  $s_sidebar_account_more = $skatheme_data['sidebar_account_more'];
  $s_icon_scale = $skatheme_data['icon_scale'];
  $s_watermark = $skatheme_data['watermark'];
  $s_init = $skatheme_data['init'];
  $s_background_image = $skatheme_data['background_image'];
  $s_sidebar_background = $skatheme_data['sidebar_background'];
  $s_content_background = $skatheme_data['content_background'];
  $s_background_appearance = $skatheme_data['background_appearance'];
  $s_background_magic = $skatheme_data['background_magic'];
  $s_background_magicsize = $skatheme_data['background_magicsize'];
  $s_auth_background_image = $skatheme_data['auth_background_image'];
  $s_auth_background_appearance = $skatheme_data['auth_background_appearance'];
  $s_auth_background_magic = $skatheme_data['auth_background_magic'];
  $s_auth_background_magicsize = $skatheme_data['auth_background_magicsize'];
  $s_palette_dashboard_1 = $skatheme_data['palette_dashboard_1'];
  $s_palette_dashboard_2 = $skatheme_data['palette_dashboard_2'];
  $s_palette_dashboard_3 = $skatheme_data['palette_dashboard_3'];
  $s_palette_dashboard_4 = $skatheme_data['palette_dashboard_4'];
  $s_palette_dashboard_5 = $skatheme_data['palette_dashboard_5'];
  $s_palette_dashboard_6 = $skatheme_data['palette_dashboard_6'];
  $s_palette_dashboard_7 = $skatheme_data['palette_dashboard_7'];
  $s_palette_dashboard_8 = $skatheme_data['palette_dashboard_8'];
  $s_palette_dashboard_9 = $skatheme_data['palette_dashboard_9'];
  $s_palette_sidebar_1 = $skatheme_data['palette_sidebar_1'];
  $s_palette_sidebar_2 = $skatheme_data['palette_sidebar_2'];
  $s_palette_sidebar_3 = $skatheme_data['palette_sidebar_3'];
  $s_palette_sidebar_4 = $skatheme_data['palette_sidebar_4'];
  $s_palette_sidebar_5 = $skatheme_data['palette_sidebar_5'];
  $s_palette_sidebar_6 = $skatheme_data['palette_sidebar_6'];
  $s_palette_sidebar_7 = $skatheme_data['palette_sidebar_7'];
  $s_palette_sidebar_8 = $skatheme_data['palette_sidebar_8'];
  $s_palette_auth_1 = $skatheme_data['palette_auth_1'];
  $s_palette_auth_2 = $skatheme_data['palette_auth_2'];
  $s_palette_auth_3 = $skatheme_data['palette_auth_3'];
  $s_palette_auth_4 = $skatheme_data['palette_auth_4'];
  $s_palette_auth_5 = $skatheme_data['palette_auth_5'];
  $s_palette_auth_6 = $skatheme_data['palette_auth_6'];
  $s_palette_auth_7 = $skatheme_data['palette_auth_7'];
  $s_palette_auth_8 = $skatheme_data['palette_auth_8'];
  $s_keyboard_shortcuts = $skatheme_data['keyboard_shortcuts'];
  $s_keybind_icons = $skatheme_data['keybind_icons'];
  $s_sidebar_hover_tooltip = $skatheme_data['sidebar_hover_tooltip'];
  $s_server_overview_graphs = $skatheme_data['server_overview_graphs'];
  $s_server_colored_power = $skatheme_data['server_colored_power'];
  $s_sidebar_always_visible_buttons = $skatheme_data['sidebar_always_visible_buttons'];
  $s_icon_fallback = $skatheme_data['icon_fallback'];
  $s_dashboard_transparency = $skatheme_data['dashboard_transparency'];
  $s_page_indexing = $skatheme_data['page_indexing'];
  $s_website_links = $skatheme_data['website_links'];
  $s_weblink_support = $skatheme_data['weblink_support'];
  $s_weblink_billing = $skatheme_data['weblink_billing'];
  $s_weblink_status = $skatheme_data['weblink_status'];
  $s_weblink_social_discord = $skatheme_data['weblink_social_discord'];
  $s_weblink_social_github = $skatheme_data['weblink_social_github'];
  $s_website_links_align = $skatheme_data['website_links_align'];
  $s_alert = $skatheme_data['alert'];
  $s_alert_text = $skatheme_data['alert_text'];
  $s_alert_icon = $skatheme_data['alert_icon'];
  $s_watermark_auth = $skatheme_data['watermark_auth'];
  $s_server_list = $skatheme_data['server_list'];
  $s_reset = $skatheme_data['reset'];
  $s_border_radius = $skatheme_data['border_radius'];
  $s_sidebar_full = $skatheme_data['sidebar_full'];
  $s_sidebar_buttonstyle = $skatheme_data['sidebar_buttonstyle'];
  $s_sidebar_customlogo = $skatheme_data['sidebar_customlogo'];
  $s_auth_customlogo = $skatheme_data['auth_customlogo'];
  $s_alert_position = $skatheme_data['alert_position'];
  $s_sidebar_border_radius = $skatheme_data['sidebar_border_radius'];
  $s_alert_dismiss = $skatheme_data['alert_dismiss'];
  $s_palette_status_offline = $skatheme_data['palette_status_offline'];
  $s_palette_status_error = $skatheme_data['palette_status_error'];
  $s_palette_status_starting = $skatheme_data['palette_status_starting'];
  $s_palette_status_online = $skatheme_data['palette_status_online'];
  $s_statusgradient_style = $skatheme_data['statusgradient_style'];
  $s_sidebar_hover = $skatheme_data['sidebar_hover'];
  $s_animations = $skatheme_data['animations'];
  $s_sidebar_separators = $skatheme_data['sidebar_separators'];
  $s_font_family        = $skatheme_data['font_family'] ?? 'Inter';
  $s_custom_css         = $skatheme_data['custom_css'] ?? '';
  $s_glass_intensity    = $skatheme_data['glass_intensity'] ?? '0';
  $s_server_card_style  = $skatheme_data['server_card_style'] ?? 'default';
  $s_dark_mode          = $skatheme_data['dark_mode'] ?? 'dark';
  $s_content_background = $skatheme_data['content_background'] ?? '';
?>
@include('blueprint.extensions.skatheme.wrapper.import')

@if($s_init == "{version}")

@include('blueprint.extensions.skatheme.wrapper.links')
@include('blueprint.extensions.skatheme.wrapper.alerts')
@include('blueprint.extensions.skatheme.wrapper.theme.icons')

@if(Auth::check())
@if($s_watermark == "1")
<p class="nebulaFooter"><i style="font-size:12px; margin-right: 3px;" class="bi bi-exclude"></i> <a href="https://github.com/sdgamer8263-sketch/skathemes?utm_source=inlineskatheme&utm_campaign=footer" target="_blank">Nebula theme</a> by <a href="https://prpl.wtf?utm_source=inlineskatheme&utm_campaign=footer" target="_blank">Emma (prpl.wtf)</a></p>
@endif
<div
  <?php
    if($s_background_magic != "") {
      echo('class="fixed-pattern-background magic-pattern['.$s_background_magic.']" view="dashboard"');
    } else {
      echo('class="fixed-background"');
    }
    ?>
></div>
<div id="sidebar" class="sidebar">
  <?php
    $__WIDE_TOPMARGIN = "unset";
    if($s_icon_fallback == "bootstrap") {

      // BOOTSTRAP
      $__SCALE = "30px";
      $__WIDE_TOPMARGIN = "unset";
      $__home             = "bi bi-exclude";
      $__admin            = "bi bi-gear-wide-connected";
      $__account          = "bi bi-person-fill-gear";
      $__logout           = "bi bi-box-arrow-right";
      $__server_terminal  = "bi bi-terminal";
      $__server_files     = "bi bi-folder2";
      $__server_databases = "bi bi-database";
      $__server_schedules = "bi bi-calendar-week";
      $__server_users     = "bi bi-people";
      $__server_backups   = "bi bi-disc";
      $__server_network   = "bi bi-hdd-network";
      $__server_startup   = "bi bi-plug";
      $__server_settings  = "bi bi-gear";
      $__server_activity  = "bi bi-clipboard-pulse";
      $__server_more      = "bi bi-three-dots";
      $__account_account  = "bi bi-person-badge";
      $__account_api      = "bi bi-braces-asterisk";
      $__account_ssh      = "bi bi-key";
      $__account_activity = "bi bi-clipboard-pulse";
      $__account_more     = "bi bi-three-dots";

    } elseif($s_icon_fallback == "feather") {

      // FEATHER
      $__SCALE = "32px";
      $__WIDE_TOPMARGIN = "-2px";
      $__home             = "ff ff-home";
      $__admin            = "ff ff-sliders";
      $__account          = "ff ff-user";
      $__logout           = "ff ff-log-out";
      $__server_terminal  = "ff ff-terminal";
      $__server_files     = "ff ff-folder";
      $__server_databases = "ff ff-database";
      $__server_schedules = "ff ff-calendar";
      $__server_users     = "ff ff-users";
      $__server_backups   = "ff ff-disc";
      $__server_network   = "ff ff-globe";
      $__server_startup   = "ff ff-hard-drive";
      $__server_settings  = "ff ff-settings";
      $__server_activity  = "ff ff-activity";
      $__server_more      = "ff ff-more-vertical";
      $__account_account  = "ff ff-settings";
      $__account_api      = "ff ff-link";
      $__account_ssh      = "ff ff-key";
      $__account_activity = "ff ff-activity";
      $__account_more     = "ff ff-more-vertical";

    } elseif($s_icon_fallback == "lucide") {

      // LUCIDE
      $__SCALE = "32px";
      $__home             = "icon-layers";
      $__admin            = "icon-sliders-horizontal";
      $__account          = "icon-user";
      $__logout           = "icon-log-out";
      $__server_terminal  = "icon-terminal-square";
      $__server_files     = "icon-folder-open";
      $__server_databases = "icon-database";
      $__server_schedules = "icon-calendar-clock";
      $__server_users     = "icon-users";
      $__server_backups   = "icon-archive";
      $__server_network   = "icon-network";
      $__server_startup   = "icon-unplug";
      $__server_settings  = "icon-settings";
      $__server_activity  = "icon-scroll-text";
      $__server_more      = "icon-more-vertical";
      $__account_account  = "icon-settings";
      $__account_api      = "icon-globe";
      $__account_ssh      = "icon-key";
      $__account_activity = "icon-scroll-text";
      $__account_more     = "icon-more-vertical";

    } elseif($s_icon_fallback == "material") {

      // MATERIAL
      $__SCALE = "37px";
      $__home             = "mdi mdi-home";
      $__admin            = "mdi mdi-hammer-wrench";
      $__account          = "mdi mdi-account-edit";
      $__logout           = "mdi mdi-logout";
      $__server_terminal  = "mdi mdi-console-line";
      $__server_files     = "mdi mdi-folder";
      $__server_databases = "mdi mdi-database";
      $__server_schedules = "mdi mdi-calendar-month";
      $__server_users     = "mdi mdi-account-group";
      $__server_backups   = "mdi mdi-backup-restore";
      $__server_network   = "mdi mdi-network";
      $__server_startup   = "mdi mdi-cog-play";
      $__server_settings  = "mdi mdi-wrench-cog";
      $__server_activity  = "mdi mdi-clipboard-pulse";
      $__server_more      = "mdi mdi-dots-horizontal";
      $__account_account  = "mdi mdi-account-cog";
      $__account_api      = "mdi mdi-code-brackets";
      $__account_ssh      = "mdi mdi-key-chain";
      $__account_activity = "mdi mdi-clipboard-pulse";
      $__account_more     = "mdi mdi-dots-horizontal";

    } elseif($s_icon_fallback == "material-light") {

      // MATERIAL-LIGHT
      $__SCALE = "37px";
      $__home             = "mdil mdil-home";
      $__admin            = "mdil mdil-view-dashboard";
      $__account          = "mdil mdil-account";
      $__logout           = "mdil mdil-logout";
      $__server_terminal  = "mdil mdil-console";
      $__server_files     = "mdil mdil-folder";
      $__server_databases = "mdil mdil-table";
      $__server_schedules = "mdil mdil-calendar";
      $__server_users     = "mdil mdil-eye";
      $__server_backups   = "mdil mdil-content-duplicate";
      $__server_network   = "mdil mdil-sitemap";
      $__server_startup   = "mdil mdil-pencil";
      $__server_settings  = "mdil mdil-settings";
      $__server_activity  = "mdil mdil-clipboard-text";
      $__server_more      = "mdil mdil-dots-horizontal";
      $__account_account  = "mdil mdil-settings";
      $__account_api      = "mdil mdil-link";
      $__account_ssh      = "mdil mdil-lock";
      $__account_activity = "mdil mdil-clipboard-text";
      $__account_more     = "mdil mdil-dots-horizontal";

    } elseif($s_icon_fallback == "fontawesome") {

      // FONTAWESOME
      $__SCALE = "28px";
      $__home             = "fa-solid fa-house";
      $__admin            = "fa-solid fa-sliders";
      $__account          = "fa-solid fa-user-gear";
      $__logout           = "fa-solid fa-right-from-bracket";
      $__server_terminal  = "fa-solid fa-bars-progress";
      $__server_files     = "fa-solid fa-folder";
      $__server_databases = "fa-solid fa-database";
      $__server_schedules = "fa-solid fa-calendar";
      $__server_users     = "fa-solid fa-user-group";
      $__server_backups   = "fa-solid fa-box-archive";
      $__server_network   = "fa-solid fa-network-wired";
      $__server_startup   = "fa-solid fa-wrench";
      $__server_settings  = "fa-solid fa-gear";
      $__server_activity  = "fa-solid fa-scroll";
      $__server_more      = "fa-solid fa-ellipsis-vertical";
      $__account_account  = "fa-solid fa-circle-user";
      $__account_api      = "fa-solid fa-globe";
      $__account_ssh      = "fa-solid fa-key";
      $__account_activity = "fa-solid fa-scroll";
      $__account_more     = "fa-solid fa-ellipsis-vertical";

    } elseif($s_icon_fallback == "eva-outline") {

      // EVA OUTLINE
      $__SCALE = "34px";
      $__home             = "eva eva-home-outline";
      $__admin            = "eva eva-options-outline";
      $__account          = "eva eva-person-outline";
      $__logout           = "eva eva-log-out-outline";
      $__server_terminal  = "eva eva-hard-drive-outline";
      $__server_files     = "eva eva-folder-outline";
      $__server_databases = "eva eva-cube-outline";
      $__server_schedules = "eva eva-calendar-outline";
      $__server_users     = "eva eva-people-outline";
      $__server_backups   = "eva eva-archive-outline";
      $__server_network   = "eva eva-wifi-outline";
      $__server_startup   = "eva eva-flash-outline";
      $__server_settings  = "eva eva-settings-outline";
      $__server_activity  = "eva eva-activity-outline";
      $__server_more      = "eva eva-more-horizontal-outline";
      $__account_account  = "eva eva-settings-outline";
      $__account_api      = "eva eva-globe-outline";
      $__account_ssh      = "eva eva-lock-outline";
      $__account_activity = "eva eva-activity-outline";
      $__account_more     = "eva eva-more-horizontal-outline";

    } elseif($s_icon_fallback == "eva-solid") {

      // EVA SOLID
      $__SCALE = "34px";
      $__home             = "eva eva-home";
      $__admin            = "eva eva-options";
      $__account          = "eva eva-person";
      $__logout           = "eva eva-log-out";
      $__server_terminal  = "eva eva-hard-drive";
      $__server_files     = "eva eva-folder";
      $__server_databases = "eva eva-cube";
      $__server_schedules = "eva eva-calendar";
      $__server_users     = "eva eva-people";
      $__server_backups   = "eva eva-archive";
      $__server_network   = "eva eva-wifi";
      $__server_startup   = "eva eva-flash";
      $__server_settings  = "eva eva-settings";
      $__server_activity  = "eva eva-activity";
      $__server_more      = "eva eva-more-horizontal";
      $__account_account  = "eva eva-settings";
      $__account_api      = "eva eva-globe";
      $__account_ssh      = "eva eva-lock";
      $__account_activity = "eva eva-activity";
      $__account_more     = "eva eva-more-horizontal";

    } elseif($s_icon_fallback == "remix-outline") {

      // REMIX OUTLINE
      $__SCALE = "33px";
      $__home             = "ri-home-line";
      $__admin            = "ri-equalizer-3-line";
      $__account          = "ri-user-settings-line";
      $__logout           = "ri-logout-box-r-line";
      $__server_terminal  = "ri-terminal-box-line";
      $__server_files     = "ri-folder-6-line";
      $__server_databases = "ri-database-2-line";
      $__server_schedules = "ri-calendar-line";
      $__server_users     = "ri-group-line";
      $__server_backups   = "ri-archive-line";
      $__server_network   = "ri-arrow-up-down-line";
      $__server_startup   = "ri-edit-box-line";
      $__server_settings  = "ri-settings-line";
      $__server_activity  = "ri-pulse-line";
      $__server_more      = "ri-more-2-line";
      $__account_account  = "ri-settings-line";
      $__account_api      = "ri-global-line";
      $__account_ssh      = "ri-key-2-line";
      $__account_activity = "ri-pulse-line";
      $__account_more     = "ri-more-2-line";

    } elseif($s_icon_fallback == "remix-solid") {

      // REMIX SOLID
      $__SCALE = "33px";
      $__home             = "ri-home-fill";
      $__admin            = "ri-equalizer-3-fill";
      $__account          = "ri-user-settings-fill";
      $__logout           = "ri-logout-box-r-fill";
      $__server_terminal  = "ri-terminal-box-fill";
      $__server_files     = "ri-folder-6-fill";
      $__server_databases = "ri-database-2-fill";
      $__server_schedules = "ri-calendar-fill";
      $__server_users     = "ri-group-fill";
      $__server_backups   = "ri-archive-fill";
      $__server_network   = "ri-arrow-up-down-fill";
      $__server_startup   = "ri-edit-box-fill";
      $__server_settings  = "ri-settings-fill";
      $__server_activity  = "ri-pulse-fill";
      $__server_more      = "ri-more-2-fill";
      $__account_account  = "ri-settings-fill";
      $__account_api      = "ri-global-fill";
      $__account_ssh      = "ri-key-2-fill";
      $__account_activity = "ri-pulse-fill";
      $__account_more     = "ri-more-2-fill";

    } elseif($s_icon_fallback == "tabler") {

      // TABLER ICONS
      $__SCALE = "36px";
      $__home             = "ti ti-home";
      $__admin            = "ti ti-server-cog";
      $__account          = "ti ti-user";
      $__logout           = "ti ti-logout";
      $__server_terminal  = "ti ti-terminal";
      $__server_files     = "ti ti-folder";
      $__server_databases = "ti ti-database";
      $__server_schedules = "ti ti-calendar";
      $__server_users     = "ti ti-users-plus";
      $__server_backups   = "ti ti-archive";
      $__server_network   = "ti ti-network";
      $__server_startup   = "ti ti-adjustments";
      $__server_settings  = "ti ti-settings";
      $__server_activity  = "ti ti-activity-heartbeat";
      $__server_more      = "ti ti-dots";
      $__account_account  = "ti ti-user-cog";
      $__account_api      = "ti ti-api";
      $__account_ssh      = "ti ti-key";
      $__account_activity = "ti ti-activity-heartbeat";
      $__account_more     = "ti ti-dots";

    } elseif($s_icon_fallback == "octicons") {

      // OCTICONS
      $__SCALE = "33px";
      $__home             = "octicon octicon-home-fill-24";
      $__admin            = "octicon octicon-tools-24";
      $__account          = "octicon octicon-person-24";
      $__logout           = "octicon octicon-sign-out-24";
      $__server_terminal  = "octicon octicon-terminal-24";
      $__server_files     = "octicon octicon-file-directory-24";
      $__server_databases = "octicon octicon-database-24";
      $__server_schedules = "octicon octicon-calendar-24";
      $__server_users     = "octicon octicon-people-24";
      $__server_backups   = "octicon octicon-archive-24";
      $__server_network   = "octicon octicon-globe-24";
      $__server_startup   = "octicon octicon-plug-24";
      $__server_settings  = "octicon octicon-gear-24";
      $__server_activity  = "octicon octicon-log-24";
      $__server_more      = "octicon octicon-kebab-horizontal-24";
      $__account_account  = "octicon octicon-smiley-24";
      $__account_api      = "octicon octicon-dependabot-24";
      $__account_ssh      = "octicon octicon-key-24";
      $__account_activity = "octicon octicon-log-24";
      $__account_more     = "octicon octicon-kebab-horizontal-24";

    } elseif($s_icon_fallback == "akar-icons") {

      // AKAR ICONS
      $__SCALE = "33px";
      $__home             = "ai-home";
      $__admin            = "ai-settings-vertical";
      $__account          = "ai-person";
      $__logout           = "ai-sign-out";
      $__server_terminal  = "ai-computing";
      $__server_files     = "ai-folder";
      $__server_databases = "ai-data";
      $__server_schedules = "ai-schedule";
      $__server_users     = "ai-people-multiple";
      $__server_backups   = "ai-cloud-download";
      $__server_network   = "ai-globe";
      $__server_startup   = "ai-edit";
      $__server_settings  = "ai-gear";
      $__server_activity  = "ai-clipboard";
      $__server_more      = "ai-more-vertical-fill";
      $__account_account  = "ai-face-very-happy";
      $__account_api      = "ai-globe";
      $__account_ssh      = "ai-key";
      $__account_activity = "ai-clipboard";
      $__account_more     = "ai-more-vertical-fill";

    } elseif($s_icon_fallback == "hugeicons-solid") {

      // HUGEICONS SOLID
      $__SCALE = "33px";
      $__home             = "hgi-solid hgi-home-01";
      $__admin            = "hgi-solid hgi-settings-02";
      $__account          = "hgi-solid hgi-user";
      $__logout           = "hgi-solid hgi-logout-03";
      $__server_terminal  = "hgi-solid hgi-software-license";
      $__server_files     = "hgi-solid hgi-folder-03";
      $__server_databases = "hgi-solid hgi-database-02";
      $__server_schedules = "hgi-solid hgi-calendar-03";
      $__server_users     = "hgi-solid hgi-user-group";
      $__server_backups   = "hgi-solid hgi-cloud-upload";
      $__server_network   = "hgi-solid hgi-cellular-network";
      $__server_startup   = "hgi-solid hgi-plug-socket";
      $__server_settings  = "hgi-solid hgi-settings-05";
      $__server_activity  = "hgi-solid hgi-book-02";
      $__server_more      = "hgi-solid hgi-more-vertical";
      $__account_account  = "hgi-solid hgi-user-edit-01";
      $__account_api      = "hgi-solid hgi-api";
      $__account_ssh      = "hgi-solid hgi-biometric-access";
      $__account_activity = "hgi-solid hgi-book-02";
      $__account_more     = "hgi-solid hgi-more-vertical";

    } elseif($s_icon_fallback == "hugeicons-stroke") {

      // HUGEICONS STROKE
      $__SCALE = "33px";
      $__home             = "hgi-stroke hgi-home-01";
      $__admin            = "hgi-stroke hgi-settings-02";
      $__account          = "hgi-stroke hgi-user";
      $__logout           = "hgi-stroke hgi-logout-03";
      $__server_terminal  = "hgi-stroke hgi-software-license";
      $__server_files     = "hgi-stroke hgi-folder-03";
      $__server_databases = "hgi-stroke hgi-database-02";
      $__server_schedules = "hgi-stroke hgi-calendar-03";
      $__server_users     = "hgi-stroke hgi-user-group";
      $__server_backups   = "hgi-stroke hgi-cloud-upload";
      $__server_network   = "hgi-stroke hgi-cellular-network";
      $__server_startup   = "hgi-stroke hgi-plug-socket";
      $__server_settings  = "hgi-stroke hgi-settings-05";
      $__server_activity  = "hgi-stroke hgi-book-02";
      $__server_more      = "hgi-stroke hgi-more-vertical";
      $__account_account  = "hgi-stroke hgi-user-edit-01";
      $__account_api      = "hgi-stroke hgi-api";
      $__account_ssh      = "hgi-stroke hgi-biometric-access";
      $__account_activity = "hgi-stroke hgi-book-02";
      $__account_more     = "hgi-stroke hgi-more-vertical";

    }


    /*
    elseif($s_icon_fallback == "pack-id") {

      // PACK NAME
      $__SCALE = "33px";
      $__home             = "";
      $__admin            = "";
      $__account          = "";
      $__logout           = "";
      $__server_terminal  = "";
      $__server_files     = "";
      $__server_databases = "";
      $__server_schedules = "";
      $__server_users     = "";
      $__server_backups   = "";
      $__server_network   = "";
      $__server_startup   = "";
      $__server_settings  = "";
      $__server_activity  = "";
      $__server_more      = "";
      $__account_account  = "";
      $__account_api      = "";
      $__account_ssh      = "";
      $__account_activity = "";
      $__account_more     = "";

    }
    */
  ?>
  @include('blueprint.extensions.skatheme.wrapper.sidebar.content')
</div>

@include('blueprint.extensions.skatheme.wrapper.contextmenu.files')
@include('blueprint.extensions.skatheme.wrapper.contextmenu.more')
@include('blueprint.extensions.skatheme.wrapper.contextmenu.sidebar')

@endif
<style id="ska-components">

  #skaContextMenu,
  #skaFilesContextMenu,
  #skaMoreContextMenu {
    display: none
  }

  .nebulaFooter {
    text-align: center;
    font-size: 12px;
    font-weight: 400;
    color: hsla(211,12%,43%,1);
    text-decoration: none;
    padding-bottom: 10px;
  }

  @if($s_sidebar_hover_tooltip == 0 || $s_sidebar_hover_tooltip == 2 || $s_sidebar_full == 1)
    div.sidebarContent > div.tooltip-toggle > span.tooltip,
    div.sidebarContent > #sidebarCategoryServer > div.tooltip-toggle > span.tooltip,
    div.sidebarContent > #sidebarCategoryAccount > div.tooltip-toggle > span.tooltip,
    div.sidebarContent > #sidebarCategoryGeneral > div.tooltip-toggle > span.tooltip,
    div.sidebarContent > #sidebarCategoryGeneral > a > div.tooltip-toggle > span.tooltip {
      display: none
    }
  @endif

  /* Sidebar */
  @if($s_sidebar_background == "default")
  .sidebar {
    transition:
      left 0.5s,
      width 1s !important;
    position: fixed;
    left: 0; top: 0px;
    width: 75px; height: 100%;
    background-color: var(--sidebarBackground);
    z-index: 5;
    border-radius: 0px var(--borderRadiusSidebar) var(--borderRadiusSidebar) 0px;
  }
  @elseif($s_sidebar_background == "blurred")
  .sidebar {
    transition:
      left 0.5s,
      width 1s !important;
    position: fixed;
    left: 0; top: 0px;
    width: 75px; height: 100%;
    background-color: unset !important;
    background: linear-gradient(to bottom, color-mix(in hsl, var(--sidebarBackground) 30%, transparent), color-mix(in hsl, var(--sidebarBackground) 5%, transparent) 100%);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    will-change: transform;
    z-index: 5;
    border-radius: 0px;
  }
  @endif

  .sidebarContentContainer {
    margin: 0px 0px 10px 10px;
    overflow: visible;
  }

  .sidebarContent {
    height: 100vh;
    padding-top: 10px;
    overflow-y: scroll;
    overflow-x: visible;

    scrollbar-width: none;
    -ms-overflow-style: none;
    &::-webkit-scrollbar {
      display: none;
    }
  }

  /* Sidebar preloader */
  @keyframes sidebar-preloader {
    0%   { background-color: var(--sidebarSecondary) }
    20%  { background-color: color-mix(in hsl, var(--sidebarSecondary) 87%, white) }
    40%  { background-color: var(--sidebarSecondary) }
    100% { background-color: var(--sidebarSecondary) }
  }
  .sidebar-placeholder-animated {
    animation: sidebar-preloader 1s linear infinite;
    color: transparent;
    background-color: var(--sidebarSecondary);
    display: block !important;
  }

  .sidebar-placeholder-animated:nth-child(0) { animation-delay: 0s }
  .sidebar-placeholder-animated:nth-child(1) { animation-delay: .05s }
  .sidebar-placeholder-animated:nth-child(2) { animation-delay: .1s }
  .sidebar-placeholder-animated:nth-child(3) { animation-delay: .15s }
  .sidebar-placeholder-animated:nth-child(4) { animation-delay: .2s }
  .sidebar-placeholder-animated:nth-child(5) { animation-delay: .25s }
  .sidebar-placeholder-animated:nth-child(6) { animation-delay: .3s }
  .sidebar-placeholder-animated:nth-child(7) { animation-delay: .35s }
  .sidebar-placeholder-animated:nth-child(8) { animation-delay: .4s }
  .sidebar-placeholder-animated:nth-child(9) { animation-delay: .45s }
  .sidebar-placeholder-animated:nth-child(10) { animation-delay: .5s }

  /* Sidebar items */
  .sidebarButton {
    border: none;
    @if($s_sidebar_background == "default")
      background-color: var(--sidebarSecondary);
    @elseif($s_sidebar_background == "blurred")
      background-color: transparent;
    @endif
    width: calc(75px - 10px - 10px);
    height: calc(75px - 10px - 10px);
    border-radius: var(--borderRadiusSidebar);
    margin-bottom: 10px;
    overflow-x: hidden;
    overflow-y: hidden;
    position: relative;
    left: 0px;
    transition:
      background-color 0.3s,
      border .2s,
      border-left .2s,
      margin-left .3s,
      left .3s,
      padding-top .3s,
      padding-bottom .3s,
      height .3s !important;
  }
  .sidebarButton:hover {
    @if($s_sidebar_background == "default")
      background-color: var(--sidebarSecondaryHover);
    @elseif($s_sidebar_background == "blurred")
      background-color: #ffffff20;
    @endif
  }
  .sidebarButton:active {
    @if($s_sidebar_background == "default")
      background-color: var(--sidebarSecondaryActive);
    @elseif($s_sidebar_background == "blurred")
      background-color: #ffffff15;
    @endif
  }

  .sidebarButtonSelected {
    @if($s_sidebar_background == "default")
      background-color: var(--sidebarButtonActive);
    @elseif($s_sidebar_background == "blurred")
      background-color: color-mix(in hsl, var(--sidebarButtonActive) 50%, transparent);
      --border: 1px solid rgba(255, 255, 255, 0.2) !important;
    @endif
  }

  .sidebarIcon {
    color: var(--sidebarPrimary);
    transition:
      color 0.3s,
      opacity 0.3s !important;

    @if(Auth::check())
      font-size: calc({{ $__SCALE }} * {{ $s_icon_scale }});
    @endif
  }
  .sidebarIcon:hover {
    color: var(--sidebarPrimaryHover);
  }

  .customicon {
    width: 100%;
    height: 100%;
    scale: calc({{ $s_icon_scale }});
    @if($s_icon_scale == "1.00")border-radius: var(--borderRadiusSidebar);@endif
  }

  @if($s_sidebar_separators == "1")
    .sidebarSpacer {
      padding-bottom: 12px;
      margin-left: 12.5%;
      margin-right: 12.5%;
      width: calc(75% - 10px);
      border-top: 1px solid var(--sidebarSecondary);
    }
  @endif

  .sidebarCategory {
    display: none;
  }

  @if(Auth::check())
    @if($s_background_image == "")
      @if($s_background_magic == "")
        body, body.bg-neutral-800 {
          padding-left: 75px;
          color: #fff;
          background-color: var(--pageBackground);
        }
      @else
        .fixed-pattern-background {
          display: block;
          position: fixed;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          z-index: -1;
        }
        body, body.bg-neutral-800, #app, .App___StyledDiv-sc-2l91w7-0 {
          background: unset !important;
        }
        body, body.bg-neutral-800 {
          padding-left: 75px;
          color: #fff;
        }
      @endif
    @else
      body, body.bg-neutral-800 {
        padding-left: 75px;
        color: #fff;
        background-color: #00000000;
      }
    @endif
  @else
    body, bg-neutral-800 {
      color: #fff;
      background-color: var(--pageBackground);
    }
  @endif

  html:not([multitasking]) {
    background-color: var(--pageBackground) !important;
    background: var(--pageBackground) !important;
    z-index: -2 !important;
  }

  @if($s_background_image != "")
    .fixed-background {
      background: url("{{ $s_background_image }}") no-repeat;
      @if($s_background_appearance == "1")filter: blur(40px);scale: 1.1;@endif
      @if($s_background_appearance == "2")opacity: 0.6;@endif
      z-index: -1;
      background-position: center;
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
    }
    body {
      z-index: 2;
    }
  @endif

  @if($s_sidebar_full == "1" && Auth::check())
    /*
      wide sidebar
    */

    .sidebarIcon {
      float: left;
      margin-left: 15px;
      margin-top: {{ $__WIDE_TOPMARGIN }};
      padding-right: 13px;
      line-height: 55px;
      font-size: calc({{ $__SCALE }} * 0.8);
      width: calc({{ $__SCALE }} * 0.8 + 15px);
    }
    .ska-mobile-nav { display: none; }
    .sidebar {
      width: 200px;
      display: block;
    }
    div.ProgressBar___StyledDiv-sc-14ayc3f-1.jleFWY {
      left: 195px !important;
      width: calc(100% - 195px) !important;
    }
    .sidebarContentContainer {
      width: 100%;
    }

    .customicon {
      height: 100%;
      aspect-ratio: 1/1;
      float: left;
      width: auto;
    }
    body, body.bg-neutral-800 {
      padding-left: 200px;
    }
    .sidebarSpacer {
      width: calc(100% - 31px);
      margin-left: 5px;
      margin-right: 5px;
    }
    .wideSidebarSpan {
      text-align: left;
      display: block;
      width: 100%;
      font-size: 17px;
      font-weight: 500;
      height: 100%;
      line-height: 55px;
      font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
    .sidebarButton {
      width: calc(100% - 10px - 10px);
      transition:
        border .2s,
        border-left .2s;
    }
    @if($s_sidebar_customlogo != "")
      /* custom logo */
      .customlogo {
        height: 62px;
        width: auto;
        margin-right: auto;
        border-radius: var(--borderRadiusSidebar);
        margin-bottom: 10px;
      }
    @endif
    @if($s_sidebar_buttonstyle == "1")
      .sidebarButton {
        border-left: 0px solid transparent;
      }
      .sidebarButtonSelected {
        @if($s_sidebar_background == "default")
          background-color: var(--sidebarSecondary);
        @endif
        border-left: 10px solid var(--sidebarButtonActive) !important;
        transition: border .2s, border-left .2s;
      }
    @elseif($s_sidebar_buttonstyle == "2")
      .sidebarIcon {
        line-height: 49px !important;
        margin-left: 12px !important;
      }
      .wideSidebarSpan {
        line-height: 49px !important;
      }
      .sidebarButton {
        --border: 3px solid transparent;
        border: 3px solid transparent !important;
        border-left: 3px solid transparent !important;
      }
      .sidebarButtonSelected {
        @if($s_sidebar_background == "default")
          background-color: var(--sidebarSecondary);
        @endif
        --border: 3px solid var(--sidebarButtonActive);
        border-left: 3px solid var(--sidebarButtonActive) !important;
        border: 3px solid var(--sidebarButtonActive) !important;
        transition: border .2s, border-left .2s;
      }
    @endif
  @endif

  @media screen and (min-width: 760px) {
    /* Sidebar hover animations */
    @if($s_sidebar_hover == "popout")
      .sidebarButton:hover {
        position: relative;
        left: 7px;
      }
    @elseif($s_sidebar_hover == "expand")
      .sidebarButton:hover {
        padding-top: 10px;
        padding-bottom: 10px;
        height: calc(75px - 10px - 10px + 20px);
      }
    @endif
  }
</style>
@include('blueprint.extensions.skatheme.wrapper.sidebar.mobile')
@include('blueprint.extensions.skatheme.wrapper.theme.variables')
@if(Auth::check())
  @include('blueprint.extensions.skatheme.wrapper.script')
  @include('blueprint.extensions.skatheme.wrapper.animations')
@endif
@include('blueprint.extensions.skatheme.wrapper.theme.auth')
@include('blueprint.extensions.skatheme.wrapper.theme.panel')
@endif
@include('blueprint.extensions.skatheme.wrapper.initialize.index')
@if($s_init == "{version}")
@if(Auth::check() != true)
  <div
    <?php
      if($s_auth_background_magic != "") {
        echo('class="ska-auth-wallpaper magic-pattern['.$s_auth_background_magic.']" view="auth"');
      } else {
        echo('class="ska-auth-wallpaper"');
      }
    ?>
  ></div>
  <div class="ska-auth-backdrop"></div>
  @if($s_watermark_auth != "0")
    <div class="ska-watermark"><a href="https://github.com/sdgamer8263-sketch/skathemes?utm_source=inlineskatheme&utm_campaign=footer"><b class="watermark-highlight"><i class="bi bi-exclude"></i> Nebula</b> theme</a> by <a class="ska-watermark-text" href="https://prpl.wtf?utm_source=inlineskatheme&utm_campaign=footer" target="_blank">Emma (prpl.wtf)</a></div>
  @endif
  <style>.g-recaptcha {display: none !important;}</style>
  @if($blueprint->dbGet("settings", "recaptcha:enabled") == "true")
    <div class="notification">
      <div class="notificationBar"></div>
      <div class="notificationIcon"></div>
      <div class="notificationTextContainer">
        <p class="notificationText"><b style="font-size: 14px;">Protected by reCAPTCHA</b><br>
        <span style="font-size: 12px;"><a href="https://www.google.com/intl/en/policies/privacy/" style="color: #4D4DFF;">Privacy</a>, <a href="https://www.google.com/intl/en/policies/terms/" style="color: #4D4DFF;">Terms</a></span></p>
      </div>
    </div>
  @endif
@endif
@if(Auth::check())
  @include('blueprint.extensions.skatheme.wrapper.file-switch')
@if($s_keyboard_shortcuts == "1")
  @include('blueprint.extensions.skatheme.wrapper.keybinds.index')
@endif
@endif
@endif

{{-- ═══ SKA FOOTER — HARDCODED — DO NOT REMOVE ═══ --}}
@if(Auth::check())
<style>
  #ska-footer-bar {
    position: fixed;
    bottom: 0; left: 70px; right: 0;
    z-index: 50;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 4px 0 6px;
    pointer-events: none;
    user-select: none;
    background: linear-gradient(to top, rgba(6,6,19,0.7) 0%, transparent 100%);
  }
  #ska-footer-bar span.ska-copyright {
    font-size: 10.5px;
    font-weight: 600;
    letter-spacing: 0.08em;
    color: rgba(168, 85, 247, 0.75);
    text-shadow: 0 0 8px rgba(168,85,247,0.4);
    line-height: 1.5;
  }
  #ska-footer-bar span.ska-designby {
    font-size: 9.5px;
    font-weight: 400;
    color: rgba(148, 154, 190, 0.45);
    letter-spacing: 0.05em;
  }
</style>
<div id="ska-footer-bar">
  <span class="ska-copyright">Copyright &#169;&#65039; SKA</span>
  @if(env('SKA_DESIGN_BY', 'Design by SKA') != '')
    <span class="ska-designby">{{ env('SKA_DESIGN_BY', 'Design by SKA') }}</span>
  @endif
</div>
@endif
