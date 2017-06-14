@if(config('toggle_switch_button.styles.load_from_blade'))
    @include('toggle_switch_button::styles/toggle-switch-styles')
@endif

<div class="@if($label_icon || $label_string)input-group @endif switch-group">
    @if($label_icon)
        <span class="input-group-addon">
            {!! $label_icon !!}
        </span>
    @endif
    @if($label_string)
        <span class="form-control switch-label" readonly="">
            {{ $label_string }}
        </span>
    @endif
    <input class="switch" id="{{ $input_name }}" type="checkbox" name="{{ $input_name }}" @if($input_checked)checked="checked" @endif>
    <label class="switch-btn activate" for="{{ $input_name }}"></label>
</div>