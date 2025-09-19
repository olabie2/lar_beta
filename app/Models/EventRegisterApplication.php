<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventRegisterApplication extends Model
{
    /** @use HasFactory<\Database\Factories\EventRegisterApplicationFactory> */
    use HasFactory;
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'company_event_id',
    ];
    public function event()
    {
        return $this->belongsTo(CompanyEvent::class);
    }
}
