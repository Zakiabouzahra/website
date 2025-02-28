<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
    ];
    // Define the relationship
    public function projects()
    {
        return $this->hasMany(Project::class); // Assumes a 'category_id' foreign key in the 'projects' table
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
