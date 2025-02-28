<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.project.index', compact('projects'));
    }

    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        return view('admin.project.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'end_date' => 'required|date',
            'project_type' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'category_id' => 'required|exists:categories,id', // Validate category
        ]);

        $path = $request->file('image')->store('images', 'public') ?? null;

        Project::create(array_merge($validatedData, ['image' => $path]));

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function edit(Project $project)
    {
        $categories = Category::all(); // Fetch all categories
        return view('admin.project.edit', compact('project', 'categories'));
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'end_date' => 'required|date',
            'project_type' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string',
            'category_id' => 'required|exists:categories,id', // Validate category
        ]);

        // If a new image is uploaded, store it and update the model
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $project->image = $path;
        }

        // Update the project with the validated data
        $project->update($validatedData);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        // Delete the project
        $project->delete();

        // Redirect back to the projects list with a success message
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
