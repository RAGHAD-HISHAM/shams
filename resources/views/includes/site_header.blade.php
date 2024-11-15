<header class="navbar navbar-expand-md d-print-none" data-bs-theme="dark">
  <div class="container-xl">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
      aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
      <a href=".">
        <img src="{{asset('logo.svg')}}" width="110" height="32" alt="Shams">
      </a>
    </h1>
    <div class="navbar-nav flex-row order-md-last">
      <div class="nav-item d-none d-md-flex me-3">
        @guest
      @if (Route::has('login'))
      <div class="btn-list">
      <a href="{{ route('login') }}" class="btn btn-ghost-yellow" rel="noreferrer">
      <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
        class="icon icon-tabler icons-tabler-outline icon-tabler-login">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
        <path d="M21 12h-13l3 -3" />
        <path d="M11 15l-3 -3" />
      </svg>
      {{ __('Login') }} </a>

  @endif

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn" rel="noreferrer">
        <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="icon icon-tabler icons-tabler-outline icon-tabler-user-circle">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
          <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
          <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
        </svg>
        {{ __('Register') }} </a>

        </div>
      @endif

    @else
      <div class="btn-list">

        <div class="nav-item dropdown">
        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown"
          aria-label="Open user menu">
          <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003f.jpg)"></span>
          <div class="d-none d-xl-block ps-2">
          <div> {{ Auth::user()->name }} </div>
          <div class="mt-1 small text-secondary"> {{ Auth::user()->role }}</div>
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-theme="light">
          <a href="#" class="dropdown-item">Status</a>
          <a href="./profile" class="dropdown-item">Profile</a>
          <a href="#" class="dropdown-item">Feedback</a>
          <div class="dropdown-divider"></div>
          <a href="./settings.html" class="dropdown-item">Settings</a>
          <a href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();" target="_blank" rel="noreferrer" class="dropdown-item"><svg
            xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-logout">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
            <path d="M9 12h12l-3 -3" />
            <path d="M18 15l3 -3" />
          </svg>
          {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
          </form>
        </div>

        </div>
        <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
        data-bs-placement="bottom">
        <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
        </svg>
        </a>
        <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
        data-bs-toggle="tooltip" data-bs-placement="bottom">
        <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
          <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
        </svg>
        </a>
        <div class="nav-item dropdown d-none d-md-flex me-3">
        <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" tabindex="-1" aria-label="Show notifications">
          <!-- Download SVG icon from http://tabler-icons.io/i/bell -->
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
          <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
          </svg>
          <span class="badge bg-red"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
          <div class="card">
          <div class="card-header">
            <h3 class="card-title">Last updates</h3>
          </div>
          <div class="list-group list-group-flush list-group-hoverable">
            <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="status-dot status-dot-animated bg-red d-block"></span></div>
              <div class="col text-truncate">
              <a href="#" class="text-body d-block">Example 1</a>
              <div class="d-block text-secondary text-truncate mt-n1">
                Change deprecated html tags to text decoration classes (#29604)
              </div>
              </div>
              <div class="col-auto">
              <a href="#" class="list-group-item-actions">
                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                </svg>
              </a>
              </div>
            </div>
            </div>
            <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="status-dot d-block"></span></div>
              <div class="col text-truncate">
              <a href="#" class="text-body d-block">Example 2</a>
              <div class="d-block text-secondary text-truncate mt-n1">
                justify-content:between ⇒ justify-content:space-between (#29734)
              </div>
              </div>
              <div class="col-auto">
              <a href="#" class="list-group-item-actions show">
                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-yellow" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                </svg>
              </a>
              </div>
            </div>
            </div>
            <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="status-dot d-block"></span></div>
              <div class="col text-truncate">
              <a href="#" class="text-body d-block">Example 3</a>
              <div class="d-block text-secondary text-truncate mt-n1">
                Update change-version.js (#29736)
              </div>
              </div>
              <div class="col-auto">
              <a href="#" class="list-group-item-actions">
                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                </svg>
              </a>
              </div>
            </div>
            </div>
            <div class="list-group-item">
            <div class="row align-items-center">
              <div class="col-auto"><span class="status-dot status-dot-animated bg-green d-block"></span></div>
              <div class="col text-truncate">
              <a href="#" class="text-body d-block">Example 4</a>
              <div class="d-block text-secondary text-truncate mt-n1">
                Regenerate package-lock.json (#29730)
              </div>
              </div>
              <div class="col-auto">
              <a href="#" class="list-group-item-actions">
                <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon text-muted" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                </svg>
              </a>
              </div>
            </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </div>

  @endguest

      </div>
      <div class="d-none d-md-flex">

      </div>

    </div>
  </div>
</header>
<header class="navbar-expand-md">
  <div class="collapse navbar-collapse" id="navbar-menu">
    <div class="navbar">
      <div class="container-xl">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link" href="/">
              <span
                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-home">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-1v-7a3 3 0 0 0 -2.824 -2.995l-.176 -.005h-2a3 3 0 0 0 -3 3v7h-1a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.293 11.707a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883 -.993l.117 -.007z" />
                </svg>

              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="/about">
              <span
                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-sun">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M12 19a1 1 0 0 1 .993 .883l.007 .117v1a1 1 0 0 1 -1.993 .117l-.007 -.117v-1a1 1 0 0 1 1 -1z" />
                  <path
                    d="M18.313 16.91l.094 .083l.7 .7a1 1 0 0 1 -1.32 1.497l-.094 -.083l-.7 -.7a1 1 0 0 1 1.218 -1.567l.102 .07z" />
                  <path
                    d="M7.007 16.993a1 1 0 0 1 .083 1.32l-.083 .094l-.7 .7a1 1 0 0 1 -1.497 -1.32l.083 -.094l.7 -.7a1 1 0 0 1 1.414 0z" />
                  <path d="M4 11a1 1 0 0 1 .117 1.993l-.117 .007h-1a1 1 0 0 1 -.117 -1.993l.117 -.007h1z" />
                  <path d="M21 11a1 1 0 0 1 .117 1.993l-.117 .007h-1a1 1 0 0 1 -.117 -1.993l.117 -.007h1z" />
                  <path
                    d="M6.213 4.81l.094 .083l.7 .7a1 1 0 0 1 -1.32 1.497l-.094 -.083l-.7 -.7a1 1 0 0 1 1.217 -1.567l.102 .07z" />
                  <path
                    d="M19.107 4.893a1 1 0 0 1 .083 1.32l-.083 .094l-.7 .7a1 1 0 0 1 -1.497 -1.32l.083 -.094l.7 -.7a1 1 0 0 1 1.414 0z" />
                  <path
                    d="M12 2a1 1 0 0 1 .993 .883l.007 .117v1a1 1 0 0 1 -1.993 .117l-.007 -.117v-1a1 1 0 0 1 1 -1z" />
                  <path d="M12 7a5 5 0 1 1 -4.995 5.217l-.005 -.217l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                </svg>
              </span>
              <span class="nav-link-title">
                About the Library
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./membership">
              <span
                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-user">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                  <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                </svg>
              </span>
              <span class="nav-link-title">
                Memberships
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown"
              data-bs-auto-close="outside" role="button" aria-expanded="false">
              <span
                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-tabler icons-tabler-outline icon-tabler-books">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                  <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                  <path d="M5 8h4" />
                  <path d="M9 16h4" />
                  <path
                    d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z" />
                  <path d="M14 9l4 -1" />
                  <path d="M16 16l3.923 -.98" />
                </svg>
              </span>
              <span class="nav-link-title">
                Our Books
              </span>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link " href="./#">
              <span
                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-phone">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M9 3a1 1 0 0 1 .877 .519l.051 .11l2 5a1 1 0 0 1 -.313 1.16l-.1 .068l-1.674 1.004l.063 .103a10 10 0 0 0 3.132 3.132l.102 .062l1.005 -1.672a1 1 0 0 1 1.113 -.453l.115 .039l5 2a1 1 0 0 1 .622 .807l.007 .121v4c0 1.657 -1.343 3 -3.06 2.998c-8.579 -.521 -15.418 -7.36 -15.94 -15.998a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" />
                </svg>
              </span>
              <span class="nav-link-title">
                Contact us
              </span>
            </a>
          </li>
        </ul>
        <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
          <form action="./" method="get" autocomplete="off" novalidate>
            <div class="input-icon">
              <span class="input-icon-addon">
                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                  <path d="M21 21l-6 -6" />
                </svg>
              </span>
              <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
            </div>
          </form>
        </div>

      </div>

    </div>
  </div>
</header>
<script>
  // Select all nav items
  const navItems = document.querySelectorAll('.navbar-nav .nav-item');

  // Add click event listener to each nav item
  navItems.forEach(item => {
    item.addEventListener('mouseover', function () {
      // Remove 'active' class from all nav items
      navItems.forEach(nav => nav.classList.remove('active'));

      // Add 'active' class to the clicked item
      this.classList.add('active');
    });
  });
</script>