<nav class="navbar navbar-expand-lg nav2">
  <div class="container-fluid">
    <button class="navbar-toggler button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"><i class="bi bi-list lbi"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link  homee" aria-current="page" href="{{ route('welcome') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link home" href="{{ route('programs') }}">Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link home" href="{{ route('admission') }}">Admission</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle home" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu drop1" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item home1" href="{{ route('news_event') }}">News/Event</a></li>
            <li><a class="dropdown-item home1" href="{{ route('golden_family') }}">GoldenABC Family</a></li>
            <li><a class="dropdown-item home1" href="{{ route('event_calander') }}">Event Calander</a></li>
            <li><a class="dropdown-item home1" href="{{ route('beyond_acedemics') }}">Beyond Acedemics</a></li>
            <li><a class="dropdown-item home1" href="{{ route('form_of_interest') }}">Form of Interest</a></li>
            <li><a class="dropdown-item home1" href="{{ route('core_values') }}">Core Values</a></li>

            
          </ul>
        </li>
{{-- CUSTOMER AUTH CHECK --}}
{{-- CUSTOMER LOGGED IN --}}
@if(Auth::guard('customer')->check())
    <li class="nav-item">
        <form method="POST" action="{{ route('customer.logout') }}">
            @csrf
            <button type="submit" class="nav-link btn btn-link home">
                Logout
            </button>
        </form>
    </li>

{{-- ADMIN LOGGED IN --}}
<!--  -->
@else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle home" href="#" role="button" data-bs-toggle="dropdown">
            Login
        </a>
        <ul class="dropdown-menu drop1">
            <li><a class="dropdown-item home1" href="{{ route('admin.login') }}">Admin Login</a></li>
            <li><a class="dropdown-item home1" href="{{ route('customer.loginPage') }}">Guest Login</a></li>
        </ul>
    </li>
@endif

          
        
        <li class="nav-item">
          <a class="nav-link home" href="{{ route('contact_us') }}">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
