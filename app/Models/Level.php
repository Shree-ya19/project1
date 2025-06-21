<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'level_id',
        'slug',
        'position',
        'status',
        'description',
    ];

    public function levels(): HasMany
    {
        return $this->hasMany(Level::class, 'level_id');
    }

    public function level(): BelongsTo
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
}
