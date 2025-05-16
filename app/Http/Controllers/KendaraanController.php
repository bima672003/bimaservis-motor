<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merek_kendaraan' => 'required|string|max:255',
            'nomor_plat_kendaraan' => 'required|string|unique:kendaraans',
            'jenis_kendaraan' => 'required|string|max:255',
            'tahun_pembuatan' => 'required|digits:4|integer',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil disimpan.');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'merek_kendaraan' => 'required|string|max:255',
            'nomor_plat_kendaraan' => 'required|string|unique:kendaraans,nomor_plat_kendaraan,' . $kendaraan->id,
            'jenis_kendaraan' => 'required|string|max:255',
            'tahun_pembuatan' => 'required|digits:4|integer',
        ]);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil diperbarui.');
    }

    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil dihapus.');
    }
}
