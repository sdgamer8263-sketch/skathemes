@extends('layouts.admin')

@section('title', 'SKA Theme')

@section('content-header')
    <h1>SKA Theme <small>v1.0.0 &mdash; Deep-space neon</small></h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.index') }}">Admin</a></li>
        <li class="active">SKA Theme</li>
    </ol>
@endsection

@section('content')
<div class="row">
<div class="col-xs-12">

@if(session('ska_success'))
<div class="alert alert-success">
    <i class="fa fa-check"></i> {{ session('ska_success') }}
</div>
@endif

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Settings</h3>
    </div>
    <div class="box-body">

        <div class="alert alert-warning">
            <strong>Note:</strong> &ldquo;Copyright &copy; SKA&rdquo; is permanently hardcoded in the theme footer and cannot be removed.
        </div>

        <form action="/admin/extensions/skatheme" method="POST">
            {{ csrf_field() }}

            <h4>Dashboard Palette</h4>
            <div class="row">
                @foreach(['1'=>'Text primary','2'=>'Text secondary','3'=>'Panel bg 1','4'=>'Panel bg 2','5'=>'Panel bg 3','6'=>'Panel bg 4','7'=>'Page bg','8'=>'Accent','9'=>'Accent dark'] as $n=>$label)
                <div class="col-md-4" style="margin-bottom:10px;">
                    <label>{{ $label }}</label>
                    <div class="input-group">
                        <span class="input-group-addon" style="padding:4px 8px;">
                            <input type="color"
                                value="{{ $data['palette_dashboard_'.$n] ?? '#000000' }}"
                                oninput="document.getElementById('pd{{ $n }}').value=this.value"
                                style="width:22px;height:22px;border:none;padding:0;cursor:pointer;">
                        </span>
                        <input id="pd{{ $n }}" type="text" class="form-control"
                            name="palette_dashboard_{{ $n }}"
                            value="{{ $data['palette_dashboard_'.$n] ?? '#000000' }}"
                            maxlength="7">
                    </div>
                </div>
                @endforeach
            </div>

            <h4>Sidebar Palette</h4>
            <div class="row">
                @foreach(['1'=>'Text primary','2'=>'Icon active','3'=>'Sidebar bg 1','4'=>'Sidebar bg 2','5'=>'Sidebar bg 3','6'=>'Sidebar bg 4','7'=>'Sidebar bg deep','8'=>'Button'] as $n=>$label)
                <div class="col-md-4" style="margin-bottom:10px;">
                    <label>{{ $label }}</label>
                    <div class="input-group">
                        <span class="input-group-addon" style="padding:4px 8px;">
                            <input type="color"
                                value="{{ $data['palette_sidebar_'.$n] ?? '#000000' }}"
                                oninput="document.getElementById('ps{{ $n }}').value=this.value"
                                style="width:22px;height:22px;border:none;padding:0;cursor:pointer;">
                        </span>
                        <input id="ps{{ $n }}" type="text" class="form-control"
                            name="palette_sidebar_{{ $n }}"
                            value="{{ $data['palette_sidebar_'.$n] ?? '#000000' }}"
                            maxlength="7">
                    </div>
                </div>
                @endforeach
            </div>

            <h4>Auth Palette</h4>
            <div class="row">
                @foreach(['1'=>'Page bg','2'=>'Card bg','3'=>'Input bg','4'=>'Button','5'=>'Error','6'=>'Link','7'=>'Label','8'=>'Input text'] as $n=>$label)
                <div class="col-md-4" style="margin-bottom:10px;">
                    <label>{{ $label }}</label>
                    <div class="input-group">
                        <span class="input-group-addon" style="padding:4px 8px;">
                            <input type="color"
                                value="{{ $data['palette_auth_'.$n] ?? '#000000' }}"
                                oninput="document.getElementById('pa{{ $n }}').value=this.value"
                                style="width:22px;height:22px;border:none;padding:0;cursor:pointer;">
                        </span>
                        <input id="pa{{ $n }}" type="text" class="form-control"
                            name="palette_auth_{{ $n }}"
                            value="{{ $data['palette_auth_'.$n] ?? '#000000' }}"
                            maxlength="7">
                    </div>
                </div>
                @endforeach
            </div>

            <h4>Status Colors</h4>
            <div class="row">
                @foreach(['offline'=>'Offline','error'=>'Error','starting'=>'Starting','online'=>'Online'] as $key=>$label)
                <div class="col-md-3" style="margin-bottom:10px;">
                    <label>{{ $label }}</label>
                    <div class="input-group">
                        <span class="input-group-addon" style="padding:4px 8px;">
                            <input type="color"
                                value="{{ $data['palette_status_'.$key] ?? '#000000' }}"
                                oninput="document.getElementById('pst_{{ $key }}').value=this.value"
                                style="width:22px;height:22px;border:none;padding:0;cursor:pointer;">
                        </span>
                        <input id="pst_{{ $key }}" type="text" class="form-control"
                            name="palette_status_{{ $key }}"
                            value="{{ $data['palette_status_'.$key] ?? '#000000' }}"
                            maxlength="7">
                    </div>
                </div>
                @endforeach
            </div>

            <h4>General</h4>
            <div class="row">
                <div class="col-md-4">
                    <label>Animations</label>
                    <select name="animations" class="form-control">
                        @foreach(['fadeup','zoomout','fadein','disabled'] as $opt)
                        <option value="{{ $opt }}" @if(($data['animations'] ?? 'fadeup') === $opt) selected @endif>{{ ucfirst($opt) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Server list style</label>
                    <select name="server_list" class="form-control">
                        <option value="cards" @if(($data['server_list'] ?? 'cards') === 'cards') selected @endif>Cards</option>
                        <option value="list" @if(($data['server_list'] ?? 'cards') === 'list') selected @endif>List</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label>Sidebar hover</label>
                    <select name="sidebar_hover" class="form-control">
                        @foreach(['disabled','popout','expand'] as $opt)
                        <option value="{{ $opt }}" @if(($data['sidebar_hover'] ?? 'popout') === $opt) selected @endif>{{ ucfirst($opt) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4" style="margin-top:10px;">
                    <label>Border radius (0-20)</label>
                    <input type="number" name="border_radius" class="form-control"
                        min="0" max="20" value="{{ $data['border_radius'] ?? '10' }}">
                </div>
                <div class="col-md-4" style="margin-top:10px;">
                    <label>Status gradient style</label>
                    <select name="statusgradient_style" class="form-control">
                        <option value="default" @if(($data['statusgradient_style'] ?? 'default') === 'default') selected @endif>Default</option>
                        <option value="flat" @if(($data['statusgradient_style'] ?? 'default') === 'flat') selected @endif>Flat</option>
                    </select>
                </div>
                <div class="col-md-4" style="margin-top:10px;">
                    <label>Icon scale (0.10 - 1.00)</label>
                    <input type="number" name="icon_scale" class="form-control"
                        min="0.10" max="1" step="0.05" value="{{ $data['icon_scale'] ?? '0.90' }}">
                </div>
            </div>

            <h4>Toggles</h4>
            <div class="row">
                @foreach([
                    ['watermark','Show watermark'],
                    ['keyboard_shortcuts','Keyboard shortcuts'],
                    ['keybind_icons','Keybind icons'],
                    ['server_overview_graphs','Server graphs'],
                    ['server_colored_power','Colored power buttons'],
                    ['sidebar_always_visible_buttons','Always visible sidebar buttons'],
                    ['sidebar_separators','Sidebar separators'],
                    ['sidebar_full','Full sidebar (labels)'],
                    ['page_indexing','Page indexing (SEO)'],
                    ['website_links','Quick weblinks bar'],
                    ['alert','Announcement alert'],
                    ['watermark_auth','Auth page watermark'],
                    ['alert_dismiss','Alert dismissable'],
                ] as [$field, $label])
                <div class="col-md-4" style="margin-bottom:6px;">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="{{ $field }}" value="1"
                                @if(($data[$field] ?? '0') == '1') checked @endif>
                            {{ $label }}
                        </label>
                    </div>
                </div>
                @endforeach
            </div>

            <hr>
            <div class="checkbox" style="margin-bottom:16px;">
                <label style="color:#c0392b;">
                    <input type="checkbox" name="reset" value="1">
                    <strong>Reset all settings to factory defaults</strong>
                </label>
            </div>

            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fa fa-save"></i> Save Settings
            </button>

        </form>

    </div>
</div>

</div>
</div>
@endsection
