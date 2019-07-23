@extends('layouts.app')

@section('title')
Create | Questions
@endsection

@section('content')
    <div class="row justify-content-center">
      <div class="col-md-8">
          <h1 class="text-center">{{ __('New Question') }}</h1>
          <form action="">
            <div class="container-fluid">
              <div class="form-group row mt-3">
                <div class="col">
                  <input type="text" class="form-control" name="question[title]" placeholder="{{ __('Question') }}">
                </div>
              </div>
              <div class="form-group row mt-3">
                <div class="col">
                  <input type="text" class="form-control" name="question[description]" placeholder="{{ __('Description') }}">
                </div>
              </div>
              <div class="form-group row mt-3">
                <div class="col">
                  <input type="number" class="form-control" name="question[maxCheck]" aria-describedby="questionMaxCheck" placeholder="{{ __('Default: 1. Maximum number of options to be selected') }}">
                  <small id="questionMaxCheck" class="form-text text-muted">
                    Enter 0 (zero) to do not limit the maximum.
                  </small>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <h3>Options</h3>
                </div>
              </div>
              <div class="options">
                <div class="form-group row mt-3">
                  <div class="col">
                    <input type="text" class="form-control" name="question[options][][title]" placeholder="{{ __('Option 1') }}">
                  </div>
                </div>
                <div class="form-group row mt-3">
                  <div class="col">
                    <input type="text" class="form-control" name="question[options][][title]" placeholder="{{ __('Option 2') }}">
                  </div>
                  <div class="col-auto">
                    <button class="btn btn-danger"><i class="icon ion-md-trash"></i></button>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col">
                  <small id="questionMaxCheck" class="form-text text-muted">
                    Enter to add a new option
                  </small>
                </div>
              </div>
              <hr />
              <div class="row mt-3">
                <div class="col-md-4 ml-auto">
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Create</button>
                </div>
              </div>
            </div>
          </form>
      </div>
    </div>
@endsection