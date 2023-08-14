<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $fillable = ['jenisperm', 
    'jenis', 
    'filelap',
    'ttddpl', 
    'linkdrive', 
    'presentasi', 
    'nilai'];
}
