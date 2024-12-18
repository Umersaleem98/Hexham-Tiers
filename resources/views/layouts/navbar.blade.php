<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Hexham Tiers</h1>
          <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
          <ul>
              <li><a href="{{ route('home') }}" class="active">Home</a></li>
              <li><a href="{{ route('Restaurant.Opening.Hours') }}">Restaurant opening hours</a></li>
              <li><a href="{{ route('about.us') }}">About</a></li>
              <li><a href="{{ route('Our.Menu.Pricing') }}">Our Menu & Pricing</a></li>
              <li><a href="{{ route('contact.us') }}">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#">Book a Table</a>

  </div>
</header>
