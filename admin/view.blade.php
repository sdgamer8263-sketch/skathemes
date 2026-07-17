@extends('blueprint.admin')
@section('title', 'SKA Theme')
@section('content')
<div class="row">
  <div class="col-xs-12">

    {{-- Flash message --}}
    @if(session('success'))
    <div class="alert alert-success" style="border-radius:8px;">
      <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
    </div>
    @endif

    <div class="box" style="background:linear-gradient(135deg,#0d0a20,#08081a);border:1px solid rgba(168,85,247,.25);border-radius:12px;">
      <div class="box-header with-border" style="border-color:rgba(168,85,247,.15);">
        <h3 class="box-title" style="color:#c084fc;font-weight:700;">✦ SKA Theme <small style="color:rgba(148,154,190,.5);">v1.0.0</small></h3>
      </div>

      <div class="box-body">

        {{-- HARDCODED FOOTER NOTICE --}}
        <div class="alert" style="background:rgba(248,113,113,.06);border:1px solid rgba(248,113,113,.2);border-radius:8px;color:rgba(248,113,113,.9);">
          ⚠️ <strong>"Copyright ©️ SKA"</strong> is permanently hardcoded and cannot be removed.
        </div>

        <form action="{{ route('admin.extensions.skatheme.update') }}" method="POST">
          @csrf
          @method('PATCH')

          {{-- PALETTE SECTION --}}
          <h4 style="color:#a855f7;border-bottom:1px solid rgba(168,85,247,.2);padding-bottom:8px;margin-top:0;">Dashboard Palette</h4>
          <div class="row" style="margin-bottom:16px;">
            @foreach(['1'=>'Text primary','2'=>'Text secondary','3'=>'Panel bg 1','4'=>'Panel bg 2','5'=>'Panel bg 3','6'=>'Panel bg 4','7'=>'Page bg','8'=>'Accent','9'=>'Accent dark'] as $n=>$label)
            <div class="col-xs-6 col-sm-4" style="margin-bottom:10px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);display:block;">{{ $label }}</label>
              <div style="display:flex;align-items:center;gap:6px;">
                <input type="color" name="palette_dashboard_{{ $n }}" value="{{ $data['palette_dashboard_'.$n] ?? '#000000' }}"
                  style="width:36px;height:30px;border:1px solid rgba(168,85,247,.2);border-radius:4px;background:none;cursor:pointer;padding:2px;">
                <input type="text" name="_palette_dashboard_{{ $n }}_text" value="{{ $data['palette_dashboard_'.$n] ?? '#000000' }}"
                  style="flex:1;padding:4px 8px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.15);border-radius:4px;color:#e2e8f0;font-size:12px;"
                  oninput="this.previousElementSibling.value=this.value">
              </div>
            </div>
            @endforeach
          </div>

          <h4 style="color:#a855f7;border-bottom:1px solid rgba(168,85,247,.2);padding-bottom:8px;">Sidebar Palette</h4>
          <div class="row" style="margin-bottom:16px;">
            @foreach(['1'=>'Text primary','2'=>'Icon active','3'=>'Sidebar bg 1','4'=>'Sidebar bg 2','5'=>'Sidebar bg 3','6'=>'Sidebar bg 4','7'=>'Sidebar bg (deep)','8'=>'Button'] as $n=>$label)
            <div class="col-xs-6 col-sm-4" style="margin-bottom:10px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);display:block;">{{ $label }}</label>
              <div style="display:flex;align-items:center;gap:6px;">
                <input type="color" name="palette_sidebar_{{ $n }}" value="{{ $data['palette_sidebar_'.$n] ?? '#000000' }}"
                  style="width:36px;height:30px;border:1px solid rgba(168,85,247,.2);border-radius:4px;background:none;cursor:pointer;padding:2px;">
                <input type="text" value="{{ $data['palette_sidebar_'.$n] ?? '#000000' }}"
                  style="flex:1;padding:4px 8px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.15);border-radius:4px;color:#e2e8f0;font-size:12px;"
                  oninput="this.previousElementSibling.value=this.value">
              </div>
            </div>
            @endforeach
          </div>

          <h4 style="color:#a855f7;border-bottom:1px solid rgba(168,85,247,.2);padding-bottom:8px;">Auth Palette</h4>
          <div class="row" style="margin-bottom:16px;">
            @foreach(['1'=>'Page bg','2'=>'Card bg','3'=>'Input bg','4'=>'Button','5'=>'Error','6'=>'Link','7'=>'Label','8'=>'Input text'] as $n=>$label)
            <div class="col-xs-6 col-sm-4" style="margin-bottom:10px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);display:block;">{{ $label }}</label>
              <div style="display:flex;align-items:center;gap:6px;">
                <input type="color" name="palette_auth_{{ $n }}" value="{{ $data['palette_auth_'.$n] ?? '#000000' }}"
                  style="width:36px;height:30px;border:1px solid rgba(168,85,247,.2);border-radius:4px;background:none;cursor:pointer;padding:2px;">
                <input type="text" value="{{ $data['palette_auth_'.$n] ?? '#000000' }}"
                  style="flex:1;padding:4px 8px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.15);border-radius:4px;color:#e2e8f0;font-size:12px;"
                  oninput="this.previousElementSibling.value=this.value">
              </div>
            </div>
            @endforeach
          </div>

          <h4 style="color:#a855f7;border-bottom:1px solid rgba(168,85,247,.2);padding-bottom:8px;">Status Colors</h4>
          <div class="row" style="margin-bottom:20px;">
            @foreach(['offline'=>'Offline','error'=>'Error','starting'=>'Starting','online'=>'Online'] as $key=>$label)
            <div class="col-xs-6 col-sm-3" style="margin-bottom:10px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);display:block;">{{ $label }}</label>
              <div style="display:flex;align-items:center;gap:6px;">
                <input type="color" name="palette_status_{{ $key }}" value="{{ $data['palette_status_'.$key] ?? '#000000' }}"
                  style="width:36px;height:30px;border:1px solid rgba(168,85,247,.2);border-radius:4px;background:none;cursor:pointer;padding:2px;">
                <input type="text" value="{{ $data['palette_status_'.$key] ?? '#000000' }}"
                  style="flex:1;padding:4px 8px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.15);border-radius:4px;color:#e2e8f0;font-size:12px;"
                  oninput="this.previousElementSibling.value=this.value">
              </div>
            </div>
            @endforeach
          </div>

          {{-- GENERAL SETTINGS --}}
          <h4 style="color:#a855f7;border-bottom:1px solid rgba(168,85,247,.2);padding-bottom:8px;">General Settings</h4>
          <div class="row" style="margin-bottom:20px;">

            <div class="col-sm-4" style="margin-bottom:12px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);">Animations</label>
              <select name="animations" style="width:100%;padding:6px 10px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.2);border-radius:6px;color:#e2e8f0;">
                @foreach(['fadeup','zoomout','fadein','disabled'] as $opt)
                  <option value="{{ $opt }}" @selected(($data['animations'] ?? 'fadeup') === $opt)>{{ ucfirst($opt) }}</option>
                @endforeach
              </select>
            </div>

            <div class="col-sm-4" style="margin-bottom:12px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);">Server list style</label>
              <select name="server_list" style="width:100%;padding:6px 10px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.2);border-radius:6px;color:#e2e8f0;">
                <option value="cards" @selected(($data['server_list'] ?? 'cards') === 'cards')>Cards</option>
                <option value="list" @selected(($data['server_list'] ?? 'cards') === 'list')>List</option>
              </select>
            </div>

            <div class="col-sm-4" style="margin-bottom:12px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);">Border radius (px)</label>
              <input type="number" name="border_radius" min="0" max="20" value="{{ $data['border_radius'] ?? '10' }}"
                style="width:100%;padding:6px 10px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.2);border-radius:6px;color:#e2e8f0;">
            </div>

            <div class="col-sm-4" style="margin-bottom:12px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);">Sidebar hover</label>
              <select name="sidebar_hover" style="width:100%;padding:6px 10px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.2);border-radius:6px;color:#e2e8f0;">
                @foreach(['disabled','popout','expand'] as $opt)
                  <option value="{{ $opt }}" @selected(($data['sidebar_hover'] ?? 'popout') === $opt)>{{ ucfirst($opt) }}</option>
                @endforeach
              </select>
            </div>

            <div class="col-sm-4" style="margin-bottom:12px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);">Status gradient</label>
              <select name="statusgradient_style" style="width:100%;padding:6px 10px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.2);border-radius:6px;color:#e2e8f0;">
                <option value="default" @selected(($data['statusgradient_style'] ?? 'default') === 'default')>Default</option>
                <option value="flat" @selected(($data['statusgradient_style'] ?? 'default') === 'flat')>Flat</option>
              </select>
            </div>

            <div class="col-sm-4" style="margin-bottom:12px;">
              <label style="font-size:11px;color:rgba(226,232,240,.6);">Icon scale</label>
              <input type="number" name="icon_scale" min="0.10" max="1" step="0.05" value="{{ $data['icon_scale'] ?? '0.90' }}"
                style="width:100%;padding:6px 10px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.2);border-radius:6px;color:#e2e8f0;">
            </div>

          </div>

          {{-- TOGGLES --}}
          <h4 style="color:#a855f7;border-bottom:1px solid rgba(168,85,247,.2);padding-bottom:8px;">Feature Toggles</h4>
          <div class="row" style="margin-bottom:20px;">
            @foreach([
              ['watermark','Show watermark'],
              ['keyboard_shortcuts','Keyboard shortcuts'],
              ['server_overview_graphs','Server graphs'],
              ['server_colored_power','Colored power buttons'],
              ['sidebar_separators','Sidebar separators'],
              ['sidebar_full','Full sidebar (labels visible)'],
              ['page_indexing','Page indexing (SEO)'],
            ] as [$field, $label])
            <div class="col-sm-4" style="margin-bottom:8px;">
              <label style="display:flex;align-items:center;gap:8px;cursor:pointer;font-size:13px;color:rgba(226,232,240,.8);">
                <input type="checkbox" name="{{ $field }}" value="1" @checked(($data[$field] ?? '0') == '1')
                  style="width:15px;height:15px;accent-color:#a855f7;">
                {{ $label }}
              </label>
            </div>
            @endforeach
          </div>

          {{-- FACTORY RESET --}}
          <h4 style="color:#f87171;border-bottom:1px solid rgba(248,113,113,.2);padding-bottom:8px;">Danger Zone</h4>
          <div style="margin-bottom:20px;">
            <label style="display:flex;align-items:center;gap:8px;cursor:pointer;font-size:13px;color:rgba(248,113,113,.8);">
              <input type="checkbox" name="reset" value="1"
                style="width:15px;height:15px;accent-color:#f87171;">
              Reset all settings to factory defaults on save
            </label>
          </div>

          <button type="submit" style="padding:10px 28px;background:linear-gradient(135deg,#7c3aed,#6d28d9);border:1px solid rgba(168,85,247,.4);border-radius:8px;color:#fff;font-size:14px;font-weight:600;cursor:pointer;">
            Save Settings
          </button>

        </form>

      </div>
    </div>

  </div>
</div>

<style>
  select option { background: #0d0a20; }
</style>
@endsection
