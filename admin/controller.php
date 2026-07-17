<?php

namespace Pterodactyl\Http\Controllers\Admin\Extensions\skatheme;

use Illuminate\View\Factory as ViewFactory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Pterodactyl\Http\Controllers\Controller;
use Pterodactyl\Http\Requests\Admin\AdminFormRequest;
use Pterodactyl\BlueprintFramework\Libraries\ExtensionLibrary\Admin\BlueprintAdminLibrary as BlueprintExtensionLibrary;

class skathemeExtensionController extends Controller
{
  public function __construct(
    private ViewFactory $view,
    private BlueprintExtensionLibrary $blueprint,
  ) {}

  public function index(): View
  {
    // ── Read all settings from DB ─────────────────────────────────────────
    $init                         = $this->blueprint->dbGet('skatheme', 'init');
    $reset                        = $this->blueprint->dbGet('skatheme', 'reset');

    // ── Default values (SKA deep-space neon palette) ──────────────────────
    $defaults = [
      'sidebar_home'                  => '',
      'sidebar_admin'                 => '',
      'sidebar_account'               => '',
      'sidebar_logout'                => '',
      'sidebar_server_terminal'       => '',
      'sidebar_server_files'          => '',
      'sidebar_server_databases'      => '',
      'sidebar_server_schedules'      => '',
      'sidebar_server_users'          => '',
      'sidebar_server_backups'        => '',
      'sidebar_server_network'        => '',
      'sidebar_server_startup'        => '',
      'sidebar_server_settings'       => '',
      'sidebar_server_activity'       => '',
      'sidebar_server_more'           => '',
      'sidebar_account_account'       => '',
      'sidebar_account_api'           => '',
      'sidebar_account_ssh'           => '',
      'sidebar_account_activity'      => '',
      'sidebar_account_more'          => '',
      'icon_scale'                    => '0.90',
      'watermark'                     => '1',
      'init'                          => '{version}',
      'background_image'              => '',
      'sidebar_background'            => 'default',
      'content_background'            => '',
      'background_appearance'         => '0',
      'background_magic'              => '',
      'background_magicsize'          => '215',
      'auth_background_image'         => '',
      'auth_background_appearance'    => '0',
      'auth_background_magic'         => '',
      'auth_background_magicsize'     => '215',
      'palette_dashboard_1'           => '#e2e8f0',
      'palette_dashboard_2'           => '#cbd5e1',
      'palette_dashboard_3'           => '#0d0d26',
      'palette_dashboard_4'           => '#141430',
      'palette_dashboard_5'           => '#1a1a3a',
      'palette_dashboard_6'           => '#1f1f45',
      'palette_dashboard_7'           => '#060613',
      'palette_dashboard_8'           => '#a855f7',
      'palette_dashboard_9'           => '#9333ea',
      'palette_sidebar_1'             => '#c084fc',
      'palette_sidebar_2'             => '#a855f7',
      'palette_sidebar_3'             => '#1a0a2e',
      'palette_sidebar_4'             => '#220d38',
      'palette_sidebar_5'             => '#2d1048',
      'palette_sidebar_6'             => '#3d1560',
      'palette_sidebar_7'             => '#08081a',
      'palette_sidebar_8'             => '#7c3aed',
      'palette_auth_1'                => '#060613',
      'palette_auth_2'                => '#0d0d26',
      'palette_auth_3'                => '#1a1a3a',
      'palette_auth_4'                => '#7c3aed',
      'palette_auth_5'                => '#f87171',
      'palette_auth_6'                => '#7c3aed',
      'palette_auth_7'                => '#c084fc',
      'palette_auth_8'                => '#ffffff',
      'keyboard_shortcuts'            => '1',
      'keybind_icons'                 => '1',
      'sidebar_hover_tooltip'         => '2',
      'server_overview_graphs'        => '1',
      'server_colored_power'          => '0',
      'sidebar_always_visible_buttons'=> '1',
      'icon_fallback'                 => 'bootstrap',
      'dashboard_transparency'        => '0',
      'page_indexing'                 => '1',
      'website_links'                 => '0',
      'weblink_support'               => '',
      'weblink_billing'               => '',
      'weblink_status'                => '',
      'weblink_social_discord'        => '',
      'weblink_social_github'         => '',
      'website_links_align'           => '0',
      'alert'                         => '0',
      'alert_text'                    => '',
      'alert_icon'                    => 'megaphone-fill',
      'watermark_auth'                => '1',
      'server_list'                   => 'cards',
      'reset'                         => '0',
      'border_radius'                 => '10',
      'sidebar_full'                  => '0',
      'sidebar_buttonstyle'           => '0',
      'sidebar_customlogo'            => '',
      'auth_customlogo'               => '',
      'alert_position'                => 'sticky',
      'sidebar_border_radius'         => '10',
      'alert_dismiss'                 => '0',
      'palette_status_offline'        => '#64748b',
      'palette_status_error'          => '#f87171',
      'palette_status_starting'       => '#facc15',
      'palette_status_online'         => '#4ade80',
      'statusgradient_style'          => 'default',
      'sidebar_hover'                 => 'popout',
      'animations'                    => 'fadeup',
      'sidebar_separators'            => '1',
    ];

    // ── Apply defaults / reset ────────────────────────────────────────────
    foreach ($defaults as $key => $default) {
      $current = $this->blueprint->dbGet('skatheme', $key);
      if ($current === '' || $current === null || $reset === '1') {
        $this->blueprint->dbSet('skatheme', $key, $default);
      }
    }

    // ── Mark as initialised ───────────────────────────────────────────────
    if ($init !== '{version}' || $reset === '1') {
      $this->blueprint->dbSet('skatheme', 'init', '{version}');
    }
    if ($reset === '1') {
      $this->blueprint->dbSet('skatheme', 'reset', '0');
    }

    // ── Re-read all values to pass to view ───────────────────────────────
    $data = [];
    foreach (array_keys($defaults) as $key) {
      $data[$key] = $this->blueprint->dbGet('skatheme', $key);
    }

    return $this->view->make('blueprint.extensions.skatheme.admin.view', [
      'data' => $data,
    ]);
  }

  public function update(SkathemeSettingsFormRequest $request): RedirectResponse
  {
    foreach ($request->normalize() as $key => $value) {
      $this->blueprint->dbSet('skatheme', $key, $value);
    }
    return redirect('/admin/extensions/skatheme')
      ->with('success', 'SKA Theme settings saved!');
  }
}

// ── Form request ──────────────────────────────────────────────────────────────
class SkathemeSettingsFormRequest extends AdminFormRequest
{
  public function rules(): array
  {
    return [
      'sidebar_home'                   => 'nullable|string|url:http,https',
      'sidebar_admin'                  => 'nullable|string|url:http,https',
      'sidebar_account'                => 'nullable|string|url:http,https',
      'sidebar_logout'                 => 'nullable|string|url:http,https',
      'sidebar_server_terminal'        => 'nullable|string|url:http,https',
      'sidebar_server_files'           => 'nullable|string|url:http,https',
      'sidebar_server_databases'       => 'nullable|string|url:http,https',
      'sidebar_server_schedules'       => 'nullable|string|url:http,https',
      'sidebar_server_users'           => 'nullable|string|url:http,https',
      'sidebar_server_backups'         => 'nullable|string|url:http,https',
      'sidebar_server_network'         => 'nullable|string|url:http,https',
      'sidebar_server_startup'         => 'nullable|string|url:http,https',
      'sidebar_server_settings'        => 'nullable|string|url:http,https',
      'sidebar_server_activity'        => 'nullable|string|url:http,https',
      'sidebar_server_more'            => 'nullable|string|url:http,https',
      'sidebar_account_account'        => 'nullable|string|url:http,https',
      'sidebar_account_api'            => 'nullable|string|url:http,https',
      'sidebar_account_ssh'            => 'nullable|string|url:http,https',
      'sidebar_account_activity'       => 'nullable|string|url:http,https',
      'sidebar_account_more'           => 'nullable|string|url:http,https',
      'icon_scale'                     => 'numeric|between:0.10,1',
      'watermark'                      => 'boolean',
      'background_image'               => 'nullable|string|url:http,https',
      'sidebar_background'             => 'string|in:default,blurred',
      'background_appearance'          => 'numeric|between:0,2',
      'background_magic'               => 'nullable|string',
      'background_magicsize'           => 'numeric|between:50,500',
      'auth_background_image'          => 'nullable|string|url:http,https',
      'auth_background_appearance'     => 'numeric|between:0,2',
      'auth_background_magic'          => 'nullable|string',
      'auth_background_magicsize'      => 'numeric|between:50,500',
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
      'palette_sidebar_5'              => 'string|regex:/^#[0-9a-fA-F]{6}$/',
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
      'keyboard_shortcuts'             => 'boolean',
      'keybind_icons'                  => 'boolean',
      'sidebar_hover_tooltip'          => 'numeric|between:0,2',
      'server_overview_graphs'         => 'boolean',
      'server_colored_power'           => 'boolean',
      'sidebar_always_visible_buttons' => 'boolean',
      'icon_fallback'                  => 'string',
      'dashboard_transparency'         => 'numeric|between:0,3',
      'page_indexing'                  => 'boolean',
      'website_links'                  => 'boolean',
      'weblink_support'                => 'nullable|string|url:http,https',
      'weblink_billing'                => 'nullable|string|url:http,https',
      'weblink_status'                 => 'nullable|string|url:http,https',
      'weblink_social_discord'         => 'nullable|string',
      'weblink_social_github'          => 'nullable|string',
      'website_links_align'            => 'boolean',
      'alert'                          => 'boolean',
      'alert_text'                     => 'nullable|string',
      'alert_icon'                     => 'nullable|string',
      'watermark_auth'                 => 'boolean',
      'server_list'                    => 'string|in:cards,list',
      'reset'                          => 'boolean',
      'border_radius'                  => 'numeric|between:0,20',
      'sidebar_full'                   => 'boolean',
      'sidebar_buttonstyle'            => 'numeric|between:0,2',
      'sidebar_customlogo'             => 'nullable|string|url:http,https',
      'auth_customlogo'                => 'nullable|string|url:http,https',
      'alert_position'                 => 'string|in:sticky,static',
      'sidebar_border_radius'          => 'numeric|between:0,20',
      'alert_dismiss'                  => 'boolean',
      'palette_status_offline'         => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_status_error'           => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_status_starting'        => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'palette_status_online'          => 'string|regex:/^#[0-9a-fA-F]{6}$/',
      'statusgradient_style'           => 'string|in:default,flat',
      'sidebar_hover'                  => 'string|in:disabled,popout,expand',
      'animations'                     => 'string|in:fadeup,zoomout,fadein,disabled',
      'sidebar_separators'             => 'boolean',
    ];
  }

  public function normalize(): array
  {
    return array_filter($this->validated(), fn($v) => $v !== null);
  }
}
