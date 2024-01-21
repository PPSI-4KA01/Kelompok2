@extends('admin.layout_admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Detail Pesan {{ $viewData['pesan']->getIdForm() }}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nama Pengirim :</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="nama" value="{{ $viewData['pesan']->getNamaPengirim() }}" type="text"
                                class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Email Pengirim :</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="nama" value="{{ $viewData['pesan']->getEmailPengirim() }}" type="text"
                                class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">No Handphone Pengirim :</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="nama" value="{{ $viewData['pesan']->getNoHP() }}" type="text"
                                class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nama Pengirim :</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <label for="pesan_tambahan">Pesan</label>
                            <textarea id="pesan_tambahan" class="form-control" rows="10" name="pesan_tambahan" aria-valuetext="" disabled>{{ $viewData['pesan']->getPesanTambahan() }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
