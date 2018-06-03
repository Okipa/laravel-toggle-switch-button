<div class="switch-group">
    @if($icon)
        <span class="switch-icon @if($icon && $label)start @else()start end @endif">
            {!! $icon !!}
        </span>
    @endif
    @if($label)
        <span class="switch-label @if($icon && $label)end @else()start end @endif">
            {{ $label }}
        </span>
    @endif
    <div class="switch-container @if($icon || $label)space-left @endif">
        <div class="switch-block">
            <input class="switch"
                   id="toggle-switch-{{ $name }}"
                   type="checkbox"
                   name="{{ $name }}"
                   @if($checked)checked="checked"@endif>
            <label class="switch-btn activate" for="toggle-switch-{{ $name }}"></label>
        </div>
    </div>
</div>
