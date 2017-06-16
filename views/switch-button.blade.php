<div class="switch-group">
    @if($label_icon)
        <span class="switch-icon @if($label_icon && $label_string)start @else start end @endif">
            {!! $label_icon !!}
        </span>
    @endif
    @if($label_string)
        <span class="switch-label @if($label_icon && $label_string)end @else start end @endif" readonly="">
            {{ $label_string }}
        </span>
    @endif
    <div class="switch-container @if($label_icon || $label_string)space-left @endif">
        <div class="switch-block">
            <input class="switch" id="{{ $input_id ? $input_id : $input_name }}" type="checkbox" name="{{ $input_name }}" @if($input_checked)checked="checked" @endif>
            <label class="switch-btn activate" for="{{ $input_id ? $input_id : $input_name }}"></label>
        </div>
    </div>
</div>