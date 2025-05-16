<?php

namespace App\Http\Controllers;

use App\Models\PekerjaanServis;
use App\Models\Antrian;
use Illuminate\Http\Request;

class PekerjaanServisController extends Controller
{
    public function index()
    {
        $pekerjaans = PekerjaanServis::all();
        return view('pekerjaan_servis.index', compact('pekerjaans'));
    }

    public function create()
    {
        $antrians = Antrian::all();
        return view('pekerjaan_servis.create', compact('antrians'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'antrian_id' => 'required|exists:antrians,id',
            'deskripsi_pekerjaan' => 'required|string',
            'biaya_pekerjaan' => 'required|numeric',
        ]);

        PekerjaanServis::create($request->all());
        return redirect()->route('pekerjaan_servis.index')->with('success', 'Pekerjaan berhasil ditambahkan.');
    }

    public function edit(PekerjaanServis $pekerjaan_servis)
    {
        $antrians = Antrian::all();
        return view('pekerjaan_servis.edit', compact('pekerjaan_servis', 'antrians'));
    }

    public function update(Request $request, PekerjaanServis $pekerjaan_servis)
    {
        $request->validate([
            'antrian_id' => 'required|exists:antrians,id',
            'deskripsi_pekerjaan' => 'required|string',
            'biaya_pekerjaan' => 'required|numeric',
        ]);

        $pekerjaan_servis->update($request->all());
        return redirect()->route('pekerjaan_servis.index')->with('success', 'Pekerjaan berhasil diperbarui.');
    }

    public function destroy(PekerjaanServis $pekerjaan_servis)
    {
        $pekerjaan_servis->delete();
        return redirect()->route('pekerjaan_servis.index')->with('success', 'Pekerjaan berhasil dihapus.');
    }
}
