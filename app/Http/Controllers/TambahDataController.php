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
        return view('welcome', compact('datas'));
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
        $request->validate(['nama']);
        TambahData::create($request->all());
        if (!$request->secure()) {
            return redirect()->secure($request->getRequestUri());
        }
        return redirect()->route('tambah.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TambahData $tambahData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TambahData $tambahData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TambahData $tambahData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TambahData $tambahData)
    {
        //
    }
}
