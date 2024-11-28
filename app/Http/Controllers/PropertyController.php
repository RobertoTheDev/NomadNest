<?php

namespace App\Http\Controllers;
use App\Models\Property;

use Illuminate\Http\Request;


class PropertyController extends Controller
{
    /**
     * @return
     */
  public function create()
  {
    return view('properties.create');
  }
  /**
   * @param
   * @return
   */

  public function index()
  {
    $properties = Property::with('user')->get();
            return view('properties.index', compact('properties'));
  }

  public function show($id)
  {
    $property = Property::with('user')->findOrFail($id);
            return view('properties.show', compact('property'));
  }

  public function store(Request $request)
  {
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'location' => 'required|string',
        'available_from' => 'required|date',
        'available_until' => 'required|date',
        'amenities' => 'nullable|array',
        'status' => 'required|in:available,booked,not_available',
    ]);

    Property::create([
        'user_id' => auth()->id(), 
        'title' => $validated['title'],
        'description' => $validated['description'],
        'price' => $validated['price'],
        'location' => $validated['location'],
        'available_from' => $validated['available_from'],
        'available_until' => $validated['available_until'],
        'amenities' => json_encode($validated['amenities']),
        'status' => $validated['status'],
    ]);

    return redirect()->route('properties.index');

  }
}
