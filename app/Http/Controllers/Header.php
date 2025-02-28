<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Header extends Controller
{
    public function index()
    {
        // Fetch categories with their related services using Eloquent relationships
        $categories = Category::with('services')->get();

        return view('header', compact('categories'));
    }
}
