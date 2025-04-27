<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Calendar extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=[
    'img1',
    'img2',
    'img3',
    'img4',
    'img5',
    'img6',
    'pdf',
    ];
    public function img1():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }
    public function img2():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }
    public function img3():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }
    public function img4():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }
    public function img5():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }
    public function img6():Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url($value) : null,
            set: fn($value) => $value ? $value->store('systemSetting','public') : null,
        );

    }
    
    public function pdf(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Storage::disk('public')->url('pdfs/' . $value) : null,
            set: fn($value) => $value ? $value->store('pdfs', 'public') : null,
        );
    }
    
}
