<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('keranjangbelanja.index', compact('keranjangbelanja'));
    }
    public function create()
    {
        return view('keranjangbelanja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah' => 'required|integer',
            'Harga' => 'required|integer',
        ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data keranjang berhasil ditambahkan.');
    }

    public function destroy($ID)
    {
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        return redirect()->route('keranjangbelanja.index')->with('success', 'Data keranjang berhasil dihapus.');
    }

}
