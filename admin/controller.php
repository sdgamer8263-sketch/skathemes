<?php

namespace Pterodactyl\Http\Controllers\Admin\Extensions\skatheme;

use Illuminate\View\Factory as ViewFactory;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\AdminFormRequest;
use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Admin\BlueprintAdminLibrary as BlueprintExtensionLibrary;

class skathemeExtensionController extends Controller
{
  /** @var array<string,string> All settings with their defaults */
  private array $defaults = [
    // Sidebar navigation custom icons
    'sidebar_home'                   => '',
    'sidebar_admin'                  => '',
    'sidebar_account'                => '',
    'sidebar_logout'                 => '',
    'sidebar_server_terminal'        => '',
    'sidebar_server_files'           => '',
    'sidebar_server_databases'       => '',
    'sidebar_server_schedules'       => '',
    'sidebar_server_users'           => '',
    'sidebar_server_backups'         => '',
    'sidebar_server_network'         => '',
    'sidebar_server_startup'         => '',
    'sidebar_server_settings'        => '',
    'sidebar_server_activity'        => '',
    'sidebar_server_more'            => '',
    'sidebar_account_account'        => '',
    'sidebar_account_api'            => '',
    'sidebar_account_ssh'            => '',
    'sidebar_account_activity'       => '',
    'sidebar_account_more'           => '',
    // Sidebar style
    'icon_scale'                     => '0.90',
    'sidebar_full'                   => '0',
    'sidebar_buttonstyle'            => '0',
    'sidebar_hover'                  => 'popout',
    'sidebar_hover_tooltip'          => '2',
    'sidebar_always_visible_buttons' => '1',
    'sidebar_separators'             => '1',
    'sidebar_border_radius'          => '10',
    'sidebar_background'             => 'default',
    // Custom logos
    'sidebar_customlogo'             => '',
    'auth_customlogo'                => '',
    // Dashboard background
    'background_image'               => '',
    'background_appearance'          => '0',
    'background_magic'               => '',
    'background_magicsize'           => '215',
    // Auth background
    'auth_background_image'          => '',
    'auth_background_appearance'     => '0',
    'auth_background_magic'          => '',
    'auth_background_magicsize'      => '215',
    // Dashboard palette (SKA deep-space neon)
    'palette_dashboard_1'            => '#e2e8f0',
    'palette_dashboard_2'            => '#cbd5e1',
    'palette_dashboard_3'            => '#0d0d26',
    'palette_dashboard_4'            => '#141430',
    'palette_dashboard_5'            => '#1a1a3a',
    'palette_dashboard_6'            => '#1f1f45',
    'palette_dashboard_7'            => '#060613',
    'palette_dashboard_8'            => '#a855f7',
    'palette_dashboard_9'            => '#9333ea',
    // Sidebar palette
    'palette_sidebar_1'              => '#c084fc',
    'palette_sidebar_2'              => '#a855f7',
    'palette_sidebar_3'              => '#1a0a2e',
    'palette_sidebar_4'              => '#220d38',
    'palette_sidebar_5'              => '#2d1048',
    'palette_sidebar_6'              => '#3d1560',
    'palette_sidebar_7'              => '#08081a',
    'palette_sidebar_8'              => '#7c3aed',
    // Auth palette
    'palette_auth_1'                 => '#060613',
    'palette_auth_2'                 => '#0d0d26',
    'palette_auth_3'                 => '#1a1a3a',
    'palette_auth_4'                 => '#7c3aed',
    'palette_auth_5'                 => '#f87171',
    'palette_auth_6'                 => '#7c3aed',
    'palette_auth_7'                 => '#c084fc',
    'palette_auth_8'                 => '#ffffff',
    // Status colors
    'palette_status_offline'         => '#64748b',
    'palette_status_error'           => '#f87171',
    'palette_status_starting'        => '#facc15',
    'palette_status_online'          => '#4ade80',
    'statusgradient_style'           => 'default',
    // Features
    'watermark'                      => '1',
    'watermark_auth'                 => '1',
    'keyboard_shortcuts'             => '1',
    'keybind_icons'                  => '1',
    'server_overview_graphs'         => '1',
    'server_colored_power'           => '0',
    'dashboard_transparency'         => '0',
    'page_indexing'                  => '1',
    'border_radius'                  => '10',
    'server_list'                    => 'cards',
    'animations'                     => 'fadeup',
    'icon_fallback'                  => 'bootstrap',
    // Weblinks
    'website_links'                  => '0',
    'weblink_support'                => '',
    'weblink_billing'                => '',
    'weblink_status'                 => '',
    'weblink_social_discord'         => '',
    'weblink_social_github'          => '',
    'website_links_align'            => '0',
    // Alert
    'alert'                          => '0',
    'alert_text'                     => '',
    'alert_icon'                     => 'megaphone-fill',
    'alert_position'                 => 'sticky',
    'alert_dismiss'                  => '0',
    // Init / reset
    'init'                           => '{version}',
    'reset'                          => '0',
    // ── Arix features ──────────────────────────────────────────────────────
    'font_family'                    => 'Inter',
    'custom_css'                     => '',
    'glass_intensity'                => '0',
    'server_card_style'              => 'default',
    'dark_mode'                      => 'dark',
    'content_background'             => '',
  ];

  public function __construct(
    private ViewFactory $view,
    private BlueprintExtensionLibrary $blueprint,
  ) {}

  /** GET /admin/extensions/skatheme */
  public function index(Request $request): mixed
  {
    // AJAX / JSON request → return all settings for the visual editor
    if ($request->wantsJson() || $request->ajax()) {
      $data = [];
      foreach (array_keys($this->defaults) as $key) {
        $val = $this->blueprint->dbGet('skatheme', $key);
        $data[$key] = ($val !== null && $val !== '') ? $val : ($this->defaults[$key] ?? '');
      }
      return response()->json($data);
    }

    // Normal browser GET → open the visual editor
    return redirect('/extensions/skatheme/editor/index.html');
  }

  /** POST /admin/extensions/skatheme */
  public function update(SkathemeSettingsFormRequest $request): mixed
  {
    $validated = $request->normalize();

    foreach ($validated as $key => $value) {
      $this->blueprint->dbSet('skatheme', $key, (string) $value);
    }

    // AJAX request → return JSON
    if ($request->wantsJson() || $request->ajax()) {
      return response()->json(['success' => true, 'message' => 'SKA Theme settings saved!']);
    }

    // Regular form POST → redirect back to editor
    return redirect('/extensions/skatheme/editor/');
  }
}

// ── Form request ───────────────────────────────────────────────────────────────
class SkathemeSettingsFormRequest extends AdminFormRequest
{
  public function rules(): array
  {
    return [
      // Sidebar navigation icons
      'sidebar_home'                   => 'nullable|string',
      'sidebar_admin'                  => 'nullable|string',
      'sidebar_account'                => 'nullable|string',
      'sidebar_logout'                 => 'nullable|string',
      'sidebar_server_terminal'        => 'nullable|string',
      'sidebar_server_files'           => 'nullable|string',
      'sidebar_server_databases'       => 'nullable|string',
      'sidebar_server_schedules'       => 'nullable|string',
      'sidebar_server_users'           => 'nullable|string',
      'sidebar_server_backups'         => 'nullable|string',
      'sidebar_server_network'         => 'nullable|string',
      'sidebar_server_startup'         => 'nullable|string',
      'sidebar_server_settings'        => 'nullable|string',
      'sidebar_server_activity'        => 'nullable|string',
      'sidebar_server_more'            => 'nullable|string',
      'sidebar_account_account'        => 'nullable|string',
      'sidebar_account_api'            => 'nullable|string',
      'sidebar_account_ssh'            => 'nullable|string',
      'sidebar_account_activity'       => 'nullable|string',
      'sidebar_account_more'           => 'nullable|string',
      // Sidebar style
      'icon_scale'                     => 'numeric|between:0.10,1',
      'sidebar_full'                   => 'boolean',
      'sidebar_buttonstyle'            => 'numeric|between:0,2',
      'sidebar_hover'                  => 'string|in:disabled,popout,expand',
      'sidebar_hover_tooltip'          => 'numeric|between:0,2',
      'sidebar_always_visible_buttons' => 'boolean',
      'sidebar_separators'             => 'boolean',
      'sidebar_border_radius'          => 'numeric|between:0,20',
      'sidebar_background'             => 'string|in:default,blurred',
      // Custom logos
      'sidebar_customlogo'             => 'nullable|string',
      'auth_customlogo'                => 'nullable|string',
      // Background
      'background_image'               => 'nullable|string',
      'background_appearance'          => 'numeric|between:0,2',
      'background_magic'               => 'nullable|string',
      'background_magicsize'           => 'numeric|between:50,500',
      'auth_background_image'          => 'nullable|string',
      'auth_background_appearance'     => 'numeric|between:0,2',
      'auth_background_magic'          => 'nullable|string',
      'auth_background_magicsize'      => 'numeric|between:50,500',
      // Palette (hex #rrggbb)
      'palette_dashboard_1'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_dashboard_2'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_dashboard_3'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_dashboard_4'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_dashboard_5'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_dashboard_6'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_dashboard_7'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_dashboard_8'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_dashboard_9'            => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_sidebar_1'              => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_sidebar_2'              => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_sidebar_3'              => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_sidebar_4'              => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_sidebar_5'             => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_sidebar_6'              => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_sidebar_7'              => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_sidebar_8'              => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_auth_1'                 => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_auth_2'                 => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_auth_3'                 => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_auth_4'                 => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_auth_5'                 => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_auth_6'                 => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_auth_7'                 => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_auth_8'                 => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_status_offline'         => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_status_error'           => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_status_starting'        => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_status_online'          => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'statusgradient_style'           => 'string|in:default,flat',
      // Features
      'watermark'                      => 'boolean',
      'watermark_auth'                 => 'boolean',
      'keyboard_shortcuts'             => 'boolean',
      'keybind_icons'                  => 'boolean',
      'server_overview_graphs'         => 'boolean',
      'server_colored_power'           => 'boolean',
      'dashboard_transparency'         => 'numeric|between:0,3',
      'page_indexing'                  => 'boolean',
      'border_radius'                  => 'numeric|between:0,20',
      'server_list'                    => 'string|in:cards,list',
      'animations'                     => 'string|in:fadeup,zoomout,fadein,disabled',
      'icon_fallback'                  => 'nullable|string',
      // Weblinks
      'website_links'                  => 'boolean',
      'weblink_support'                => 'nullable|string',
      'weblink_billing'                => 'nullable|string',
      'weblink_status'                 => 'nullable|string',
      'weblink_social_discord'         => 'nullable|string',
      'weblink_social_github'          => 'nullable|string',
      'website_links_align'            => 'boolean',
      // Alert
      'alert'                          => 'boolean',
      'alert_text'                     => 'nullable|string|max:500',
      'alert_icon'                     => 'nullable|string',
      'alert_position'                 => 'string|in:sticky,static',
      'alert_dismiss'                  => 'boolean',
      // Init / reset
      'reset'                          => 'boolean',
      // ── Arix features ──────────────────────────────────────────────────
      'font_family'                    => 'nullable|string|max:100',
      'custom_css'                     => 'nullable|string|max:20000',
      'glass_intensity'                => 'string|in:0,1,2,3',
      'server_card_style'              => 'string|in:default,flat,glass,neon',
      'dark_mode'                      => 'string|in:dark,light',
    ];
  }

  /** Return only validated non-null values */
  public function normalize(): array
  {
    return array_filter(
      $this->validated(),
      fn ($v) => $v !== null
    );
  }
}
