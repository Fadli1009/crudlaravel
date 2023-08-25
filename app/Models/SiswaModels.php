<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaModels extends Model
{
    use HasFactory;
    protected $table = "siswa_metik";
    protected $fillable = ['nama', 'jurusan', 'kelas', 'nisn'];
}