<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Service;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $categories = Category::with('services')->get();
        $recentPosts = Post::inRandomOrder()->limit(3)->get();
        $query = $request->input('query');

        // Search posts
        $posts = Post::where('title', 'LIKE', "%{$query}%")
            ->orWhere('title_ar', 'LIKE', "%{$query}%")
            ->get();

        // Search services
        $services = Service::where('title_en', 'LIKE', "%{$query}%")
            ->orWhere('title_ar', 'LIKE', "%{$query}%")
            ->get();

        return view('search-results', compact('posts', 'services' , 'categories' , 'recentPosts'));
    }
}
