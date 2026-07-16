@extends('blueprint.admin')
@section('title', 'SKA Theme Settings')
@section('content')
<div class="row">
  <div class="col-xs-12">

    <div class="box box-primary" style="background:linear-gradient(135deg,#0d0a20,#08081a);border:1px solid rgba(168,85,247,.25);border-radius:12px;">
      <div class="box-header with-border" style="border-color:rgba(168,85,247,.15);padding:18px 20px;">
        <h3 class="box-title" style="color:#c084fc;font-weight:700;">
          ✦ SKA Theme
          <span style="font-size:11px;font-weight:400;color:rgba(148,154,190,.6);margin-left:8px;">v1.0.0</span>
        </h3>
      </div>

      <div class="box-body" style="padding:20px;">

        {{-- Success / Error flash --}}
        @if(session('success'))
          <div class="alert" style="background:rgba(74,222,128,.1);border:1px solid rgba(74,222,128,.3);border-radius:8px;color:#4ade80;padding:10px 14px;margin-bottom:16px;">
            {{ session('success') }}
          </div>
        @endif

        {{-- HARDCODED FOOTER NOTICE --}}
        <div style="background:rgba(248,113,113,.06);border:1px solid rgba(248,113,113,.2);border-radius:8px;padding:12px 16px;margin-bottom:20px;">
          <p style="margin:0;font-size:12px;color:rgba(248,113,113,.9);">
            ⚠️ <strong>"Copyright ©️ SKA"</strong> is permanently hardcoded into the theme and cannot be removed or changed.
          </p>
        </div>

        {{-- CONFIGURABLE FOOTER --}}
        <form action="{{ route('admin.extensions.skatheme.update') }}" method="POST">
          @csrf
          @method('PATCH')
          <div style="margin-bottom:20px;">
            <label style="display:block;font-size:12px;font-weight:600;color:rgba(226,232,240,.7);margin-bottom:6px;letter-spacing:.04em;">
              SECOND FOOTER LINE <span style="color:rgba(148,154,190,.5);font-weight:400;">(SKA_DESIGN_BY)</span>
            </label>
            <div style="display:flex;gap:10px;">
              <input type="text" name="design_by"
                value="{{ config('ska.design_by', 'Design by SKA') }}"
                placeholder="Design by SKA" maxlength="120"
                style="flex:1;padding:8px 12px;background:rgba(9,9,26,.8);border:1px solid rgba(168,85,247,.2);border-radius:8px;color:#e2e8f0;font-size:13px;outline:none;">
              <button type="submit" style="padding:8px 18px;background:linear-gradient(135deg,#7c3aed,#6d28d9);border:1px solid rgba(168,85,247,.4);border-radius:8px;color:#fff;font-size:13px;font-weight:600;cursor:pointer;white-space:nowrap;">
                Save
              </button>
            </div>
            <p style="margin:6px 0 0;font-size:11px;color:rgba(148,154,190,.5);">Leave empty to hide the second footer line.</p>
          </div>
        </form>

        {{-- INFO GRID --}}
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;margin-top:4px;">
          <div style="background:rgba(15,15,42,.5);border:1px solid rgba(168,85,247,.1);border-radius:8px;padding:14px;">
            <div style="font-size:10px;font-weight:700;letter-spacing:.12em;color:rgba(168,85,247,.6);margin-bottom:6px;">PALETTE</div>
            <p style="margin:0;font-size:12px;color:rgba(148,154,190,.75);">Deep-space neon — cosmic black, neon purple <code style="color:#a855f7">#a855f7</code>, cyan <code style="color:#22d3ee">#22d3ee</code></p>
          </div>
          <div style="background:rgba(15,15,42,.5);border:1px solid rgba(34,211,238,.1);border-radius:8px;padding:14px;">
            <div style="font-size:10px;font-weight:700;letter-spacing:.12em;color:rgba(34,211,238,.6);margin-bottom:6px;">BASED ON</div>
            <p style="margin:0;font-size:12px;color:rgba(148,154,190,.75);">Nebula v2.2-2 visual system + SKA custom design layer</p>
          </div>
        </div>

        <div style="margin-top:16px;text-align:center;font-size:10px;color:rgba(148,154,190,.35);">
          SKA Theme v1.0.0 &nbsp;·&nbsp; <span style="color:rgba(168,85,247,.6);">Copyright © SKA</span>
        </div>

      </div>
    </div>

  </div>
</div>
@endsection
