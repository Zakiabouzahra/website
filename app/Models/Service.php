<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title_en',
        'title_ar',
        'short_description_en',
        'short_description_ar',
        'content_en',
        'content_ar',
        'image',
        'image2', // Added new column
        'banner_image', // Added new column
        'sub_title_en', // Added new column
        'sub_title_ar', // Added new column
        'servives_feature1_en', // Added new column
        'servives_feature2_en', // Added new column
        'servives_feature3_en', // Added new column
        'servives_feature1_ar', // Added new column
        'servives_feature2_ar', // Added new column
        'servives_feature3_ar', // Added new column
        'category_id', // Ensure category_id is here
    ];
    // realtion with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
