<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        return view('admin.services.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id', // Validate category
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'short_description_en' => 'required|string|max:255',
            'short_description_ar' => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image2
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate banner_image
            'sub_title_en' => 'nullable|string|max:255', // Validate sub_title_en
            'sub_title_ar' => 'nullable|string|max:255', // Validate sub_title_ar
            'servives_feature1_en' => 'nullable|string|max:255', // Validate servives_feature1_en
            'servives_feature2_en' => 'nullable|string|max:255', // Validate servives_feature2_en
            'servives_feature3_en' => 'nullable|string|max:255', // Validate servives_feature3_en
            'servives_feature1_ar' => 'nullable|string|max:255', // Validate servives_feature1_ar
            'servives_feature2_ar' => 'nullable|string|max:255', // Validate servives_feature2_ar
            'servives_feature3_ar' => 'nullable|string|max:255', // Validate servives_feature3_ar
        ]);

        // Handle image upload
        $path = $request->file('image')->store('images', 'public') ?? null;
        $path2 = $request->file('image2')->store('images', 'public') ?? null; // Handle image2 upload
        $bannerPath = $request->file('banner_image')->store('images', 'public') ?? null; // Handle banner_image upload

        Service::create(array_merge($validatedData, [
            'image' => $path,
            'image2' => $path2,
            'banner_image' => $bannerPath,
        ]));

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        $categories = Category::all(); // Fetch all categories
        return view('admin.services.edit', compact('service', 'categories'));
    }

    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'category_id' => 'required|exists:categories,id', // Validate category
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'short_description_en' => 'required|string|max:255',
            'short_description_ar' => 'required|string|max:255',
            'content_en' => 'required|string',
            'content_ar' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image2
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate banner_image
            'sub_title_en' => 'nullable|string|max:255', // Validate sub_title_en
            'sub_title_ar' => 'nullable|string|max:255', // Validate sub_title_ar
            'servives_feature1_en' => 'nullable|string|max:255', // Validate servives_feature1_en
            'servives_feature2_en' => 'nullable|string|max:255', // Validate servives_feature2
            'servives_feature3_en' => 'nullable|string|max:255', // Validate servives_feature3_en
            'servives_feature1_ar' => 'nullable|string|max:255', // Validate servives_feature1_ar
            'servives_feature2_ar' => 'nullable|string|max:255', // Validate servives_feature2_ar
            'servives_feature3_ar' => 'nullable|string|max:255', // Validate servives_feature3_ar
        ]);

        // Check if new images are uploaded
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $service->image = $path; // Update the image path if a new image is uploaded
        }

        if ($request->hasFile('image2')) {
            $path2 = $request->file('image2')->store('images', 'public');
            $service->image2 = $path2; // Update image2 path
        }

        if ($request->hasFile('banner_image')) {
            $bannerPath = $request->file('banner_image')->store('images', 'public');
            $service->banner_image = $bannerPath; // Update banner_image path
        }

        // Update the service with the validated data while excluding the images
        $service->update($validatedData);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
