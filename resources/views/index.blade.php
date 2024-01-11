@extends('layout_main')
@section('content')
    {{-- Content 1 --}}
    <div class="py-0">
        <section class="py-xl-5 text-center container-fluid"
            style="background-image: url('{{ asset('images/placeholder1.png') }}'); 
        background-repeat: no-repeat;
        background-attachment: fixed; 
        background-size: 100% 100%;">
            <div class="row py-xl-5 ">
                <div class="col-lg-7 col-md-8 mx-auto ">
                    <h1 class="fw-bold tertiaryColor">Menghadirkan Solusi Konstruksi yang Inovatif dan Profesional
                    </h1>
                    <p class="lead text-body-secondary tertiaryColor fw-lighter">Kami siap membantu Anda
                        mewujudkan setiap ide kontrusi Anda!
                    </p>
                    <p>
                        <a href="#" class="btn btn-lg btn-light my-2 colorPrimary fw-bold">Mulai
                            Sekarang</a>
                    </p>
                </div>
            </div>
        </section>
    </div>

    {{-- Layanan --}}
    <div id="layanan" class="px-4 py-5 my-auto text-center container-fluid backgroundColorTertiary">
        <h1 class="display-6 fw-bolder quaternaryColor">Layanan Kami</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 quaternaryColor">Kami hadir dengan memberikan berbagai layanan konstruksi untuk
                anda</p>
        </div>
        {{-- Cards inside Content 2 --}}
        <div class="container px-4 py-5 ">

            <div class="row row-cols-2 row-cols-lg-2 align-items-stretch g-4 py-5">
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden rounded-4 shadow-lg backgroundColorSenary"
                        onmouseover="">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <img src="{{ asset('images/group 1.png') }}" alt="Bootstrap" width="115" height="115"
                                class="rounded mx-auto d-block">
                            <h3 class="pt-5 mt-1 mb-4 lh-1 fw-bold quaternaryColor">Renovasi Bangunan</h3>
                            <p class="fw-light quaternaryColor">Melayani Jasa Renovasi Rumah, Kantor, Ruko,
                                Toilet, Atap, Pagar, dan Sebagainya</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden backgroundColorSeptary rounded-4 shadow-lg">
                        <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                            <img src="{{ asset('images/group 2.png') }}" alt="Bootstrap" width="115" height="115"
                                class="rounded mx-auto d-block">
                            <h3 class="mt-5 mb-4 lh-1 fw-bold quaternaryColor">Kontraktor Bangunan</h3>
                            <p class="fw-light quaternaryColor">Melayani jasa Kontraktor rumah, kantor, ruko,
                                Kost, Gudang dan sebagainya.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Content 3 --}}
    <div id="tentang" class="px-4 py-5 my-auto container-fluid backgroundColorSecondary">
        <h1 class="display-6 fw-bolder tertiaryColor text-center">Tentang Kami</h1>
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="{{ asset('images/placeholder2.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6 text-justify">
                    <h4 class="fw-bold">PT. Akmal Pratama Gemilang adalah perusahaan
                        kontraktor yang didirikan
                        dengan visi untuk memberikan layanan konstruksi berkualitas tinggi. Dengan komitmen kami
                        terhadap inovasi dan kepuasan pelanggan, kami berusaha menjadi mitra konstruksi pilihan
                        Anda.</h4>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Tentang Perusahaan Kami
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Suscipit repudiandae sed quaerat dicta cumque quae et quia nisi neque a
                                    eaque, odio doloremque vero ea dolore voluptate distinctio necessitatibus sunt!
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit optio repudiandae
                                    a, voluptatem neque ipsa ducimus est tempore quia, voluptate saepe deserunt
                                    eveniet dolor fugit inventore similique. Accusantium, eveniet at. Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Voluptates vero aperiam accusamus!
                                    Quis nesciunt vitae accusantium debitis soluta cum at esse odit blanditiis quos,
                                    laudantium incidunt assumenda corrupti aliquid ut?
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    VISI DAN MISI
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Impedit accusantium a quis. Odit, fugit fuga aut suscipit dolorem
                                    voluptas, possimus facilis dolore voluptatem perferendis ipsam ratione quam.
                                    Numquam, doloremque. Labore! Lorem ipsum, dolor sit amet consectetur adipisicing
                                    elit. Eum numquam ad fugiat pariatur dolore consectetur impedit neque, enim
                                    dignissimos tempore praesentium deleniti eos eaque voluptatibus magni ipsam
                                    odio, maxime iure. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Exercitationem, praesentium molestiae rerum esse explicabo nam odit non
                                    repellendus, ipsam deleniti accusamus, voluptatem voluptate veniam quos nobis
                                    blanditiis ullam saepe mollitia.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Sejarah Perusahaan
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur, adipisicing
                                    elit. Ex rerum, dolore aliquam veniam, inventore quisquam enim sit nulla
                                    blanditiis sapiente quo! Nihil vitae eos quisquam, soluta quasi nobis est
                                    assumenda. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius
                                    corrupti inventore id dignissimos cum expedita voluptatibus quasi deserunt eos
                                    quas, fugit nostrum nihil maxime similique fuga reiciendis, aspernatur alias
                                    vitae! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci
                                    laudantium praesentium nisi. Ratione praesentium tempore facere quisquam itaque
                                    dolore aspernatur eaque tenetur amet sint, vel, adipisci, inventore veniam dicta
                                    nihil.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Sertifikasi --}}
    <div class="px-4 py-5 my-auto container-fluid backgroundColorDecenary">
        <h1 class="display-6 fw-bolder tertiaryColor text-center font-weight-bolder">Sertifikasi</h1>
    </div>
    <div
        class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center backgroundColorTertiary ">
        <div class="list-group container-lg backgroundColorTertiary">
            <a href="#" class="list-group-item d-flex gap-3 py-3 backgroundColorTertiary border-0"
                aria-current="true">
                <img src="{{ asset('images/ellipse1.png') }}" alt="twbs" width="50" height="50"
                    class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="my-1 decenaryColor fw-bolder">BG004</h6>
                        <p class="my-1 decenaryColor fw-bolder">Jasa Pelaksana Untuk Konstruksi Bangunan Komersial
                        </p>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item d-flex gap-3 py-3 backgroundColorTertiary border-0"
                aria-current="true">
                <img src="{{ asset('images/ellipse1.png') }}" alt="twbs" width="50" height="50"
                    class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="my-1 decenaryColor fw-bolder">BG008</h6>
                        <p class="my-1 decenaryColor fw-bolder">Jasa Pelaksana Untuk Konstruksi Bangunan Kesehatan
                        </p>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item d-flex gap-3 py-3 backgroundColorTertiary border-0"
                aria-current="true">
                <img src="{{ asset('images/ellipse1.png') }}" alt="twbs" width="50" height="50"
                    class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="my-1 decenaryColor fw-bolder">EL008</h6>
                        <p class="my-1 decenaryColor fw-bolder">Jasa pelaksana instalasi jaringan distribusi
                            telekomunikasi dan/atau telepon</p>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item d-flex gap-3 py-3 backgroundColorTertiary border-0"
                aria-current="true">
                <img src="{{ asset('images/ellipse1.png') }}" alt="twbs" width="50" height="50"
                    class="rounded-circle flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="my-1 decenaryColor fw-bolder">PL002</h6>
                        <p class="my-1 decenaryColor fw-bolder">Jasa
                            Pelaksana Perakitan dan Pemasangan Konstruksi Prafabrikasi untuk Konstruksi Bangunan
                            Gedung.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    {{-- Footer --}}
    <div class="container-fluid backgroundColorPrimary py-1">
        <footer class="row row-cols-1 py-4 my-0 px-5">
            <div class="col my-0">
                <h5 class="py-2 fw-bolder">Hubungi Kami</h5>
                <div class="col-lg-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone-fill mr-md-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                    <span class="fs-6">0812-3456-7890</span>
                </div>
                <div class="col-lg-3 my-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                    </svg>
                    <span class="fs-6">akmalpratamagemilang@gmail.com</span>
                </div>
            </div>
        </footer>
    </div>
@endsection
