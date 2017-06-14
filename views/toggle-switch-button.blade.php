@if(config('toggle_switch_button::styles_mode') === 'blade')
    @include('toggle_switch_button::toggle-switch-style')
@endif

<div class="@if($label_icon || $label_string)input-group @endif swipe-group">
    @if($label_icon)
        <span class="input-group-addon">
            {!! $label_icon !!}
        </span>
    @endif
    @if($label_string)
        <span class="form-control swipe-label" readonly="">
            {{ $label_string }}
        </span>
    @endif
    <input class="swipe" id="{{ $input_name }}" type="checkbox" name="{{ $input_name }}" @if($input_checked)checked="checked" @endif>
    <label class="swipe-btn activate" for="{{ $input_name }}"></label>
</div>