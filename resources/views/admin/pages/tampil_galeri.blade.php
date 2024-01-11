@extends('admin.layout_admin')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Buat Galeri Projek
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('galeri.post') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nama Projek:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="nama_projek" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Jenis Projek:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="jenis_projek" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Deskripsi Projek :</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="deskripsi" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Penjelasan Projek:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="isi" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Gambar:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="gambar">
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
            Atur Program Donasi
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id Projek</th>
                        <th scope="col">Nama Projek</th>
                        <th scope="col">Jenis projek</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['galeri'] as $galeri)
                        <tr>
                            <td>{{ $galeri->getIdGaleri() }}</td>
                            <td>{{ $galeri->getNamaProjek() }}</td>
                            <td>{{ $galeri->getJenisProjek() }}</td>
                            <td>{{ $galeri->getDeskripsiGaleri() }}</td>
                            <td><img src="{{ asset('/storage/' . $galeri->getGambarGaleri()) }}"
                                    class="card-img-top img-card" title="{{ $galeri->getGambarGaleri() }}"></td>
                            <td>
                                <a class="btn btn-primary" href="#">
                                    <i class="bi-pencil"></i>
                                </a>

                            </td>
                            <td>
                                <form action="#" method="POST">
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
