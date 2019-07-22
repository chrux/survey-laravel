@if (Route::has('login'))
<div class="{{ $class }} links">
  @auth
  <a href="{{ url('/home') }}">Home</a>
  @else
  <a href="{{ route('questions.index') }}">Questions</a>
        
  @if (Route::has('register'))
  <a href="{{ route('register') }}">Register</a>
  @endif
  @endauth
</div>
@endif