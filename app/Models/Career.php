<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Career extends Model
{
    //
    use hasFactory;
    protected $fillable = [
        'title',
        'description',
        'location',
        'type',
    ];
}
