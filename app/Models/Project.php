<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'problem_solved',
        'solution',
        'team_members',
        'start_date',
        'end_date',
        'image_url',
        'client',
        'website',
        'technologies',
        'testimonial_quote',
        'testimonial_author',
        'stats',
    ];

    protected $casts = [
        'team_members' => 'array',
        'technologies' => 'array',
        'stats' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
