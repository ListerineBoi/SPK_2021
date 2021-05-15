<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'ktp', 'alamat', 'penghasilan', 'tanggungan' ,'lokasi', 'listrik','jns_brg','kerja',
    ];
    protected $table="data";
}
