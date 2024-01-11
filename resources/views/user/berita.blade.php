@extends('layout_main')
@section('content')
    <br>
    <div class="container-sm bg-white" style="width: 80%">
        @foreach ($viewData['berita'] as $berita)
            <div class="row container-fluid bg-white mx-auto py-5">
                <div class="col-md-8 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1 quaternaryColor">{{ $berita->getJudulBerita() }}</h2>
                    <p class="lead quaternaryColor">{{ $berita->getIsiBerita() }}</p>
                </div>
                <div class="col-md-3 order-md-1">
                    <img src="{{ asset('/storage/' . $berita->getGambarBerita()) }}" class="card-img-top img-card"
                        title="{{ $berita->getGambarBerita() }}" width="256" height="256" role="img">
                </div>
            </div>
        @endforeach
    </div>
@endsection
