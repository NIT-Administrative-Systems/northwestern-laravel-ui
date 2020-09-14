@extends('northwestern::purple-chrome')

@section('container')
<div class="container-fluid">
    <div class='row main-content'>
        <div class='col-12 col-lg-12 col-xl-12'>
            @yield('heading')

            @include('northwestern::flash')

            @yield('content')
        </div>
    </div>
</div>
@endsection
