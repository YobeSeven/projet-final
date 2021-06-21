<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTitre extends Model
{
    use HasFactory;

    protected $fillable = [
        "titre_section",
        "titre_service",
        "titre_team",
        "titre_testimonial",
    ];
}
