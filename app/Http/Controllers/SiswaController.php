<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswas = Siswa::all();
        return view('siswa.index', compact('siswas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            //code...
           
        // Validate the incoming request data
        $request->validate([
            'pelapor' => 'required|string|min:5', 
            'terlapor' => 'required|string|min:5',
            'kelas' => 'required|string|min:5',
            'laporan' => 'required|string|min:5',
            'bukti' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
    
    
        $bukti = $request->file('bukti');
        $bukti->storeAs('bukti', $bukti->hashName(), 'public'); 
    
        $siswas = Siswa::create([
            'pelapor' => $request->pelapor,
            'terlapor' => $request->terlapor,
            'kelas' => $request->kelas,
            'laporan' => $request->laporan,
            'status' => 'SEDANG DALAM TINJAUAN',
            'bukti' => 'bukti/'.$bukti->hashName(),
        ]);

        
    } catch (\Throwable $th) {
        dd($th->getMessage());
    }
        return redirect()->route('siswa.index');
    }
   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa ::findOrFail($id);
        return view('siswa/show',compact('siswa'));
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

    public function selesai($id)
    {
        $pengaduan = Siswa::find($id);
        $pengaduan->status = 'SELESAI';
        $pengaduan->save();

        return redirect()->route('guru.index')->with('success', 'Data Berhasil Diubah');
    }
}
