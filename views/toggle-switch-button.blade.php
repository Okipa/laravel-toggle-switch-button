@if($styles_view = config('toggle_switch_button::styles.view'))
    @include('toggle_switch_button::' . $styles_view)
@endif

<form role="form" method="POST" action="{{ $route }}">
    {!! csrf_field() !!}
    <div class="swipe-group">
        <input class="swipe" id="activate_{{ $entity->id }}" type="checkbox" name="active" @if($entity->{$attribute})checked @endif>
        <label class="swipe-btn activate" for="activate_{{ $entity->id }}"></label>
    </div>
</form>