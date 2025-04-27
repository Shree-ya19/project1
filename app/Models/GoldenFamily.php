<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoldenFamily extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'golden_abc_members';/*yo lekhny jarurixa. Laravel will assume that the table name is golden_families because your model is named GoldenFamily.*/
    protected $fillable=[
      'image',
      'name',
      'role',
      'description'
    ];
}
