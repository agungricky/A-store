<?php

namespace App\Http\Controllers;

use App\Models\icon;
use App\Models\storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = storage::with('icon', 'user')->get();
        // return response()->json($data);
    }

    public function indexstorage()
    {
        $data = storage::with('icon', 'user','barang')->get();
        return view('admin.rak', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_rak');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
        ]);

        $firstChar = $validated['brand'][0];

        $icon = icon::where('label', $firstChar)->first();

        Storage::create([
            'brand' => $validated['brand'],
            'icon_id' => $icon->id,
            'user_id' => null,
        ]);

        return redirect()->back()->with('success', 'Rak berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(storage $storage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(storage $storage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, storage $storage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(storage $storage)
    {
        storage::where('id', $storage->id)->delete();
        return redirect()->back()->with('success', 'Data rak berhasil dihapus');
    }
}
