<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_akun',
            'nama_projek',
            'jenis_projek',
            'deskripsi',
            'isi',
            'gambar',
    ];

    protected $table = "galeri";
    protected $primaryKey = "id_galeri";

    public function getIdGaleri(){
        return $this->attributes['id_galeri'];
    }

    public function setIdGaleri($id_galeri){
        $this->attributes['id_galeri'] = $id_galeri;
    }

    public function getIdAkun(){
        return $this->attributes['id_akun'];
    }

    public function setIdAkun($id_akun){
        $this->attributes['id_akun'] = $id_akun;
    }

    public function getNamaProjek(){
        return $this->attributes['nama_projek'];
    }

    public function setNamaProjek($nama_projek){
        $this->attributes['nama_projek'] = $nama_projek;
    }

    public function getJenisProjek(){
        return $this->attributes['jenis_projek'];
    }

    public function setJenisProjek($jenis_projek){
        $this->attributes['jenis_projek'] = $jenis_projek;
    }

    public function getDeskripsiGaleri(){
        return $this->attributes['deskripsi'];
    }

    public function setDeskripsiGaleri($deskripsi_galeri){
        $this->attributes['deskripsi'] = $deskripsi_galeri;
    }

    public function getIsiGaleri(){
        return $this->attributes['isi'];
    }

    public function setIsiGaleri($isi_galeri){
        $this->attributes['isi'] = $isi_galeri;
    }

    public function getGambarGaleri(){
        return $this->attributes['gambar'];
    }

    public function setGambarGaleri($gambar_galeri){
        $this->attributes['gambar'] = $gambar_galeri;
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