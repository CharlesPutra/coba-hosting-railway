<?php

namespace App\Http\Controllers;

use App\Models\TambahData;
use Illuminate\Http\Request;

class TambahDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = TambahData::all();
        return view('hasil',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);
        //cb
        TambahData::create($request->all());
        return redirect()->route('tambah.index');
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
        $edit = TambahData::findOrFAil($id);
        return view('edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = TambahData::findOrFail($id);
         $request->validate([
            'nama' => 'required',
        ]);
        $update->update($request->all());
        return redirect()->route('tambah.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = TambahData::findOrFail($id);
        dd($hapus);
        $hapus->delete();
        return redirect()->route('tambah.index');
    }
}
