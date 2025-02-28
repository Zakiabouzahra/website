<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'content' => 'required|string',
            'title_ar' => 'nullable|string|max:255', // Validate Arabic title
            'short_description_ar' => 'nullable|string|max:255', // Validate Arabic short description
            'content_ar' => 'nullable|string', // Validate Arabic content
        ]);

        $path = $request->file('image')->store('images', 'public') ?? null;

        Post::create(array_merge($validatedData, ['image' => $path]));

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    public function edit(Post $post)
    {
        return view('admin.post.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'content' => 'required|string',
            'title_ar' => 'nullable|string|max:255', // Validate Arabic title
            'short_description_ar' => 'nullable|string|max:255', // Validate Arabic short description
            'content_ar' => 'nullable|string', // Validate Arabic content
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $post->image = $path; // Update image path if a new image is uploaded
        }

        $post->update($validatedData);

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }
}
