<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgb(89, 207, 234);">
<a class="navbar-brand text-white" href="{{route('home.index')}}">Source Water</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
      <a class="nav-link" href="{{route('home.index')}}">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-container">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#our-commitment-container">Our Commitment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact-us-container">Contact</a>
      </li>

      @if(!Auth::check())
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>

      @endif

      @if(Auth::check())
      <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fas fa-user-circle"></i>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item justify-content-center" id="align-center-menu">
                   <i class="fas fa-user-circle text-center" style="font-size: 3.5rem"></i><br>
                    <span class="text-center">{{Auth::user()->name}}</span><br>
                </a>
                <a href="{{route('user.profile')}}" class="dropdown-item">View Profile</a>
                <a class="dropdown-item" href="{{route('user.accountsettings')}}">Account Settings</a>

                <a class="dropdown-item" href="{{route('bill.index')}}">Check Bill</a>

                <a class="dropdown-item" href="{{route('meter.index')}}">Calculate Meter Reading</a>

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
        @endif
    </ul>
  </div>
</nav>
