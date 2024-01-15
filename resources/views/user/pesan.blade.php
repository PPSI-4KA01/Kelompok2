@extends('layout_main')
@section('content')
    <div class="container mt-5 ">
        <h2 class="mb-4">Form Pemesanan</h2>
        <form action="{{ route('pesan.post') }}" method="POST">
            @csrf
            <!-- Field 2 -->
            <div class="mb-3">
                <label for="nama_pengirim" class="form-label">Nama Pengirim</label>
                <input type="text" id="nama_pengirim" class="form-control" name="nama_pengirim" placeholder="Nama Lengkap"
                    required autofocus>
                @if ($errors->has('nama_pengirim'))
                    <span class="text-danger">{{ $errors->first('nama_pengirim') }}</span>
                @endif
            </div>

            <!-- Field 3 -->
            <div class="mb-3">
                <label for="alamat_domisili" class="form-label">Alamat Domisili</label>
                <input type="text" id="alamat_domisili" class="form-control" name="alamat_domisili"
                    placeholder="Alamat Domisili" required autofocus>
                @if ($errors->has('alamat_domisili'))
                    <span class="text-danger">{{ $errors->first('alamat_domisili') }}</span>
                @endif
            </div>

            <!-- Field 4 -->
            <div class="mb-3">
                <label for="alamat_tanah" class="form-label">Alamat Tanah</label>
                <input type="text" id="alamat_tanah" class="form-control" name="alamat_tanah" placeholder="Email"
                    required autofocus>
                @if ($errors->has('alamat_tanah'))
                    <span class="text-danger">{{ $errors->first('alamat_tanah') }}</span>
                @endif
            </div>

            <!-- Field 5 -->
            <div class="mb-3">
                <label for="no_hp" class="form-label">Nomor Handphoe</label>
                <input type="text" id="no_hp" class="form-control" name="no_hp" placeholder="Nomor Handphone"
                    required autofocus>
                @if ($errors->has('no_hp'))
                    <span class="text-danger">{{ $errors->first('no_hp') }}</span>
                @endif
            </div>

            <!-- Field 6 -->
            <div class="mb-3">
                <label for="email_pengirim" class="form-label">Email</label>
                <input type="text" id="email_pengirim" class="form-control" name="email_pengirim" placeholder="Email"
                    required autofocus>
                @if ($errors->has('email_pengirim'))
                    <span class="text-danger">{{ $errors->first('email_pengirim') }}</span>
                @endif
            </div>

            <!-- Field 7 -->
            <div class="mb-3">
                <label for="paket_konstruksi" class="form-label">Paket Konstruksi</label>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" class="col-lg-10 col-md-6 col-sm-12"
                        name="paket_konstruksi">
                        <option selected>Pilih Satu</option>
                        <option value="1">Paket 1</option>
                        <option value="2">Paket 2</option>
                        <option value="3">Paket 3</option>
                        <option value="4">Paket 4</option>
                    </select>
                </div>
            </div>

            <!-- Field 8 -->
            <div class="mb-3">
                <label for="jenis_bangunan" class="form-label">Jenis Bangunan</label>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" class="col-lg-10 col-md-6 col-sm-12"
                        name="jenis_bangunan">
                        <option selected>Pilih Satu</option>
                        <option value="1">Bangunan 1</option>
                        <option value="2">Bangunan 2</option>
                        <option value="3">Bangunan 3</option>
                        <option value="4">Bangunan 4</option>
                    </select>

                </div>
            </div>

            <!-- Field 9 -->
            <div class="mb-3">
                <label for="jumlah_lantai" class="form-label">Jumlah Lantai</label>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" class="col-lg-10 col-md-6 col-sm-12"
                        name="jumlah_lantai">
                        <option selected>Pilih Satu</option>
                        <option value="1">1 (satu) lantai</option>
                        <option value="2">2 (dua) lantai</option>
                        <option value="3">3 (tiga) lantai</option>
                        <option value="4">4 (empat) lantai</option>
                    </select>

                </div>
            </div>

            <!-- Field 10 -->
            <div class="mb-3">
                <label for="jumlah_bangunan" class="form-label">Jumlah Bangunan</label>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" class="col-lg-10 col-md-6 col-sm-12"
                        name="jumlah_bangunan">
                        <option selected>Pilih Satu</option>
                        <option value="1">1 (satu) bangunan</option>
                        <option value="2">2 (dua) bangunan</option>
                        <option value="3">3 (tiga) bangunan</option>
                        <option value="4">4 (empat) bangunan</option>
                    </select>

                </div>
            </div>

            <!-- Field 11 -->
            <div class="mb-3">
                <label for="rencana_pembangunan" class="form-label">Rencana Pembangunan</label>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" class="col-lg-10 col-md-6 col-sm-12"
                        name="rencana_pembangunan">
                        <option selected>Pilih Satu</option>
                        <option value="Bangun Baru">Bangun Baru</option>
                        <option value="Renovasi">Renovasi</option>
                    </select>
                </div>
            </div>

            <!-- Field 12 -->
            <div class="mb-3">
                <label for="konsep_style" class="form-label">Konsep Style</label>
                <div class="input-group">
                    <select class="form-select" aria-label="Default select example" class="col-lg-10 col-md-6 col-sm-12"
                        name="konsep_style">
                        <option selected>Pilih Satu</option>
                        <option value="Minimalis Modern">Minimalis Modern</option>
                        <option value="Modern Kontemporer">Modern Kontemporer</option>
                        <option value="Modern Mediterania">Modern Mediterania</option>
                        <option value="Rumah Klasik">Rumah Klasik</option>
                        <option value="Rumah Kolonial">Rumah Kolonial</option>
                    </select>

                </div>
            </div>

            <!-- Field 13 -->
            <div class="mb-3">
                <label for="luas_tanah" class="form-label">Luas Tanah</label>
                <input type="text" id="luas_tanah" class="form-control" name="luas_tanah" placeholder="Luas Tanah"
                    required autofocus>
                @if ($errors->has('luas_tanah'))
                    <span class="text-danger">{{ $errors->first('luas_tanah') }}</span>
                @endif
            </div>

            <!-- Field 14 -->
            <div class="mb-3">
                <label for="rencana_luas_bangunan" class="form-label">Rencana Luas Bangunan</label>
                <input type="text" id="rencana_luas_bangunan" class="form-control" name="rencana_luas_bangunan"
                    placeholder="Rencana Luas Bangunan" required autofocus>
                @if ($errors->has('rencana_luas_bangunan'))
                    <span class="text-danger">{{ $errors->first('rencana_luas_bangunan') }}</span>
                @endif
            </div>

            <!-- Field 15 -->
            <div class="mb-3">
                <label for="pesan_tambahan" class="form-label">Pesan Tambahan</label>
                <input type="text" id="pesan_tambahan" class="form-control" name="pesan_tambahan"
                    placeholder="Pesan Tambahan" required autofocus>
                @if ($errors->has('pesan_tambahan'))
                    <span class="text-danger">{{ $errors->first('pesan_tambahan') }}</span>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
