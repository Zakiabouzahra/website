<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'price' => 'required|numeric',
            'item1' => 'nullable|string|max:255',
            'item1_ar' => 'nullable|string|max:255',
            'item2' => 'nullable|string|max:255',
            'item2_ar' => 'nullable|string|max:255',
            'item3' => 'nullable|string|max:255',
            'item3_ar' => 'nullable|string|max:255',
            'item4' => 'nullable|string|max:255',
            'item4_ar' => 'nullable|string|max:255',
        ]);

        Package::create($validatedData);

        return redirect()->route('admin.packages.index')->with('success', 'Package added successfully.');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }
    public function update(Request $request, Package $package)
    {
        $validatedData = $request->validate([
            'title_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'price' => 'required|numeric',
            'item1' => 'nullable|string|max:255',
            'item1_ar' => 'nullable|string|max:255',
            'item2' => 'nullable|string|max:255',
            'item2_ar' => 'nullable|string|max:255',
            'item3' => 'nullable|string|max:255',
            'item3_ar' => 'nullable|string|max:255',
            'item4' => 'nullable|string|max:255',
            'item4_ar' => 'nullable|string|max:255',
        ]);

        $package->update($validatedData);

        return redirect()->route('admin.packages.index')->with('success', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('admin.packages.index')->with('success', 'Package deleted successfully.');
    }
}
