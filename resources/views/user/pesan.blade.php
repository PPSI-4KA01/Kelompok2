@extends('layout_main')
@section('content')
    <div class="container mt-5 ">
        <h2 class="mb-4">Hubungi Kami</h2>
        <form action="{{ route('pesan.post') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-body row">
                    <div class="col-5 text-center d-flex align-items-center justify-content-center">
                        <div class="">
                            <ul>
                                <h2>Vasa Studio</h2>
                            </ul>
                            <ul>Alamat Lengkap Disini</ul>
                            <ul>Link WA</ul>
                            <ul>Link Pinterest</ul>
                            <ul>Link Instagram</ul>
                            <ul>Gmail Perusahaan</ul>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="form-group">
                            <label for="nama_pengirim">Nama</label>
                            <input type="text" id="nama_pengirim" class="form-control" name="nama_pengirim" />
                        </div>
                        <div class="form-group">
                            <label for="email_pengirim">E-Mail</label>
                            <input type="email" id="email_pengirim" class="form-control" name="email_pengirim" />
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Handphone</label>
                            <input type="text" id="no_hp" class="form-control" name="no_hp" />
                        </div>
                        <div class="form-group">
                            <label for="pesan_tambahan">Pesan</label>
                            <textarea id="pesan_tambahan" class="form-control" rows="6" name="pesan_tambahan"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Send message">
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
