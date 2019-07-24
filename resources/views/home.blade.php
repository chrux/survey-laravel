@extends('layouts.app')

@section('content')
  <survey-instance :question="{{ json_encode($question->toArray()) }}"></survey-instance>
@endsection
