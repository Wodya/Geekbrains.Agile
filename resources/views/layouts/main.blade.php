<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Garden</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">

    <!-- Navigation-->
        <x-site-nav></x-site-nav>
    <!-- Header-->
    <x-site-header></x-site-header>

    <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                         @yield('content')
                </div>
            </section>
            <!-- Blog preview section-->

        </main>
<!-- Footer-->
<x-site-footer></x-site-footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js')}}"></script>
    </body>
>>>>>>> e732c2dc3d08824097adc8656126cc65d298bfe3
</html>
