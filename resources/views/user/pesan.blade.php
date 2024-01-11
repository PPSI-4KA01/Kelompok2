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
                <input type="text" id="paket_konstruksi" class="form-control" name="paket_konstruksi"
                    placeholder="Paket Konstruksi" required autofocus>
                @if ($errors->has('paket_konstruksi'))
                    <span class="text-danger">{{ $errors->first('paket_konstruksi') }}</span>
                @endif
            </div>

            <!-- Field 8 -->
            <div class="mb-3">
                <label for="jenis_bangunan" class="form-label">Jenis Bangunan</label>
                <input type="text" id="jenis_bangunan" class="form-control" name="jenis_bangunan"
                    placeholder="Jenis Bangunan" required autofocus>
                @if ($errors->has('jenis_bangunan'))
                    <span class="text-danger">{{ $errors->first('jenis_bangunan') }}</span>
                @endif
            </div>

            <!-- Field 9 -->
            <div class="mb-3">
                <label for="jumlah_lantai" class="form-label">Jumlah Lantai</label>
                <input type="text" id="jumlah_lantai" class="form-control" name="jumlah_lantai"
                    placeholder="Jumlah Lantai" required autofocus>
                @if ($errors->has('jumlah_lantai'))
                    <span class="text-danger">{{ $errors->first('jumlah_lantai') }}</span>
                @endif
            </div>

            <!-- Field 10 -->
            <div class="mb-3">
                <label for="jumlah_bangunan" class="form-label">Jumlah Bangunan</label>
                <input type="text" id="jumlah_bangunan" class="form-control" name="jumlah_bangunan"
                    placeholder="Jumlah Bangunan" required autofocus>
                @if ($errors->has('jumlah_bangunan'))
                    <span class="text-danger">{{ $errors->first('jumlah_bangunan') }}</span>
                @endif
            </div>

            <!-- Field 11 -->
            <div class="mb-3">
                <label for="rencana_pembangunan" class="form-label">Rencana Pembangunan</label>
                <input type="text" id="rencana_pembangunan" class="form-control" name="rencana_pembangunan"
                    placeholder="Rencana Pembangunan" required autofocus>
                @if ($errors->has('rencana_pembangunan'))
                    <span class="text-danger">{{ $errors->first('rencana_pembangunan') }}</span>
                @endif
            </div>

            <!-- Field 12 -->
            <div class="mb-3">
                <label for="konsep_style" class="form-label">Konsep Style</label>
                <input type="text" id="konsep_style" class="form-control" name="konsep_style"
                    placeholder="Konsep Style" required autofocus>
                @if ($errors->has('konsep_style'))
                    <span class="text-danger">{{ $errors->first('konsep_style') }}</span>
                @endif
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
