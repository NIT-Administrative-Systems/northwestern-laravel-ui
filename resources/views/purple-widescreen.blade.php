@extends('northwestern::purple-chrome')

@php
if (isset($layout_sidebar_side) === false) {
    $layout_sidebar_side = 'left';
}
@endphp

@section('container')
<div class="container-fluid">
    <div class='row main-content'>
        <div class="col-12 col-lg-4 col-xl-2 sidebar order-2 {{ $layout_sidebar_side === 'left' ? 'order-lg-1' : 'order-lg-2' }}">
            @yield('sidebar')
        </div>

        <div class='col-12 col-lg-8 col-xl-10 order-1 {{ $layout_sidebar_side === 'left' ? 'order-lg-2' : 'order-lg-1' }}'>
            @yield('heading')

            @include('northwestern::flash')

            @yield('content')
        </div>
    </div>
</div>
@endsection
