<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //use HasFactory;
    protected $table = "mobils";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'merk', 'tahun'];

    // public function jadwal()
    // {
    //     return $this->hasMany(Jadwal::class);
    // }

    // public function penjadwalan()
    // {
    //     return $this->hasMany(Penjadwalan::class);
    // }

};

