<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class BeyondAcademic extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'activity',
        'detail',
    ];

    
    public function images()
    {
        return $this->hasMany(ActivityImage::class, 'activity_id');
    }
}
