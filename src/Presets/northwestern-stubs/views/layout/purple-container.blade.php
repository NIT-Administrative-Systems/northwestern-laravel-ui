@extends('layout.purple-chrome')

@section('container')
<div class="container">
    <div class='row'>
        <div class='col-sm-12 main-content'>
            @yield('heading')

            @include('layout.flash')

            @yield('content')
        </div>
    </div>
</div>
@endsection
