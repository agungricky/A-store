<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\Riwayat;
use App\Models\storage;
use App\Models\User;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userConunt = User::where('role', 'user')->count();
        $user = User::with('storage.barang')->where('role', 'user')->get();
        return view('admin.dashboard', compact('userConunt', 'user'));
    }

    public function indexUser()
    {
        $userConunt = User::where('role', 'user')->count();
        $user = User::with('storage.barang')->where('role', 'user')->orderBy('id', 'desc')->get();
        return view('admin.user', compact('userConunt', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_user');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'ktp' => ['required', 'numeric', 'digits_between:10,20', 'unique:users,ktp'],
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'jk' => ['required', 'in:L,P'],
            'no_telp' => ['required', 'string', 'max:15'],
            'alamat' => ['required', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'tgl_lahir' => ['required', 'date', 'before:today'],
            'username' => ['required', 'string', 'max:50', 'unique:users,username'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['required', 'in:admin,user'],
        ]);

        // Simpan data user tanpa foto dulu
        $user = new \App\Models\User();
        $user->ktp = $request->ktp;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->jk = $request->jk;
        $user->no_telp = $request->no_telp;
        $user->alamat = $request->alamat;
        $user->tgl_lahir = $request->tgl_lahir;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->pswd = $request->password;
        $user->role = $request->role;
        $user->save();

        // Upload foto setelah ID tersedia
        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileName = 'user_' . $user->id . '.' . $extension;

            // Simpan ke storage/public/users
            $path = $request->file('photo')->storeAs('users', $fileName, 'public');

            // Update kolom photo
            $user->photo = $path;
            $user->save();
        }

        return redirect()->route('user.indexuser')->with('success', 'User baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::with('storage.barang')->where('id', $id)->first();
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

        $storageList = storage::where('user_id', null)->get();

        $riwayat = Riwayat::with('barang.storage', 'storage')->where('user_id', $data->id)->get();
        return view('admin.detail_user', compact('data', 'totalBerat', 'rakCount', 'kapasitas', 'beratCount', 'rak', 'storageList', 'riwayat'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.edit_user');
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
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', 'User berhasil dihapus.');
    }

    public function downloadQrCode($id)
    {
        $user = User::findOrFail($id);

        // Data yang mau dimasukkan ke QR
        $data = [
            'id' => $user->id,
            'username' => $user->username,
            'password' => $user->pswd,
        ];

        $result = Builder::create()
            ->writer(new PngWriter())
            ->data(json_encode($data))
            ->size(300)
            ->margin(10)
            ->build();

        // Langsung kirim file untuk di-download
        return Response::make($result->getString(), 200, [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'attachment; filename="qrcode_user_' . $user->id . '.png"',
        ]);
    }
}
