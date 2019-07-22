@if (Route::has('login'))
<div class="{{ $class }} links">
  @if (request()->route()->getName() == 'login')
  <a href="{{ route('home') }}">{{ __('Home') }}</a>
  @else
  <a href="{{ route('questions.index') }}">{{ __('Questions') }}</a>
  @endif
  @auth
  @else
  @if (Route::has('register'))
  <a href="{{ route('register') }}">{{ __('Register') }}</a>
  @endif
  @endauth
</div>
@endif