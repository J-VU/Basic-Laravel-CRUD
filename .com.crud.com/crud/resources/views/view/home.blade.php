@extends('layouts.primary')
  @section('content')

  @guest
    <div class="jumbotron text-center">
      <h1 class="display-4">CRUDv1</h1>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>Become a Member Now</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
        <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
      </p>
    </div>
  @else
    <div class="jumbotron text-center">
      <h1 class="display-4">CRUDv1</h1>
      <p class="lead">Welcome <i>{{ Auth::user()->name }}</i> !</p>
      <hr class="my-4">
      <p>Nothing to do here! Head on over to your Dashboard.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/dashboard" role="button">Go to Dashboard</a>
      </p>
    </div>
  @endguest
    <h1>{{$title}}</h1>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>
    <p>
      Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>



  @endsection
