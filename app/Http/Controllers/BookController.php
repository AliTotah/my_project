<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

use App\Models\Bookinging;

class BookController extends Controller
{
    public function index()
    {
        $Bookingings = Booking::all(); // READ
        return view('Bookings.index', compact('Bookings'));
    }

    public function create()
    {
        return view('Bookings.create'); // FORM لإضافة كتاب
    }

    public function store(Request $request)
    {
        // CREATE
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
        ]);

        Booking::create($request->all());

        return redirect()->route('Bookings.index')->with('success', 'Booking created successfully.');
    }

    public function show(Booking $Booking)
    {
        return view('Bookings.show', compact('Booking')); // عرض كتاب واحد
    }

    public function edit(Booking $Booking)
    {
        return view('Bookings.edit', compact('Booking')); // FORM تعديل
    }

    public function update(Request $request, Booking $Booking)
    {
        // UPDATE
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
        ]);

        $Booking->update($request->all());

        return redirect()->route('Bookings.index')->with('success', 'Booking updated successfully.');
    }

    public function destroy(Booking $Booking)
    {
        // DELETE
        $Booking->delete();

        return redirect()->route('Bookings.index')->with('success', 'Booking deleted successfully.');
    }
}
