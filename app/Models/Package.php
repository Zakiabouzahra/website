<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'price',
        'item1',
        'item1_ar',
        'item2',
        'item2_ar',
        'item3',
        'item3_ar',
        'item4',
        'item4_ar',
    ];
}
