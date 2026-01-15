<?php


namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class OurFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facilities = Facility::all();
        return view('backend.facility', compact('facilities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'message' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'gallery.*' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('facilities', 'public') : null;

        $galleryPaths = [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('facilities/gallery', 'public');
            }
        }

        Facility::create([
            'name' => $request->name,
            'description' => $request->description,
            'message' => $request->message,
            'image' => $imagePath,
            'gallery' => $galleryPaths,
            'slug' => Str::slug($request->name) . '-' . Str::random(5),
        ]);

        return redirect()->back()->with('success', 'Facility added successfully!');
    }

    /**
     * Display the specified resource.
     */
   public function show($slug)
{
    $facility = Facility::where('slug', $slug)->firstOrFail();
    return view('frontend.facilities-details', compact('facility'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'message' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'gallery.*' => 'nullable|image|max:2048',
        ]);

        $facility = Facility::findOrFail($id);

        // Update main image
        if ($request->hasFile('image')) {
            if ($facility->image && Storage::disk('public')->exists($facility->image)) {
                Storage::disk('public')->delete($facility->image);
            }
            $facility->image = $request->file('image')->store('facilities', 'public');
        }

        // Update gallery
        $galleryPaths = $facility->gallery ?? [];
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                $galleryPaths[] = $file->store('facilities/gallery', 'public');
            }
        }

        $facility->update([
            'name' => $request->name,
            'description' => $request->description,
            'message' => $request->message,
            'gallery' => $galleryPaths,
            'slug' => Str::slug($request->name) . '-' . Str::random(5),
        ]);

        return redirect()->back()->with('success', 'Facility updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $facility = Facility::findOrFail($id);

        if ($facility->image && Storage::disk('public')->exists($facility->image)) {
            Storage::disk('public')->delete($facility->image);
        }

        if ($facility->gallery) {
            foreach ($facility->gallery as $path) {
                if (Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->delete($path);
                }
            }
        }

        $facility->delete();

        return redirect()->back()->with('success', 'Facility deleted successfully!');
    }
}
