<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataReservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'guest_name' => 'required|string|max:255',
            'guest_email' => 'required|string|email|max:255',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date',
            'room_type' => 'required|string',
        ]);

        $reservation = DataReservation::create([
            'guest_name' => $request->guest_name,
            'guest_email' => $request->guest_email,
            'check_in_date' => $request->check_in_date,
            'check_out_date' => $request->check_out_date,
            'room_type' => $request->room_type,
            'status' => 'belum di konfirmasi',
        ]);

        return redirect()->back()->with('success', 'Reservasi berhasil dibuat.')->with('lastReservation', $reservation);
    }

    public function index()
    {
        $totalReservations = DataReservation::count();
        $lastReservation = DataReservation::latest()->first();
        $lastReservationId = $lastReservation ? $lastReservation->id : 0;

        return view('resep.index', compact('totalReservations', 'lastReservationId'));
    }

    public function order()
    {
        $reservations = DataReservation::all();
        return view('resep.order', compact('reservations'));
    }

    public function update(Request $request, $id)
    {
        $reservation = DataReservation::findOrFail($id);
        $reservation->update(['status' => 'sudah di konfirmasi']);

        return redirect()->back()->with('success', 'Reservasi berhasil dikonfirmasi.');
    }
}