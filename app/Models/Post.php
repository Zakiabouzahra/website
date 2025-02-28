<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar', // Added Arabic title
        'image',
        'category',
        'short_description',
        'short_description_ar', // Added Arabic short description
        'content',
        'content_ar', // Added Arabic content
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
