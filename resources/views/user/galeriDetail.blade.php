@extends('layout_main')
@section('content')
    <div class="backgroundColorTertiary">
        <div class="row py-lg-3">
            <div class="mx-auto d-flex align-items-center justify-content-center">
                <h1 class="fw-bolder quaternaryColor">{{ $viewData['galeri']['nama_projek'] }}</h1>
            </div>
            <div class="mx-auto d-flex align-items-center justify-content-center">
                <p class="quaternaryColor fw-bolder">
                    <a href="#" class="btn my-3 backgroundColorQuaternary disabled" role="button" aria-disabled="true"
                        style="width: 150px; outline-color: #1E1E1E; outline-width: ">BANGUN
                        BARU</a>
                </p>
            </div>
        </div>
        <div class="row mb-4 d-flex align-items-center justify-content-center">
            <div class=" mb-4 container d-flex align-items-center justify-content-center rounded"
                style="background-image: url('{{ asset('/storage/' . $viewData['galeri']->getGambarGaleri()) }}'); 
    background-repeat: no-repeat;
    background-attachment: scroll; 
    background-size: 100% 100%;
    width:70%;
    height: 500px;
    ">
            </div>
            <div class="column-gap-lg-5 gap-10 mb-5 d-flex align-items-center justify-content-around quaternaryColor"
                style="width: 67%">
                <div class="row d-inline-flex">
                    <h4 class="fw-bolder">Deskripsi Projek</h4>
                    <h6>{{ $viewData['galeri']['deskripsi'] }}</h6>
                    <h6><strong>Jenis :</strong> Bangunan Baru</h6>
                </div>
                <div class="row d-inline-flex px-5">
                    <h4 class="fw-bolder">Detail Projek</h4>
                    <h6><strong>Klien :</strong> Mr. X</h6>
                    <h6><strong>Lokasi :</strong> Jakarta</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
