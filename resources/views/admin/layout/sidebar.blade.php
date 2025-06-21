<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{ route('admin.admin.dashboard') }}" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <span>{{ Auth::user()->name }}</span>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
         <a href="{{ route('admin.admin.dashboard') }}" class="pc-link">
    <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
    <span class="pc-mtext">Dashboard</span>
</a>

        </li>

        <li class="pc-item">
          <a href="{{route('admin.user.index')  }}" class="pc-link">
            <span class="pc-micon"><i class="bi bi-person-fill"></i></span>
            <span class="pc-mtext">Dashboard User</span>
          </a>
        </li>

         <li class="pc-item">
          <a href="{{route('admin.customer.index')  }}" class="pc-link">
            <span class="pc-micon"><i class="bi bi-person-fill"></i></span>
            <span class="pc-mtext">Guest User</span>
          </a>
        </li>

         <li class="pc-item">
          <a href="{{route('admin.welcome.index')  }}" class="pc-link">
            <span class="pc-micon"><i class="bi bi-house-door"></i></span>
            <span class="pc-mtext">Home</span>
          </a>
        </li>

        <li class="pc-item">
          <a href="{{route('admin.feature.index')  }}" class="pc-link">
            <span class="pc-micon"><i class="bi bi-images"></i></span>
            <span class="pc-mtext">Features(Home)</span>
          </a>
        </li>

        <li class="pc-item">
          <a href="{{route('admin.review.index')  }}" class="pc-link">
            <span class="pc-micon"><i class="bi bi-chat-left-dots-fill"></i></span>
            <span class="pc-mtext">Reviews</span>
          </a>
        </li>

         <li class="pc-item">
          <a href="{{route('admin.systemSetting.index')  }}" class="pc-link">
            <span class="pc-micon"><i class="bi bi-gear-wide"></i></span>
            <span class="pc-mtext">SystemSetting</span>
          </a>
        </li>

        <li class="pc-item">
          <a href="{{route('admin.about.index')  }}" class="pc-link">
          <span class="pc-micon"><i class="bi bi-archive"></i></span>
            <span class="pc-mtext">About Page</span>
          </a>
        </li>

       <li class="dropdown">
    <a class="pc-link dropdown-toggle" href="javascript:void(0)" id="newsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <span class="pc-micon"><i class="bi bi-bookmark-heart-fill"></i></span>
    Program
    </a>
    <ul class="dropdown-menu" aria-labelledby="newsDropdown">
      <li><a class="dropdown-item" href="{{route('admin.level.index')}}">Level</a></li>
      <li><a class="dropdown-item" href="{{route('admin.subject.index')}}">Subject</a></li>
    </ul>
  </li>
        
         
        <li class="pc-item">
          <a href="{{route('admin.admission.index')  }}" class="pc-link">
          <span class="pc-micon"><i class="ti ti-typography"></i></span>
            <span class="pc-mtext">Admission</span>
          </a>
        </li>

      
        <li class="pc-item pc-hasmenu">
  <a href="#" class="pc-link">
    <span class="pc-micon"><i class="bi bi-caret-down-square-fill"></i></span>
    <span class="pc-mtext">About Us</span>
  </a>
  <ul class="pc-submenu">
  
  <li class="dropdown">
    <a class="pc-link dropdown-toggle" href="javascript:void(0)" id="newsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      News/Event
    </a>
    <ul class="dropdown-menu" aria-labelledby="newsDropdown">
      <li><a class="dropdown-item" href="{{route('admin.latestnews.index')}}">Latest News</a></li>
      <li><a class="dropdown-item" href="{{route('admin.upcomingevents.index')}}">Upcoming Events</a></li>
    </ul>
  </li>

  <li><a class="pc-link" href="{{ route('admin.goldenmember.index') }}">GoldenABC Family</a></li>
  <li><a class="pc-link" href="{{ route('admin.calendar.index') }}">Event Calendar</a></li>
  <li><a class="pc-link" href="{{route('admin.beyondacademic.index')}}">Beyond Academics</a></li>
  <li><a class="pc-link" href="{{ route('admin.interestform.index') }}">Form of Interest</a></li>
  <li><a class="pc-link" href="{{ route('admin.corevalue.index') }}">Core Value</a></li>

</ul>

</li>

        <li class="pc-item">
          <a href="{{route('admin.contact.index')}}" class="pc-link">
            <span class="pc-micon"><i class="bi bi-telephone-fill"></i></span>
            <span class="pc-mtext">Contact Us</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Pages</label>
          <i class="ti ti-news"></i>
        </li>
        <li class="pc-item">
          <a href="https://themewagon.github.io/Mantis-Bootstrap/pages/login.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-lock"></i></span>
            <span class="pc-mtext">Login</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="https://themewagon.github.io/Mantis-Bootstrap/pages/register.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-user-plus"></i></span>
            <span class="pc-mtext">Register</span>
          </a>
        </li>

        <li class="pc-item pc-caption">
          <label>Other</label>
          <i class="ti ti-brand-chrome"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span class="pc-mtext">Menu
              levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="pc-item">
          <a href="https://themewagon.github.io/Mantis-Bootstrap/other/sample-page.html" class="pc-link">
            <span class="pc-micon"><i class="ti ti-brand-chrome"></i></span>
            <span class="pc-mtext">Sample page</span>
          </a>
        </li>
      </ul>
      <div class="card text-center">
        <div class="card-body">
          <img src="{{ asset('assets/images/img-navbar-card.png') }}" alt="images" class="img-fluid mb-2">
          <h5>Upgrade To Pro</h5>
          <p>To get more features and components</p>
          <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank"
          class="btn btn-success">Buy Now</a>
        </div>
      </div>
    </div>
  </div>
</nav>
<!------If your sidebar is closing immediately when clicking the dropdown----------------->
<script>
  document.querySelectorAll('.dropdown-toggle').forEach(function(dropdown) {
    dropdown.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  });
</script>
