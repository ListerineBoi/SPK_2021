<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class norm extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'peng', 'tang', 'lok', 'list', 'sum',
    ];
    protected $table="norm";
}
