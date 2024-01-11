<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Akun;
use App\Models\User;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Pesan;
use Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // public function index(){
    //     return view('index');
    // }

    public function tampilGaleri(){
        $viewData["galeri"] = Galeri::all();
        return view('admin.pages.tampil_galeri')->with("viewData", $viewData);
    }

    // public function galeriDetail(){
    //     return view('user.galeriDetail');
    // }

    public function tampilBerita(){
        $viewData["berita"] = Berita::all();
        return view('admin.pages.tampil_berita')->with("viewData", $viewData);
    }

    // public function beritaDetail(){
    //     return view('user.beritaDetail');
    // }

    public function tampilPesan(){
        $viewData["pesan"] = Pesan::all();
        return view('admin.pages.tampil_pesan')->with("viewData", $viewData);
    }

    // Perlu Implementasi
    // public function kelolaPesan($id){
        
    // }

    public function postGaleri(Request $request){

        $galeri = new Galeri();
        $galeri->setIdAkun(Auth::id());
        $galeri->setnamaProjek($request->input('nama_projek'));
        $galeri->setJenisProjek($request->input('jenis_projek'));
        $galeri->setDeskripsiGaleri($request->input('deskripsi'));
        $galeri->setIsiGaleri($request->input('isi'));
        $galeri->setGambarGaleri("placeholder.png");
        $galeri->save();

        if ($request->hasFile('gambar')) {
            $imageName = $galeri->getIdGaleri()."galeri.".$request->file('gambar')->extension();
            Storage::disk('public')->put(
            $imageName,
            file_get_contents($request->file('gambar')->getRealPath())
            );
            $galeri->setGambarGaleri($imageName);
            $galeri->save();
            }
        return redirect("tampil-galeri")->withSuccess('Galeri berhasil dibuat');
    }

    public function postBerita(Request $request){

        $berita = new Berita();
        $berita->setIdAkun(Auth::id());
        $berita->setJudulBerita($request->input('judul_berita'));
        $berita->setIsiBerita($request->input('isi_berita'));
        $berita->setGambarBerita("placeholder.png");
        $berita->save();

        if ($request->hasFile('gambar')) {
            $imageName = $berita->getIdBerita()."berita.".$request->file('gambar')->extension();
            Storage::disk('public')->put(
            $imageName,
            file_get_contents($request->file('gambar')->getRealPath())
            );
            $berita->setGambarBerita($imageName);
            $berita->save();
            }
        return redirect("tampil-berita")->withSuccess('Galeri berhasil dibuat');
    }

    // public function createBerita(array $data){
    //     return Pesan::create([
    //         'nama_pengirim' => $data['nama_pengirim'],
    //         'alamat_domisili' => $data['alamat_domisili'],
    //         'alamat_tanah' => $data['alamat_tanah'],
    //         'no_hp' => $data['no_hp'],
    //         'email_pengirim' => $data['email_pengirim'],
    //         'paket_konstruksi' => $data['paket_konstruksi'],
    //         'jenis_bangunan' => $data['jenis_bangunan'],
    //         'jumlah_lantai' => $data['jumlah_lantai'],
    //         'jumlah_bangunan' => $data['jumlah_bangunan'],
    //         'rencana_pembangunan' => $data['rencana_pembangunan'],
    //         'konsep_style' => $data['konsep_style'],
    //         'luas_tanah' => $data['luas_tanah'],
    //         'rencana_luas_bangunan' => $data['rencana_luas_bangunan'],
    //         'pesan_tambahan' => $data['pesan_tambahan'],
    //     ]);
    // }
}