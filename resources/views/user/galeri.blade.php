@extends('layout_main')
@section('content')
    <main>
        <div class="album py-1 backgroundColorTertiary">
            <section class="py-1 text-center container">
                <div class="row py-lg-5">
                    <div class="col-lg-6 col-md-8 mx-auto">
                        <h1 class="fw-light quaternaryColor">Projek</h1>
                        <p class="lead quaternaryColor"><b class="fw-bolder">PT. Akmal Pratama Gemilang</b> telah
                            mengerjakan berbagai
                            projek konstruksi dengan penuh dedikasi dan kualitas unggul, menjadi mitra terpercaya
                            bagi klien-klien kami</p>
                        <p>
                            <a href="#" class="btn my-3 backgroundColorQuaternary" style="width: 150px">ALL</a>
                            <a href="#" class="btn my-3 backgroundColorQuaternary" style="width: 150px">RENOVASI</a>
                            <a href="#" class="btn my-3 backgroundColorQuaternary" style="width: 150px">BANGUN
                                BARU</a>
                        </p>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($viewData['galeri'] as $galeri)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ asset('/storage/' . $galeri->getGambarGaleri()) }}"
                                    class="card-img-top img-card" title="{{ $galeri->getGambarGaleri() }}" width="100%"
                                    height="225" role="img">
                                <div class="card-body">
                                    <p class="card-text">{{ $galeri->getDeskripsiGaleri() }}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="{{ route('user.galeriDetail', ['idGaleri' => $galeri->getIdGaleri()]) }}"
                                            class="btn backgroundColorTertiary quaternaryColor stretched-link">Lebih
                                            Lanjut</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
