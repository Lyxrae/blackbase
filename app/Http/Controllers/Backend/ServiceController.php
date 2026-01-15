<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $services = Service::latest()->get();
        return view('backend.service',compact('services'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
        'name' => 'required',
        'description' => 'nullable',
        'message' => 'nullable',
        'image' => 'nullable|image',
        'gallery.*' => 'nullable|image'
    ]);

    // Main image
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('services', 'public');
    }

    // Gallery images
    if ($request->hasFile('gallery')) {
        $paths = [];
        foreach ($request->file('gallery') as $img) {
            $paths[] = $img->store('services/gallery', 'public');
        }
        $data['gallery'] = $paths;
    }

    Service::create($data);

    return back()->with('success', 'Service created!');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
          $service = Service::where('slug', $slug)->firstOrFail();
          return view('frontend.service-detail', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $service = Service::findOrFail($id);

    $data = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'message' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp'
    ]);

    /* --------------------------
        UPDATE MAIN IMAGE
    -------------------------- */
    if ($request->hasFile('image')) {

        // Delete old image
        if ($service->image && Storage::disk('public')->exists($service->image)) {
            Storage::disk('public')->delete($service->image);
        }

        // Store new main image inside: /public/services
        $data['image'] = $request->file('image')->store('services', 'public');
    }

    /* --------------------------
        UPDATE GALLERY IMAGES
    -------------------------- */
    if ($request->hasFile('gallery')) {

        // Delete old gallery files
        if (is_array($service->gallery)) {
            foreach ($service->gallery as $img) {
                if (Storage::disk('public')->exists($img)) {
                    Storage::disk('public')->delete($img);
                }
            }
        }

        // Upload new gallery files
        $gallery = [];
        foreach ($request->file('gallery') as $file) {
            $gallery[] = $file->store('services/gallery', 'public');
        }

        $data['gallery'] = $gallery;
    }

    // Protect slug (do not allow editing)
    unset($data['slug']);

    // Update DB
    $service->update($data);

    return back()->with('success', 'Service updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $service = Service::findOrFail($id);

    // Delete main image
    if ($service->image && Storage::disk('public')->exists($service->image)) {
        Storage::disk('public')->delete($service->image);
    }

    // Delete gallery images
    if (is_array($service->gallery)) {
        foreach ($service->gallery as $img) {
            if (Storage::disk('public')->exists($img)) {
                Storage::disk('public')->delete($img);
            }
        }
    }

    // Delete database row
    $service->delete();

    return back()->with('success', 'Service deleted successfully.');
    }
}
