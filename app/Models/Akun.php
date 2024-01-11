<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Akun extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasApiTokens, Notifiable;

    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'password',
        'gambar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $table = 'akun';
    protected $primaryKey = 'id';

    public function getAuthIdentifierName(){

    }

    public function getAuthIdentifier(){

        
    }
    public function getAuthPassword(){

    }
    
    public function getRememberToken(){

    }

    public function setRememberToken($value){

    }

    public function getRememberTokenName(){
        
    }

    public function getIdAkun(){
        return $this->attributes['id'];
    }

    public function setIdAkun($idAkun){
        $this->attributes['id'] = $idAkun;
    }

    public function getNama(){
        return $this->attributes['nama'];
    }

    public function setNama($nama){
        $this->attributes['nama'] = $nama;
    }

    public function getPassword(){
        return $this->attributes['password'];
    }

    public function setPassword($password){
        $this->attributes['password'] = $password;
    }

    public function getEmail(){
        return $this->attributes['email'];
    }

    public function setEmail($email){
        $this->attributes['email'] = $email;
    }

    public function getGambar(){
        return $this->attributes['gambar'];
    }

    public function setGambar($gambar){
        $this->attributes['gambar'] = $gambar;
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