<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')
</head>

<body class="index-page">

 @include('layouts.navbar')

  <main class="main">

    <!-- Hero Section -->
   @include('layouts.pages.slider')
    <!-- About Section -->
   @include('layouts.pages.aboutus')
    <!-- Why Us Section -->
    {{-- @include('layouts.pages.whyus') --}}

    <!-- Stats Section -->
 {{-- @include('layouts.pages.stats') --}}

    <!-- Menu Section -->
   @include('layouts.pages.menu')

    <!-- Testimonials Section -->
   {{-- @include('layouts.pages.testimonial') --}}

    <!-- Events Section -->
   {{-- @include('layouts.pages.event') --}}
    <!-- Chefs Section -->
   {{-- @include('layouts.pages.Chefs') --}}

    <!-- Book A Table Section -->
   @include('layouts.pages.book-a-table')

    <!-- Gallery Section -->
   {{-- @include('layouts.pages.gallery') --}}

    <!-- Contact Section -->
   @include('layouts.pages.contact')
  </main>

@include('layouts.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  {{-- <div id="preloader"></div> --}}

  <!-- Vendor JS Files -->
 @include('layouts.script')

</body>

</html>