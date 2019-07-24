@extends('layouts.app')

@section('content')
  @if ($question)  
  <survey-instance :question="{{ json_encode($question->toArray()) }}"></survey-instance>
  @else
  <div class="row">
    <div class="col">
      <h1 class="display-4 text-center">{{ __('There is nothing to vote, come back later.') }}</h1>
    </div>
  </div>
  @endif
@endsection
