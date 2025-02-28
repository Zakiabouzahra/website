<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Package;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        $categories = Category::with('projects')->get();
        $categories = Category::all();
        $services = Service::inRandomOrder()->limit(8)->get();
        $projects = Project::inRandomOrder()->limit(4)->get();
        $clients = Client::all();
        $packages = Package::inRandomOrder()->limit(3)->get();
        $posts = Post::latest()->limit(3)->get();
        return view('home' , ['services' => $services , 'projects' => $projects , 'categories' => $categories , 'clients' => $clients , 'packages' => $packages , 'posts' => $posts]);
    }
    public function storeContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'services' => 'nullable|string', // Optional services field
            'message' => 'nullable|string', // Optional message field
        ]);

        Contact::create($validatedData);

        return redirect()->route('home')->with('success', 'Message sent successfully.');
    }

    public function about()
    {
        // Fetch categories with their related services for the about page
        $categories = Category::with('services')->get();

        return view('about', compact('categories')); // Make sure to pass categories to the about view
    }

    public function contact()
    {
        $categories = Category::with('services')->get();
        return view('contact' , ['categories' => $categories]);
    }

    public function services()
    {
        $categories = Category::with('services')->get();
        $services = Service::all();
        return view('services', ['services' => $services , 'categories' => $categories]);
    }
    public function serviceDetails($locale, $id)
    {
        app()->setLocale($locale);
        $categories = Category::with('services')->get();
        $service = Service::findOrFail($id);
        $services = Service::all();
        return view('servicesDetails', ['service' => $service , 'categories' => $categories , 'services' => $services]);
    }

    public function blog()
    {
        $posts = Post::all(); // Fetch all blog posts
        $recentPosts = Post::inRandomOrder()->limit(3)->get();
        $categories = Category::all();
        return view('blog', [ 'posts' => $posts , 'recentPosts' => $recentPosts , 'categories' => $categories]);
    }

    public function showPost($locale , $id)
    {
        app()->setLocale($locale);
        $categories = Category::with('services')->get();
        $posts = Post::findOrFail($id);
        $recentPosts = Post::inRandomOrder()->limit(3)->get();
        return view('blogDetails', ['posts' => $posts , 'categories' => $categories , 'recentPosts' => $recentPosts]);
    }
    // media and projects
    public function media()
    {
        $packages = Package::all();
        $categories = Category::with('services')->get();
        $clients = Client::all();
        return view('media' , ['packages' => $packages , 'clients' => $clients , 'categories' => $categories]);
    }
    // projects
    public function projects()
    {
        $projects = Project::all();
        $categories = Category::with('services')->get();
        return view('projects' , ['projects' => $projects , 'categories' => $categories]);
    }
}
