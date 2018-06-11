<div class="switch-group">
    @if($icon)
        <span {{ classTag('switch-icon', $icon && $label ? 'start' : ['start', 'end']) }}>
            {!! $icon !!}
        </span>
    @endif
    @if($label)
        <span {{ classTag('switch-label', $icon && $label ? 'end' : ['start', 'end']) }}>
            {{ $label }}
        </span>
    @endif
    <div {{ classTag('switch-container', $icon || $label ? 'space-left' : null) }}>
        <div class="switch-block">
            <input class="switch"
                   id="toggle-{{ $name }}"
                   type="checkbox"
                   name="{{ $name }}"
                   {{ htmlAttributes($checked ? ['checked' => 'checked'] : null) }}>
            <label class="switch-btn activate" for="toggle-{{ $name }}"></label>
        </div>
    </div>
</div>
