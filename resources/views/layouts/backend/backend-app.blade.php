@include('layouts.backend.inc.header')

<body>
  <div class="d-flex">
    @include('layouts.backend.inc.sidebar')

    <main class="main-content">
        <!-- all codes for ===***top-navbar***=== starts from here -->
 <section class="top-navbar d-flex align-items-center justify-content-between">
    <div class="d-flex">
      <button id="menuButton" class="btn side-menu-button me-1 d-lg-none">
        Menu
      </button>
      <form class="search-bar">
        <input class="form-control" type="text" placeholder="search">
        <button class="submit-button" type="submit"><i class="far fa-search"></i></button>
      </form>
    </div>

    <div class="avatar-motification">
      <div class="right d-flex align-items-center">
        <!-- notification -->
        <div class="dropdown">
          <span class="me-3 position-relative btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bell fal fa-bell me"></i>
            <img src="{{ asset('backend') }}/assets/images/dot.png" alt="" class="img-fluid dot">
          </span>

          <div class="dropdown-menu dropdown-menu-notification">
            <div class="d-flex align-items-center justify-content-between p-3">
              <h5>NotiFication</h5>
              <a href="notifications-all.html">See all</a>
            </div>
            <div class="notess">
              <div class="d-flex align-items-center note-card p-3">
                <div class="me-2">
                  <img src="{{ asset('backend') }}/assets/images/npp.png" alt="q" class="img-fluid flex-shrink-0">
                </div>
                <div class="text flex-1">
                  <p class="m-0">Lorem, ipsum dolor sit amet elit. Sapiente, amet.</p>
                  <div class="text-end">
                    <span class="time">Today, 9.52pm</span>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center note-card p-3">
                <div class="me-2">
                  <img src="{{ asset('backend') }}/assets/images/npp.png" alt="q" class="img-fluid flex-shrink-0">
                </div>
                <div class="text flex-1">
                  <p class="m-0">Lorem, ipsum dolor sit amet elit. Sapiente, amet.</p>
                  <div class="text-end">
                    <span class="time">Today, 9.52pm</span>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center note-card p-3">
                <div class="me-2">
                  <img src="{{ asset('backend') }}/assets/images/npp.png" alt="q" class="img-fluid flex-shrink-0">
                </div>
                <div class="text flex-1">
                  <p class="m-0">Lorem, ipsum dolor sit amet elit. Sapiente, amet.</p>
                  <div class="text-end">
                    <span class="time">Today, 9.52pm</span>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center note-card p-3">
                <div class="me-2">
                  <img src="{{ asset('backend') }}/assets/images/npp.png" alt="q" class="img-fluid flex-shrink-0">
                </div>
                <div class="text flex-1">
                  <p class="m-0">Lorem, ipsum dolor sit amet elit. Sapiente, amet.</p>
                  <div class="text-end">
                    <span class="time">Today, 9.52pm</span>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center note-card p-3">
                <div class="me-2">
                  <img src="{{ asset('backend') }}/assets/images/npp.png" alt="q" class="img-fluid flex-shrink-0">
                </div>
                <div class="text flex-1">
                  <p class="m-0">Lorem, ipsum dolor sit amet elit. Sapiente, amet.</p>
                  <div class="text-end">
                    <span class="time">Today, 9.52pm</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- profile -->
        <div class="dropdown">
          <span class="me-3 position-relative btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img src="{{ asset('backend') }}/assets/images/Photo.png" alt="avatar">
          </span>

          <ul class="dropdown-menu dropdown-menu-profile">
            <li><a href="edit-user.html"><i class="fas fa-user"></i> Edit Profile</a></li>
            <li><a href="{{ route('admin.logout') }}"><i class="fas fa-sign-out"></i> Sign Out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- all codes for ===***top-navbar***=== ended -->
      @yield('content')
    </main>

  </div>

 @include('layouts.backend.inc.footer')
</body>

</html>
