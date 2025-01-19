<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = dosen::orderby('nim', 'asc')->get();

        // Kirim data ke view
        return view('admin.managedosen')->with('dosen', $dosen);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk input data baru
        return view('managedosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required',
            'nama_dosen' => 'required',
            'matakuliah' => 'required',
        ]);

        // Simpan data ke database
        dosen::create([
            'nim' => $request->nim,
            'nama_dosen' => $request->nama_dosen,
            'matakuliah' => $request->matakuliah,
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect('managedosen')->with('success', 'Data dosen berhasil disimpan.');
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
