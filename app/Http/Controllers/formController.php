<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\formsurvey;
use Illuminate\Http\Request;

class formController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = dosen::orderby('nim', 'asc')->get();
        return view('index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function managesurvey()
    {
        $managesurvey = formsurvey::all();  // Ambil semua data survey
        return view('admin.managesurvey', compact('managesurvey'));  // Kirim data ke view
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nim' => $request->nim,
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'semester' => $request->semester,
            'nama_dosen' => $request->nama_dosen,
            'matakuliah' => $request->matkul,
            'survey1' => $request->materi,
            'survey2' => $request->materi1,
            'survey3' => $request->materi2,
            'survey4' => $request->materi3,
            'survey5' => $request->materi4,
            'survey6' => $request->materi5,
            'survey7' => $request->materi6
        ];

        formsurvey::create($data);
        return redirect('/')->with('success', 'Survey Telah Dikirim!');
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
