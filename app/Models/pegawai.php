<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';

    protected $fillable = [
        'pegawai_nama',
        'pegawai_jabatan',
        'pegawai_umur',
        'pegawai_alamat',
    ];

    public function profile(){
        return $this->hasOne(Profile::class, 'pegawai_id');
    }

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::deleting(function ($pegawai) {
    //         $pegawai->profile()->delete(); // Hapus profil terkait
    //     });
    // }
}
