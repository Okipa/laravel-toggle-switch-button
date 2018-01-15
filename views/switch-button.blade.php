<div class="switch-group">
    @if($labelIcon)
        <span class="switch-icon @if($labelIcon && $labelString)start @else start end @endif">
            {!! $labelIcon !!}
        </span>
    @endif
    @if($labelString)
        <span class="switch-label @if($labelIcon && $labelString)end @else start end @endif" readonly="">
            {{ $labelString }}
        </span>
    @endif
    <div class="switch-container @if($labelIcon || $labelString)space-left @endif">
        <div class="switch-block">
            <input class="switch" id="{{ $inputId ? $inputId : $inputName }}" type="checkbox" name="{{ $inputName }}" @if($inputChecked)checked="checked" @endif>
            <label class="switch-btn activate" for="{{ $inputId ? $inputId : $inputName }}"></label>
        </div>
    </div>
</div>
