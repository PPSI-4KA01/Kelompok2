@extends('layout_main')
@section('content')
    <section class="content">

        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body mx-5 px-5">
                {{-- <div class="row"> --}}
                <div class="container-fluid" style="width: 100%">
                    <img src="{{ asset('/storage/' . $viewData['berita']->getGambarBerita()) }}" alt=""
                        class="my-5 container d-flex align-items-center" style="width: 100%; height: 500px;">
                </div>
                <div class="col-12 col-sm-12">
                    <h3 class="my-3">{{ $viewData['berita']['judul_berita'] }}</h3>
                    <p style="display: block">{{ $viewData['berita']['isi_berita'] }}</p>

                    <hr>

                    <!-- /.card-body -->
                    {{-- </div> --}}
                    <!-- /.card -->

    </section>
@endsection
