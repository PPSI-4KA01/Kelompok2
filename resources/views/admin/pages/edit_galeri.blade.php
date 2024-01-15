@extends('admin.layout_admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Edit Galeri/Portofolio
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('galeri.update', ['idGaleri' => $viewData['galeri']->getIdGaleri()]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nama Projek:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="nama_projek" type="text" class="form-control"
                                    value="{{ $viewData['galeri']->getNamaProjek() }}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="input-group">

                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label input-group-text">Jenis
                                Projek:</label>
                            <select class="form-select" aria-label="Default select example"
                                class="col-lg-10 col-md-6 col-sm-12" name="jenis_projek">

                                @if ($viewData['galeri']->getJenisProjek() == '1')
                                    <option>Pilih Satu</option>
                                    <option value="1" selected>Arsitektur</option>
                                    <option value="2">Pembangunan dan Renovasi Rumah</option>
                                    <option value="3">Desain Rumah</option>
                                    <option value="4">Manajemen</option>
                                @elseif ($viewData['galeri']->getJenisProjek() == '2')
                                    <option>Pilih Satu</option>
                                    <option value="1">Arsitektur</option>
                                    <option value="2" selected>Pembangunan dan Renovasi Rumah</option>
                                    <option value="3">Desain Rumah</option>
                                    <option value="4">Manajemen</option>
                                @elseif ($viewData['galeri']->getJenisProjek() == '3')
                                    <option>Pilih Satu</option>
                                    <option value="1">Arsitektur</option>
                                    <option value="2">Pembangunan dan Renovasi Rumah</option>
                                    <option value="3" selected>Desain Rumah</option>
                                    <option value="4">Manajemen</option>
                                @elseif ($viewData['galeri']->getJenisProjek() == '4')
                                    <option>Pilih Satu</option>
                                    <option value="1">Arsitektur</option>
                                    <option value="2">Pembangunan dan Renovasi Rumah</option>
                                    <option value="3">Desain Rumah</option>
                                    <option value="4" selected>Manajemen</option>
                                @else
                                    <option>Pilih Satu</option>
                                    <option value="1" selected>Arsitektur</option>
                                    <option value="2">Pembangunan dan Renovasi Rumah</option>
                                    <option value="3">Desain Rumah</option>
                                    <option value="4">Manajemen</option>
                                @endif
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Deskripsi Projek :</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="deskripsi" type="text" class="form-control"
                                    value="{{ $viewData['galeri']->getDeskripsiGaleri() }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Penjelasan Projek:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="isi" type="text" class="form-control"
                                    value="{{ $viewData['galeri']->getIsiGaleri() }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Gambar:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="gambar"
                                    value="{{ $viewData['galeri']->getGambarGaleri() }}">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
