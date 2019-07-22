@extends('layouts.root')

@section('main')
    @include('layouts.nav', ['class' => 'd-block d-sm-none text-right'])
    <div class="flex-center position-ref full-height">
        @include('layouts.nav', ['class' => 'd-none d-sm-block top-right'])
        <div class="container">
            @yield('content')
        </div>
    </div>
@endsection