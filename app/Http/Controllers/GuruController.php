<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = Siswa::all();
        return view('guru.index', compact('gurus'));
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

     
//     public function edit(string $id)
//     {
//         $guru = Siswa::findOrFail($id);
//         return view('guru/edit', compact('guru'));
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, $id)
// {
//     try {
//          // Validate the incoming request data
//     $request->validate([
//         'status' => 'required|string|min:5',
//     ]);

//     // Find the siswa by ID
//     $siswa = Siswa::findOrFail($id);

//     // Update siswa details
//     $siswa->status = $request->status;

//     // Save the updated siswa
//     $siswa->save();

//     // Redirect back to the index with a success message
//     return redirect()->route('guru.index')->with(['success' => 'Produk berhasil diperbarui!']);
//     } catch (\Throwable $th) {
//         dd($th->getMessage());
//     }
   
// }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
