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
            <h5 class="card-title">{{ $question->title }}</h5>
            <p class="card-text">{{ $question->description }}</p>
            <p class="card-text"><small class="text-muted">Created {{ $question->created_at->format("F jS, Y \a\\t h:ia") }}</small></p>
          </div>
        </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>
@endsection