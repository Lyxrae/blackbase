<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuCategory;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $menus = Menu::with('category')->get();
        $categories = MenuCategory::all();
        return view('backend.menus', compact('menus', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:menu_categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        Menu::create($request->all());

        return redirect()->back()->with('success', 'Menu item added successfully!');
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
            'category_id' => 'required|exists:menu_categories,id',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->update($request->all());

        return redirect()->back()->with('success', 'Menu item updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->back()->with('success', 'Menu item deleted successfully!');
    }
}
