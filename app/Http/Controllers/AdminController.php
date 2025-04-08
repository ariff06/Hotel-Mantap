<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Room;
use App\Models\Facility;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Proses untuk menambakan user baru

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'role' => 'required|string',
        // ]);

        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'role' => $request->role,
        // ]);

        // return redirect()->route('admin.index')->with('success', 'User berhasil ditambahkan.');
    }

    public function rooms()
    {
        $rooms = Room::all();
        return view('admin.rooms', compact('rooms'));
    }

    public function storeRoom(Request $request)
    {
        $request->validate([
            'room_type' => 'required|string|max:255',
            'floor' => 'required|integer',
            'total_rooms' => 'required|integer',
        ]);

         // Periksa apakah room_type sudah ada di database
         if (Room::where('room_type', $request->room_type)->exists()) {
            return redirect()->route('admin.rooms')->with('error', 'Tipe kamar tersebut sudah ada!');
        }

        Room::create([
            'room_type' => $request->room_type,
            'floor' => $request->floor,
            'total_rooms' => $request->total_rooms,
        ]);

        return redirect()->route('admin.rooms')->with('success', 'Room berhasil ditambahkan.');
    }

    public function editRoom($id) // Ganti $update_room menjadi $id
    {
        $room = DB::table('rooms')->where('id', $id)->first(); // Gunakan $id
        return response()->json($room);
    }

    public function updateRoom(Request $request, $id) // Ganti $update_room menjadi $id
    {
        $request->validate([
            'room_type' => 'required|string|max:255',
            'floor' => 'required|integer',
            'total_rooms' => 'required|integer',
        ]);

        DB::table('rooms')->where('id', $id)->update([ // Gunakan $id di sini juga
            'room_type' => $request->room_type,
            'floor' => $request->floor,
            'total_rooms' => $request->total_rooms,
            'updated_at' => now(),
        ]);

    return redirect()->back()->with('success', 'Room updated successfully!');
}
    public function destroyRoom($id)
    {
        $room = Room::findOrFail($id);
        $room->delete();

        return redirect()->route('admin.rooms')->with('success', 'Room berhasil dihapus.');
    }



    public function facilities()
{
    $facilities = Facility::all();
    return view('admin.facilitas', compact('facilities'));
}

public function storeFacility(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'floor' => 'required|string|max:255',
        'operating_hours' => 'required|string|max:255',
    ]);

    // Periksa apakah fasilitas dengan nama yang sama sudah ada di database
    if (Facility::where('name', $request->name)->exists()) {
        return redirect()->route('admin.facilitas')->with('error', 'Fasilitas dengan nama tersebut sudah ada!');
    }

    Facility::create([
        'name' => $request->name,
        'floor' => $request->floor,
        'operating_hours' => $request->operating_hours,
    ]);

    return redirect()->route('admin.facilitas')->with('success', 'Fasilitas berhasil ditambahkan.');
}

public function editFacility($id)
{
    $facility = Facility::findOrFail($id);
    return response()->json($facility); // Mengembalikan data dalam format JSON
}

public function updateFacility(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'floor' => 'required|string|max:255',
        'operating_hours' => 'required|string|max:255',
    ]);

    $facility = Facility::findOrFail($id);
    $facility->name = $request->name;
    $facility->floor = $request->floor;
    $facility->operating_hours = $request->operating_hours;
    $facility->save();

    return redirect()->route('admin.facilitas')->with('success', 'Fasilitas berhasil diperbarui.');
}

public function destroyFacility($id)
{
    $facility = Facility::findOrFail($id);
    $facility->delete();

    return redirect()->route('admin.facilitas')->with('success', 'Fasilitas berhasil dihapus.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
