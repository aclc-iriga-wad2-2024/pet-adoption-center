<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/dist/bootstrap-5.3.3/css/bootstrap.min.css">
    <title>{{ $page_title }} - Pet Adoption Center</title>
</head>
<body class="overflow-hidden">

    <!-- Sidebar for small screens -->
    <x-sidebar-sm/>

    <div class="vh-100 d-flex">

        <!-- Sidebar for large screens -->
        <x-sidebar-md/>

        <div class="vh-100 flex-grow-1 bg-white d-flex flex-column">
            <header class="navbar flex-shrink-0 flex-nowrap sticky-top bg-light" style="height: 72px; background-color: #eee !important;">
                <div class="container d-flex justify-content-between gap-3 px-4">
                    <div class="d-flex justify-content-start align-items-center gap-3">
                        <a class="navbar-toggler d-flex d-md-none" data-bs-toggle="offcanvas" href="#offcanvas">
                            <span class="navbar-toggler-icon"></span>
                        </a>
                        <h4 class="m-0 opacity-75">{{ $page_title }}</h4>
                    </div>
                    <div class="d-flex justify-content-end align-items-center gap-3">
                        @isset($header_buttons)
                            {{ $header_buttons }}
                        @endisset
                    </div>
                </div>
            </header>
            <div class="flex-grow-1 overflow-auto">
                <div class="container px-4 py-4">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <script src="/dist/bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
