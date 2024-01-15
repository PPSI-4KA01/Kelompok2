@extends('admin.layout_admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Buat Berita
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('berita.post') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Judul Berita:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="judul_berita" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Gambar Berita:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="gambar">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Isi Berita:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <textarea name="" id="" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <button type="submit" class="btn btn-grad">Submit</button>
            </form>
        </div>
    </div>
    {{-- Akhir Membuat program Donasi --}}

    <div class="card">
        <div class="card-header">
            Atur Berita
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id Berita</th>
                        <th scope="col">Judul Berita</th>
                        <th scope="col">Isi Berita</th>
                        <th scope="col">Gambar Berita</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['berita'] as $berita)
                        <tr>
                            <td>{{ $berita->getIdBerita() }}</td>
                            <td>{{ $berita->getJudulBerita() }}</td>
                            <td>{{ $berita->getIsiBerita() }}</td>
                            <td><img src="{{ asset('/storage/' . $berita->getGambarBerita()) }}"
                                    class="card-img-top img-card" title="{{ $berita->getGambarberita() }}"></td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.pages.edit_berita', ['idBerita' => $berita->getIdBerita()]) }}">
                                    <i class="bi-pencil"></i>
                                </a>

                            </td>
                            <td>
                                <form action="{{ route('berita.delete', $berita->getIdBerita()) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
