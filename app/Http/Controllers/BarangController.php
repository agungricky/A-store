<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Riwayat;
use App\Models\storage;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'berat' => 'required',
            'keterangan' => 'nullable|string|max:1000',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'storage_id' => 'required|exists:storages,id',
        ]);

        // upload foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename = mt_rand(100000, 999999) . '.' . $extension;
            $fotoPath = $file->storeAs('barang', $filename, 'public');
        }

        storage::where('id', $request->storage_id)->update([
            'user_id' => $request->user_id,
        ]);

        // simpan data
        $barang = new Barang();
        $barang->nama_barang = $request->nama_barang;
        $barang->berat = $request->berat;
        $barang->keterangan = $request->keterangan;
        $barang->storage_id = $request->storage_id;
        $barang->foto = $fotoPath;
        $barang->save();

        return redirect()->back()->with('success', 'Barang berhasil ditambahkan.');
    }

    public function ambil_barang(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'berat' => 'required',
            'keterangan' => 'nullable|string|max:1000',
        ]);

        $data_barang = barang::findOrfail($request->id_barang);

        $berat = $data_barang->berat - $request->berat;

        Riwayat::create([
            'user_id' => $request->user_id,
            'barang_id' => $request->id_barang,
            'berat' => $request->berat,
            'keterangan' => $request->keterangan,
            'storage_id' => $data_barang->storage_id
        ]);

        if ($berat == 0) {
            storage::where('id', $data_barang->storage_id)->update([
                'user_id' => null,
            ]);

            barang::where('id', $data_barang->id)->update([
                'storage_id' => null,
            ]);
        }

        barang::where('id', $request->id_barang)->update([
            'berat' => $berat,
        ]);

        return redirect()->back()->with('success', 'Barang berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(barang $barang)
    {
        //
    }
}
