<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
public function index()
{
    $antrians = Antrian::all();
    return view('antrian.index', compact('antrians'));
}

public function create()
{
    return view('antrian.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'jenis_kendaraan' => 'required',
        'merek_kendaraan' => 'required',
        'jenis_servis' => 'required',
        'biaya' => 'required|numeric',
    ]);

    Antrian::create($request->all());
    return redirect()->route('antrian.index')->with('success', 'Data antrian berhasil ditambahkan.');
}

public function edit(Antrian $antrian)
{
    return view('antrian.edit', compact('antrian'));
}

public function update(Request $request, Antrian $antrian)
{
    $request->validate([
        'nama' => 'required',
        'jenis_kendaraan' => 'required',
        'merek_kendaraan' => 'required',
        'jenis_servis' => 'required',
        'biaya' => 'required|numeric',
    ]);

    $antrian->update($request->all());
    return redirect()->route('antrian.index')->with('success', 'Data antrian berhasil diperbarui.');
}

public function destroy(Antrian $antrian)
{
    $antrian->delete();
    return redirect()->route('antrian.index')->with('success', 'Data antrian berhasil dihapus.');
}

}
