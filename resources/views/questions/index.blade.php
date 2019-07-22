@extends('layouts.app')

@section('title')
Questions
@endsection

@section('content')
  <div class="full-height content">
    <h1>Questions</h1>
    <div class="scrolleable">
      @empty ($questions)
      <h2 class="display-4 text-center">There is none</h1>
      @else
      <div class="card-columns">
        @foreach ($questions as $question)
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>
@endsection