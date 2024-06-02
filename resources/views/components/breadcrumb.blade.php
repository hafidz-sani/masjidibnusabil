<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">
            <svg class="stroke-icon">
                <use href="{{ asset('cuba/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
            </svg></a></li>
    @if (count($values))
        @foreach ($values as $value)
            @if ($loop->last)
                <li class="breadcrumb-item active">{{ $value }}</li>
            @else
                <li class="breadcrumb-item">{{ $value }}</li>
            @endif
        @endforeach
    @endif
</ol>
