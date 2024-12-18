<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.head')
</head>

<body class="index-page">

 @include('layouts.navbar')

  <main class="main">

    <!-- Hero Section -->
   @include('pages.slider')
    <!-- About Section -->
    <!-- Why Us Section -->
    @include('pages.whyus')

    <!-- Stats Section -->
 @include('pages.stats')



    <!-- Testimonials Section -->
   @include('pages.testimonial')

    <!-- Events Section -->
   @include('pages.event')
    <!-- Chefs Section -->
   {{-- @include('layouts.pages.Chefs') --}}

 

    <!-- Gallery Section -->
   @include('pages.gallery')


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