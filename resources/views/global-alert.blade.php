@if (!empty($activeAlert))
    <div class="alert alert-{{ $activeAlert['style'] }} sticky-top mb-0 text-center">
        {!! $activeAlert['message'] !!}
    </div>
@endif
