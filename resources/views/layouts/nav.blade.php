@if (Route::has('login'))
<div class="{{ $class }} links">
  @if (request()->route()->getName() == 'questions.index')
  <a href="{{ route('questions.create') }}" class="btn btn-primary">{{ __('Create') }}</a>
  @endif
  @if (in_array(request()->route()->getName(), ['home', 'questions.create', 'questions.show']))
  <a href="{{ route('questions.index') }}">{{ __('Questions') }}</a>
  @else
  <a href="{{ route('home') }}">{{ __('Home') }}</a>
  @endif
  @auth
  <a href="{{ route('logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
  </form>
  @else
  @if (Route::has('register'))
  <a href="{{ route('register') }}">{{ __('Register') }}</a>
  @endif
  @endauth
</div>
@endif