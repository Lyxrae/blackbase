<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
           $galleries = Gallery::latest()->get();

        // Pass them to the view
        return view('backend.gallery', compact('galleries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'files.*' => 'required|mimes:jpg,jpeg,png,gif,mp4,mov,avi|max:51200', // 50MB max
        'title' => 'nullable|string|max:255',
        'description' => 'nullable|string',
    ]);

    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $extension = $file->getClientOriginalExtension();
            $type = in_array($extension, ['mp4','mov','avi']) ? 'video' : 'image';
            $path = $file->store('gallery', 'public');

            Gallery::create([
                'title' => $request->title,
                'description' => $request->description,
                'type' => $type,
                'path' => $path,
            ]);
        }
    }

    return redirect()->back()->with('success', 'Gallery items uploaded successfully!');
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
         $gallery = Gallery::findOrFail($id);

        // Validate input
        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'files.*' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi|max:20480', // 20MB max
        ]);

        // Update title & description
        $gallery->title = $request->title;
        $gallery->description = $request->description;

        // Handle new files
        if ($request->hasFile('files')) {
            $newPaths = [];
            foreach ($request->file('files') as $file) {
                $path = $file->store('gallery', 'public');
                $newPaths[] = $path;
            }

            // Merge with existing files if any
            $existingPaths = $gallery->path ? (is_array($gallery->path) ? $gallery->path : [$gallery->path]) : [];
            $gallery->path = array_merge($existingPaths, $newPaths);
        }

        // Save updated gallery
        $gallery->save();

        return redirect()->back()->with('success', 'Gallery item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $gallery = Gallery::findOrFail($id);

        // Delete files from storage
        if ($gallery->path) {
            $paths = is_array($gallery->path) ? $gallery->path : [$gallery->path];
            foreach ($paths as $file) {
                if (Storage::disk('public')->exists($file)) {
                    Storage::disk('public')->delete($file);
                }
            }
        }

        $gallery->delete();

        return redirect()->back()->with('success', 'Gallery item deleted successfully!');
    }
}
