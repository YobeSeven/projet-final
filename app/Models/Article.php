<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "titre",
        "image",
        "article",
        "categorie_id",
        "tag_id",
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function tag(){
        return $this->belongsTo(Tag::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function commentaire(){
        return $this->hasMany(Commentaire::class);
    }
}
