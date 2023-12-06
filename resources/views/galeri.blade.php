<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="{{ asset('js/color-modes.js') }}"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Beranda</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="{{ asset('css/bootstrap_5/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        html * {
            font-family: 'Poppins', sans-serif;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/bootstrap_5/headers.css') }}" rel="stylesheet">
    <link href="{{ asset('css/global/color.css') }}" rel="stylesheet">
</head>

<body>

    {{-- Start Navigation Bar --}}
    <div class="no-margin">
        <div class="backgroundColorPrimary container-fluid px-xl-5 py-1">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                    <img src="{{ asset('images/logo_1.png') }}" alt="" class="bi me-2" width="40"
                        height="40">
                    <span class="fs-4">PT. AKMAL PRATAMA GEMILANG</span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="#" class="nav-link tertiaryColor"
                            aria-current="page">BERANDA</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link tertiaryColor">TENTANG KAMI</a></li>
                    <li class="nav-item"><a href="#" class="nav-link tertiaryColor">GALERI</a></li>
                    <li class="nav-item"><a href="#" class="nav-link tertiaryColor">LAYANAN</a></li>
                    <li class="nav-item"><a href="#" class="nav-link tertiaryColor">POST</a></li>
                    <li class="nav-item"><a href="#" class="nav-link tertiaryColor">HUBUNGI KAMI</a></li>
                </ul>
            </header>
        </div>
    </div>

    <script src="{{ asset('js/bootstrap_5/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
