<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class DashbourdController extends Controller
{
    public function index(){
        //count
        $countprojects = Project::all()->count();
        $countposts = Post::all()->count();
        $countclients = Client::all()->count();
        $countmessages = Contact::all()->count();
        // recent posts , messages
        $recentposts = Post::latest()->take(5)->get();
        $recentMessages = Contact::latest()->take(5)->get();

        return view('admin.dashbourd', compact('countprojects', 'countposts', 'countclients', 'countmessages', 'recentposts', 'recentMessages'));
    }
}
