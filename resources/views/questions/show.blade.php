@extends('layouts.app')

@section('title')
Questions
@endsection

@section('content')
  <div class="full-height content">
    <div class="scrolleable">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h1 class="display-4">{{ $question->title }}</h1>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col col-md-8">
            <chart-component :data="{
              // The type of chart we want to create
              @if ($question->maxCheck > 1)
              type: 'bar',
              @else
              type: 'doughnut',
              @endif
              
              // The data for our dataset
              data: {
                labels: [
                  @foreach ($question->options as $option)
                  '{{ $option->title }}',
                  @endforeach
                ],
                datasets: [{
                  label: '',
                  backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(255, 159, 64)',
                    'rgb(75, 192, 192)',
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)',
                  ],
                  data: [
                    @foreach ($question->options as $option)
                    {{ $option->votes }},
                    @endforeach
                  ]
                }]
              },
              
              // Configuration options go here
              options: {}
            }"></chart-component>
          </div>
          <div class="col col-md-4">
            <br class="d-block d-sm-none" />
            <table class="table table-dark">
              <tr>
                <td>Option</td>
                <td>Votes</td>
              </tr>
              @foreach ($question->options as $option)
                <tr>
                  <td>
                    {{ $option->title }}
                  </td>
                  <td>{{ $option->votes }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection