@extends('layouts.app')

@section('content')
@include('nav', ['class' => 'd-block d-sm-none text-right'])
<div class="flex-center position-ref full-height">
    @include('nav', ['class' => 'd-none d-sm-block top-right'])
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4 text-center">
                    What's your favorite programming language?
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="lead text-center">
                    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="choices container-fluid">
                    <div class="choice row mt-2 mb-2">
                        <div class="key col-auto"><span>A</span></div>
                        <div class="title col">PHP</div>
                        <div class="check col-auto"></div>
                    </div>
                    <div class="choice row mt-2 mb-2">
                        <div class="key col-auto"><span>B</span></div>
                        <div class="title col">C#</div>
                        <div class="check col-auto"></div>
                    </div>
                    <div class="choice row mt-2 mb-2">
                        <div class="key col-auto"><span>C</span></div>
                        <div class="title col">Python</div>
                        <div class="check col-auto"></div>
                    </div>
                    <div class="choice selected row mt-2 mb-2">
                        <div class="key col-auto"><span>D</span></div>
                        <div class="title col">Javascript</div>
                        <div class="check col-auto"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Please select one
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col">
                <button class="btn btn-primary btn-lg">{{ __('Send') }}</button>
            </div>
        </div>
    </div>
</div>
@endsection
