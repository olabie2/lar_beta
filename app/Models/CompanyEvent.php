<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyEvent extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyEventFactory> */
    use HasFactory;
    protected $casts = [
        'start_time' => 'datetime',
        'end_time' => 'datetime',
    ];
    protected $fillable = [
        'title',
        'description',
        'location',
        'start_time',
        'end_time',
        'capacity',
        'price',
        'status',
        'organizer_id',
        'banner_image'
    ];
    public function applications()
    {
        return $this->hasMany(EventRegisterApplication::class);
    }

    public function hasAvailableSpots(): bool
    {
        return $this->getFilledSpotsAttribute() < $this->capacity;
    }

    public function getFilledSpotsAttribute()
    {
        return $this->applications()->count();
    }
}
