<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Admission extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=
    [
        'explanation',
        'requirements',
        'process',
    ];
}
