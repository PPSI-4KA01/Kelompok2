<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
            'id_akun',
            'judul_berita',
            'isi_berita',
            'gambar',
    ];

    protected $table = "berita";
    protected $primaryKey = "id_berita";

    public function getIdBerita(){
        return $this->attributes['id_berita'];
    }

    public function setIdBerita($id_berita){
        $this->attributes['id_berita'] = $id_berita;
    }

    public function getIdAkun(){
        return $this->attributes['id_akun'];
    }

    public function setIdAkun($id_akun){
        $this->attributes['id_akun'] = $id_akun;
    }

    public function getJudulBerita(){
        return $this->attributes['judul_berita'];
    }

    public function setJudulBerita($judul_berita){
        $this->attributes['judul_berita'] = $judul_berita;
    }

    public function getIsiBerita(){
        return $this->attributes['isi_berita'];
    }

    public function setIsiBerita($isi_berita){
        $this->attributes['isi_berita'] = $isi_berita;
    }

    public function getGambarBerita(){
        return $this->attributes['gambar'];
    }

    public function setGambarBerita($gambar_berita){
        $this->attributes['gambar'] = $gambar_berita;
    }

    public function getBuat(){
        return $this->attributes['created_at'];
    }
    
    public function setBuat($created_at){
        $this->attributes['created_at'] = $created_at;
    }
    
    public function getUpdate(){
        return $this->attributes['updated_at'];
    }
    
    public function setUpdate($updated_at){
        $this->attributes['updated_at'] = $updated_at;
    }
}