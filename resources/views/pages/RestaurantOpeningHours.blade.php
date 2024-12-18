<!DOCTYPE html>
<html lang="en">

<head>
    <title>Restaurant Opening Hours</title>
    @include('layouts.head')
</head>

<body class="index-page">

    @include('layouts.navbar')

    <main class="main">

        <section class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Restaurant Opening Hours</h2>
                    <p class="text-muted">Discover the times you can visit us to enjoy a delightful dining experience!</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                            <i class="icon bi bi-clock flex-shrink-0 fs-3 me-3 text-danger"></i>
                            <div>
                                <h3>Opening Hours</h3>
                                <p><strong>1PM - 11PM</strong>; <strong>(7 days a week)</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-danger btn-lg">Make a Reservation</a>
                </div>
            </div>
        </section>

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
