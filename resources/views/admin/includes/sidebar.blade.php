<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu"
      aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 class="navbar-brand navbar-brand-autodark">
      <a href="/Overview">
        <img src="{{ asset('logo.svg') }}" width="150" height="50" alt="Shams">
      </a>
    </h1>


    <div class="collapse navbar-collapse" id="sidebar-menu">
      <ul class="navbar-nav pt-lg-3">
        <li class="nav-item">
          <a class="nav-link" href="/Overview">
            <span
              class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
              </svg>
            </span>
            <span class="nav-link-title">
              Overview
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/books">
            <span
              class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
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
              </svg> </span>
            <span class="nav-link-title">
              Books
            </span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{url('/categories')}}" data-bs-auto-close="false" role="button" aria-expanded="false">
            <span
              class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                <path d="M12 12l8 -4.5" />
                <path d="M12 12l0 9" />
                <path d="M12 12l-8 -4.5" />
                <path d="M16 5.25l-8 4.5" />
              </svg>
            </span>
            <span class="nav-link-title">
              Category 
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./form-elements.html">
            <span
              class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 11l3 3l8 -8" />
                <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
              </svg>
            </span>
            <span class="nav-link-title">
              Borrowing
            </span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#navbar-extra" data-bs-auto-close="false" role="button" aria-expanded="false">
            <span
              class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path
                  d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
              </svg>
            </span>
            <span class="nav-link-title">
              Purchases
            </span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#navbar-help" data-bs-toggle="dropdown" data-bs-auto-close="false"
            role="button" aria-expanded="false">
            <span
              class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/lifebuoy -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                <path d="M15 15l3.35 3.35" />
                <path d="M9 15l-3.35 3.35" />
                <path d="M5.65 5.65l3.35 3.35" />
                <path d="M18.35 5.65l-3.35 3.35" />
              </svg>
            </span>
            <span class="nav-link-title">
              Help
            </span>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener">
              Documentation
            </a>
            <a class="dropdown-item" href="./changelog.html">
              Changelog
            </a>
            <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener">
              Source code
            </a>
            <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm" target="_blank"
              rel="noopener">
              <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline me-1" width="24" height="24"
                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
              </svg>
              Sponsor project!
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</aside>