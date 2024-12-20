<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Makul;

class MakulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Makul::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dosen = Makul::create($request->all());
        return response()->json($dosen, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Makul::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dosen = Makul::findOrFail($id);
        $dosen->update($request->all());
        return response()->json($dosen, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Makul::destroy($id);
        return response()->json(null, 204);
    }

    public function getDosensByMakul($kode_makul)
    {
        $makul = Makul::where('kode_makul', $kode_makul)->with('dosens')->first();

        if ($makul) {
        return response()->json($makul->dosens);
        }

        return response()->json(['message' => 'Mata kuliah tidak ditemukan'], 404);
    }
}