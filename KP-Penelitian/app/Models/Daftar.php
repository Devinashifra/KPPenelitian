<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;
    protected $fillable = ['jenisperm', 
    'filesp', 
    'jenis', 
    'namanim', 
    'idjss', 
    'nowa', 
    'emailindi', 
    'kampus', 
    'tglmul', 
    'tglsel', 
    'judul', 
    'nugas'];
}
