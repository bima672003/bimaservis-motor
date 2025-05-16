<?php

namespace App\Http\Controllers;

use App\Models\TransaksiServis;
use App\Models\Antrian;
use Illuminate\Http\Request;

class TransaksiServisController extends Controller
{
    public function index()
    {
        $transaksi = TransaksiServis::all();
        return view('transaksi_servis.index', ['transaksis' => $transaksi]);
    }

    public function create()
    {
        $antrians = Antrian::all();
        return view('transaksi_servis.create', compact('antrians'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'antrian_id' => 'required|exists:antrians,id',
            'total_biaya' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
            'tanggal_pembayaran' => 'required|date',
        ]);

        TransaksiServis::create($request->all());
        return redirect()->route('transaksi_servis.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function edit(TransaksiServis $transaksi_servis)
    {
        $antrians = Antrian::all();
        return view('transaksi_servis.edit', compact('transaksi_servis', 'antrians'));
    }

    public function update(Request $request, TransaksiServis $transaksi_servis)
    {
        $request->validate([
            'antrian_id' => 'required|exists:antrians,id',
            'total_biaya' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
            'tanggal_pembayaran' => 'required|date',
        ]);

        $transaksi_servis->update($request->all());
        return redirect()->route('transaksi_servis.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    public function destroy(TransaksiServis $transaksi_servis)
    {
        $transaksi_servis->delete();
        return redirect()->route('transaksi_servis.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}
