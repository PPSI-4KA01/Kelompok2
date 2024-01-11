<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = [
'nama_pengirim',
'alamat_domisili',
'alamat_tanah',
'no_hp',
'email_pengirim',
'paket_konstruksi',
'jenis_bangunan',
'jumlah_lantai',
'jumlah_bangunan',
'rencana_pembangunan',
'konsep_style',
'luas_tanah',
'rencana_luas_bangunan',
'pesan_tambahan'
    ];

    protected $table = "pesan";
    protected $primaryKey = "id_form";

    public function getIdForm(){
        return $this->attributes['id_form'];
    }

    public function setIdForm($id_form){
        $this->attributes['id_form'] = $id_form;
    }

    public function getJenisForm(){
        return $this->attributes['jenis_form'];
    }

    public function setJenisForm($jenis_form){
        $this->attributes['jenis_form'] = $jenis_form;
    }

    public function getNamaPengirim(){
        return $this->attributes['nama_pengirim'];
    }

    public function setNamaPengirim($nama_pengirim){
        $this->attributes['nama_pengirim'] = $nama_pengirim;
    }

    public function getAlamatDomisili(){
        return $this->attributes['alamat_domisili'];
    }

    public function setAlamatDomisili($alamat_domisili){
        $this->attributes['alamat_domisili'] = $alamat_domisili;
    }

    public function getAlamatTanah(){
        return $this->attributes['alamat_tanah'];
    }

    public function setAlamatTanah($alamat_tanah){
        $this->attributes['alamat_tanah'] = $alamat_tanah;
    }

    public function getNoHP(){
        return $this->attributes['no_hp'];
    }

    public function setNoHP($no_hp){
        $this->attributes['no_hp'] = $no_hp;
    }

    public function getEmailPengirim(){
        return $this->attributes['email_pengirim'];
    }

    public function setEmailPengirim($email_pengirim){
        $this->attributes['email_pengirim'] = $email_pengirim;
    }

    public function getPaketKonstruksi(){
        return $this->attributes['paket_konstruksi'];
    }

    public function setPaketKonstruksi($paket_konstruksi){
        $this->attributes['paket_konstruksi'] = $paket_konstruksi;
    }

    public function getJenisBangunan(){
        return $this->attributes['jenis_bangunan'];
    }

    public function setJenisBangunan($jenis_bangunan){
        $this->attributes['jenis_bangunan'] = $jenis_bangunan;
    }

    public function getJumlahLantai(){
        return $this->attributes['jumlah_lantai'];
    }

    public function setJumlahLantai($jumlah_lantai){
        $this->attributes['jumlah_lantai'] = $jumlah_lantai;
    }

    public function getJumlahBangunan(){
        return $this->attributes['jumlah_bangunan'];
    }

    public function setJumlahBangunan($jumlah_bangunan){
        $this->attributes['jumlah_bangunan'] = $jumlah_bangunan;
    }

    public function getRencanaPembangunan(){
        return $this->attributes['rencana_pembangunan'];
    }

    public function setRencanaPembangunan($rencana_pembangunan){
        $this->attributes['rencana_pembangunan'] = $rencana_pembangunan;
    }

    public function getKonsepStyle(){
        return $this->attributes['konsep_style'];
    }

    public function setKonsepStyle($konsep_style){
        $this->attributes['konsep_style'] = $konsep_style;
    }

    public function getLuasTanah(){
        return $this->attributes['luas_tanah'];
    }

    public function setLuasTanah(){
        $this->attributes['luas_tanah'] = $luas_tanah;
    }

    public function getRencanaLuasBangunan(){
        return $this->attributes['rencana_luas_bangunan'];
    }

    public function setRencanaLuasBangunan($rencana_luas_bangunan){
        $this->attributes['rencana_luas_bangunan'] = $rencana_luas_bangunan;
    }

    public function getPesanTambahan(){
        return $this->attributes['pesan_tambahan'];
    }

    public function setPesanTambahan($pesan_tambahan){
        $this->attributes['pesan_tambahan'] = $pesan_tambahan;
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