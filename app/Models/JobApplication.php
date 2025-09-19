<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    //
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
       protected $fillable = [
        'career_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'resume_path',
        'cover_letter',
    ];
}
