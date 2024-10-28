<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'no_telepon',
        'pegawai_id',
    ];

    public function pegawai(){
       return $this->belongsTo(Pegawai::class);
    }
}
