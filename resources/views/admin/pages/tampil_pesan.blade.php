@extends('admin.layout_admin')
@section('title', $viewData['title'])
@section('content')
    {{-- Akhir Membuat program Donasi --}}

    <div class="card">
        <div class="card-header">
            Atur Pesan Masuk
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID Pesan</th>
                        <th scope="col">Jenis Pesan</th>
                        <th scope="col">Nama Pengirim</th>
                        <th scope="col">No Handphone</th>
                        <th scope="col">Email Pengirim</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Lihat Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['pesan'] as $pesan)
                        <tr>
                            <td>{{ $pesan->getIdForm() }}</td>
                            <td>{{ $pesan->getJenisForm() }}</td>
                            <td>{{ $pesan->getNamaPengirim() }}</td>
                            <td>{{ $pesan->getNoHP() }}</td>
                            <td>{{ $pesan->getEmailPengirim() }}</td>
                            <td>{{ $pesan->getPesanTambahan() }}</td>
                            <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.pages.lihat_detail_pesan', ['idForm' => $pesan->getIdForm()]) }}">
                                    <i class="">Lebih Detail</i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
