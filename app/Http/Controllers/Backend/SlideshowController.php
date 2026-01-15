<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slideshow;
use Illuminate\Support\Facades\Storage;

class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slideshows = Slideshow::latest()->get();
        return view('backend.slideshow',compact('slideshows'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('slideshows', 'public'); // saves in storage/app/public/slideshows
        }

        Slideshow::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Slideshow created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $slideshow = Slideshow::findOrFail($id);
        $slideshow->name = $request->name;
        $slideshow->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($slideshow->image && Storage::disk('public')->exists($slideshow->image)) {
                Storage::disk('public')->delete($slideshow->image);
            }

            // Store new image
            $path = $request->file('image')->store('slideshows', 'public');
            $slideshow->image = $path;
        }

        $slideshow->save();

        return redirect()->back()->with('success', 'Slideshow updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $slideshow = Slideshow::findOrFail($id);

        // Delete image if exists
        if ($slideshow->image && Storage::disk('public')->exists($slideshow->image)) {
            Storage::disk('public')->delete($slideshow->image);
        }

        $slideshow->delete();

        return redirect()->back()->with('success', 'Slideshow deleted successfully!');
    }
}
