<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $messages = Message::latest()->get();
        return view('backend.messages', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'phone'   => 'nullable|string',
            'message' => 'required|string',
        ]);

        Message::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Thank you for contacting BlackBase. We will get back to you shortly.'
        ]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
       public function destroy(Message $message) // <-- use route model binding
    {
        $message->delete();

        return redirect()->back()->with('success', 'Message deleted successfully.');
    }
}
