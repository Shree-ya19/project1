<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InterestForm extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'interests';
    protected $fillable=[
        'full_name',
        'email',
        'phone_number',
        'interest',
        'message',
    ];
}
