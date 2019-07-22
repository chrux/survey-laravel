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
                <input type="text" class="form-control" name="question[title]" placeholder="{{ __('Question') }}">
              </div>
              <div class="form-group row mt-3">
                <input type="text" class="form-control" name="question[description]" placeholder="{{ __('Description') }}">
              </div>
              <div class="form-group row mt-3">
                <input type="number" class="form-control" name="question[maxCheck]" aria-describedby="questionMaxCheck" value="1" placeholder="{{ __('Maximum number of options to be selected') }}">
                <small id="questionMaxCheck" class="form-text text-muted">
                    Enter 0 (zero) to do not limit the maximum.
                  </small>
              </div>
              <h3>Options</h3>
              <div class="options">
                <div class="form-group row mt-3">
                  <input type="text" class="form-control" name="question[options][][title]" placeholder="{{ __('Option 1') }}">
                </div>
                <div class="form-group row mt-3">
                  <input type="text" class="form-control" name="question[options][][title]" placeholder="{{ __('Option 2') }}">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-auto ml-auto">
                  <button class="btn btn-secondary">Add</button>
                </div>
              </div>
              <hr />
              <button class="btn btn-primary btn-lg" type="submit">Create</button>
            </div>
          </form>
      </div>
    </div>
@endsection