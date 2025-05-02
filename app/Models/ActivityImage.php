<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ActivityImage extends Model
{
    use HasFactory;
    protected $fillable = [
    'activity_id',
    'image',
    ];
    
    public function image(): Attribute
    {
        return Attribute::make(
            get: fn (?string $value) => $value ? Storage::disk('public')->url($value) : null,
        );
    }
    
    public function activity()
    {
        return $this->belongsTo(BeyondAcademic::class, 'activity_id');
    }
    
}
