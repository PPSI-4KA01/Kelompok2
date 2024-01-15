<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/global/color.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Dashboard Admin')</title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="d-flex flex-column flex-shrink-0 backgroundColorQuaternary sticky-top"
            style="width: 4.5rem; height: 100vh;">
            <a href="/" class="d-block p-3 link-body-emphasis text-decoration-none" title=""
                data-bs-toggle="tooltip" data-bs-placement="right">
                <img src="{{ asset('images/logo_1.png') }}" alt="" class="bi me-2" width="40"
                    height="40">
            </a>
            <ul class="nav flex-column mb-auto text-center backgroundColorQuaternary">
                <li>
                    <a href="{{ route('admin.pages.dashboard') }}" class="nav-link active py-3 border-bottom rounded-0"
                        aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFFFFF"
                            class="bi bi-house" viewBox="0 0 16 16">
                            <path
                                d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pages.tampil_berita') }}" class="nav-link py-3 border-bottom rounded-0"
                        title="Berita" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFFFFF"
                            class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path
                                d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                            <path
                                d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pages.tampil_galeri') }}" class="nav-link py-3 border-bottom rounded-0"
                        title="Galeri/Portofolio" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFFFFF"
                            class="bi bi-trophy" viewBox="0 0 16 16">
                            <path
                                d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5q0 .807-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33 33 0 0 1 2.5.5m.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935m10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935M3.504 1q.01.775.056 1.469c.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.5.5 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667q.045-.694.056-1.469z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.pages.tampil_pesan') }}" class="nav-link py-3 border-bottom rounded-0"
                        title="Pesan Masuk" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#FFFFFF"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="navbar navbar-expand-lg p-3 backgroundColorQuaternary sticky-top">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto mb-5">
                        </div>
                    </div>
                </div>
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer class="py-3 text-center text-white position-fixed bottom-0"
        style="background-color:#1E1E1E;text-align: center;width: 100%">
        <div class="container">
            <small>
                <strong>Copyright &copy; 2023 Vasa Studio</a>.</strong> All rights reserved.
            </small>
        </div>
        <div style="height: 5px"></div>
    </footer>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
