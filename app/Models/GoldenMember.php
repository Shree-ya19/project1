<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class GoldenMember extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
        'name',
        'role',
        'description',
        'image',
    ];
    public function image():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('goldenfamily','public') : null,
        );

    }
}
