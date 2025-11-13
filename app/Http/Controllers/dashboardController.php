<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataLogin = Auth::user();
        $data = User::with('storage.barang')->where('id', $dataLogin->id)->first();

        $barang = [];
        foreach ($data->storage as $key => $value) {
            $barang[] = $value->barang; 
        }

        $totalBerat = 0;
        foreach ($data->storage as $key => $value) {
            foreach ($value->barang as $nilai) {
                $totalBerat += $nilai->berat;
            }
        }

        $rakCount = 0;
        foreach ($data->storage as $key => $value) {
            $rakCount++;
        }

        $kapasitas = $rakCount * 50;
        $rakCount = $rakCount;


        $beratCount = 0;
        foreach ($data->storage as $key => $value) {
            foreach ($value->barang as $nilai) {
                $beratCount += $nilai->berat;
            }
        }

        if ($kapasitas != 0) {
            $beratCount = ($beratCount / $kapasitas) * 100;
        } else {
            $beratCount = 0;
        }

        $rak = [];
        foreach ($data->storage as $key => $value) {
            $rak[] = $value;
        }
        return view('user.dashboard', compact('data', 'totalBerat', 'kapasitas', 'rakCount', 'beratCount', 'barang'));
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
        //
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
