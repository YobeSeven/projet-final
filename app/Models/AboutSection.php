<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSection extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "titre_section" , 
        "texte_premier_section",
        "texte_deuxieme_section",
        "lien"
    ];
}
