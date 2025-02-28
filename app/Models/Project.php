<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'location',
        'image',
        'end_date',
        'project_type',
        'short_description',
        'long_description',
        'category_id', // Add category_id here
    ];

    protected $casts = [
        'end_date' => 'date',
    ];

    // realtion with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
