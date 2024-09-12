<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ["nama","prodi_id"];

    public function prodi(){
        return $this->belongsTo(Fakultas::class, 'prodi_id');
    }
}
