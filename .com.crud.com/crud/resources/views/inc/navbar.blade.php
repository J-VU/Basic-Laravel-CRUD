
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<div class="container">

   <a class="navbar-brand" href="/">{{ config('app.name', 'CRUDv1') }}</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>

   <!-- NAV BAR MOBILE COLLAPSE -->
     <div class="collapse navbar-collapse" id="navbarCollapse">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item">
           <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/about">About</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/services">Services</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/post">News</a>
         </li>
       </ul>

       <ul class="navbar-nav ml-auto nav-item">


          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @else
            <li class="nav-item">
              <!-- <button onclick="location.href = '/post';" class="btn btn-success ">Post</button> -->
              <button onclick="location.href = '/dashboard';" class="btn btn-success ">Dash</button>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          @endguest
        </ul>

     </div>
   <!-- NAV BAR MOBILE COLLAPSE -->

 </div>
 </nav>
