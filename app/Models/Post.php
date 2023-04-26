<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image_url',
        'is_published',
        'category_id',
        'user_id',
        'published_at'
    ];

    // relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class);
    }

    // Relacion uo a muchos de posts-categorias inversa 

    public function category(){
        return $this->belongsTo(Category::class);
    }

    // Relacion muchos a muchos con tag
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

}
