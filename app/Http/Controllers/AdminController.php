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

    public function tampilGaleri(){
        $viewData["galeri"] = Galeri::all();
        $viewData['title'] = "Kelola Galeri";
        return view('admin.pages.tampil_galeri')->with("viewData", $viewData);
    }

    public function tampilBerita(){
        $viewData["berita"] = Berita::all();
        $viewData['title'] = "Kelola Berita";
        return view('admin.pages.tampil_berita')->with("viewData", $viewData);
    }

    public function tampilPesan(){
        $viewData["pesan"] = Pesan::all();
        $viewData['title'] = "Kelola Pesan";
        return view('admin.pages.tampil_pesan')->with("viewData", $viewData);
    }

    public function lihatDetailPesan($idForm){
        $viewData = [];
        $viewData['title'] = "Detail Pesan";
        $viewData["pesan"] = Pesan::findOrFail($idForm);
        return view('admin.pages.lihat_detail_pesan')->with("viewData", $viewData); 
    }

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

    public function deleteBerita($idBerita){
        Berita::destroy($idBerita);
        return back();
    }

    public function deleteGaleri($idGaleri){
        Galeri::destroy($idGaleri);
        return back();
    }

    public function editBerita($idBerita){
        $viewData = [];
        $viewData['title'] = "Edit Berita";
        $viewData["berita"] = Berita::findOrFail($idBerita);
        return view('admin.pages.edit_berita')->with("viewData", $viewData); 
    }

    public function editGaleri($idGaleri){
        $viewData = [];
        $viewData['title'] = "Edit Galeri";
        $viewData["galeri"] = Galeri::findOrFail($idGaleri);
        return view('admin.pages.edit_galeri')->with("viewData", $viewData); 
    }

    public function updateBerita(Request $request, $idBerita){
        
        $berita = Berita::findOrFail($idBerita);
        $berita->setJudulBerita($request->input('nama'));
        $berita->setIsiBerita($request->input('isi'));
        if ($request->hasFile('gambar')) {
        $imageName = $berita->getIdBerita()."_berita.".$request->file('gambar')->extension();
        Storage::disk('public')->put(
        $imageName,
        file_get_contents($request->file('gambar')->getRealPath())
        );
        $berita->setGambarBerita($imageName);
        }
        $berita->save();
        return redirect()->route('admin.pages.tampil_berita');
    }

    public function updateGaleri(Request $request, $idGaleri){

        $galeri = Galeri::findOrFail($idGaleri);
        $galeri->setNamaProjek($request->input('nama_projek'));
        $galeri->setJenisProjek($request->input('jenis_projek'));
        $galeri->setDeskripsiGaleri($request->input('deskripsi'));
        $galeri->setIsiGaleri($request->input('isi'));
        if ($request->hasFile('gambar')) {
        $imageName = $galeri->getIdGaleri()."_galeri.".$request->file('gambar')->extension();
        Storage::disk('public')->put(
        $imageName,
        file_get_contents($request->file('gambar')->getRealPath())
        );
        $galeri->setGambarGaleri($imageName);
        }
        $galeri->save();
        return redirect()->route('admin.pages.tampil_galeri');
    }
}