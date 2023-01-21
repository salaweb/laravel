@if ($errors)
@foreach ($errors->all() as $e)
    <div class="error">
        {{ $e }}
    </div>
@endforeach
@endif