<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen; // Pastikan model Dosen diimport

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Mengambil semua data dosen
        $data = Dosen::all();

        // Kirim data ke view
        return view('managedosen', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk input data baru
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nim' => 'required',
            'nama_mahasiswa' => 'required',
            'semester' => 'required|integer',
            'nama_dosen' => 'required',
            'matakuliah' => 'required',
        ]);

        // Simpan data ke database
        Dosen::create([
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'semester' => $request->semester,
            'nama_dosen' => $request->nama_dosen,
            'matakuliah' => $request->matakuliah,
        ]);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect('/managedosen')->with('success', 'Data dosen berhasil disimpan.');
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
