<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pesan;
use App\Models\galeri;
use App\Models\berita;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function galeri(){
        $viewData["galeri"] = Galeri::all();
        return view('user.galeri')->with("viewData", $viewData);
    }

    public function galeriDetail($idGaleri){
        $viewData = [];
        $galeri = Galeri::findOrFail($idGaleri);
        // $galeri = Galeri::where('id_galeri', $idGaleri)->firstOrFail();
        $viewData["galeri"] = $galeri;
        return view('user.galeriDetail')->with("viewData", $viewData);
    }

    public function berita(){
        $viewData["berita"] = Berita::all();
        return view('user.berita')->with("viewData", $viewData);
    }

    public function beritaDetail(){
        return view('user.beritaDetail');
    }

    public function pesan(){
        return view('user.pesan');
    }

    public function postPesan(Request $request){

        $data = $request->all();
        $check = $this->createPesan($data);
        return redirect("form-pesan")->withSuccess('Pesan berhasil dikirim');
    }

    public function createPesan(array $data){
        return Pesan::create([
            'nama_pengirim' => $data['nama_pengirim'],
            'alamat_domisili' => $data['alamat_domisili'],
            'alamat_tanah' => $data['alamat_tanah'],
            'no_hp' => $data['no_hp'],
            'email_pengirim' => $data['email_pengirim'],
            'paket_konstruksi' => $data['paket_konstruksi'],
            'jenis_bangunan' => $data['jenis_bangunan'],
            'jumlah_lantai' => $data['jumlah_lantai'],
            'jumlah_bangunan' => $data['jumlah_bangunan'],
            'rencana_pembangunan' => $data['rencana_pembangunan'],
            'konsep_style' => $data['konsep_style'],
            'luas_tanah' => $data['luas_tanah'],
            'rencana_luas_bangunan' => $data['rencana_luas_bangunan'],
            'pesan_tambahan' => $data['pesan_tambahan'],
        ]);
    }
    
    public function redirectWA(){
        return redirect('https://wa.me/6281283159755');
    }
}