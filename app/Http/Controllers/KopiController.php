<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KopiController extends Controller
{
    // Menampilkan data kopi + pagination
    public function index()
    {
        $kopi = DB::table('kopi')
            ->orderBy('KodeKopi')
            ->paginate(10);

        return view('kopi.index', compact('kopi'));
    }

    // Menampilkan form tambah data
    public function create()
    {
        return view('kopi.create');
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'MerkKopi' => 'required|string|max:30',
            'StokKopi' => 'required|integer|min:0',
        ]);

        DB::table('kopi')->insert([
            'MerkKopi' => $request->MerkKopi,
            'StokKopi' => $request->StokKopi,
            'Tersedia' => $request->has('Tersedia') ? 'Y' : 'T',
        ]);

        return redirect()
            ->route('kopi.index')
            ->with('success', 'Data kopi berhasil ditambahkan.');
    }

    // Menampilkan form edit
    public function edit($KodeKopi)
    {
        $kopi = DB::table('kopi')
            ->where('KodeKopi', $KodeKopi)
            ->first();

        if (!$kopi) {
            abort(404);
        }

        return view('kopi.edit', compact('kopi'));
    }

    // Update data
    public function update(Request $request, $KodeKopi)
    {
        $request->validate([
            'MerkKopi' => 'required|string|max:30',
            'StokKopi' => 'required|integer|min:0',
        ]);

        DB::table('kopi')
            ->where('KodeKopi', $KodeKopi)
            ->update([
                'MerkKopi' => $request->MerkKopi,
                'StokKopi' => $request->StokKopi,
                'Tersedia' => $request->has('Tersedia') ? 'Y' : 'T',
            ]);

        return redirect()
            ->route('kopi.index')
            ->with('success', 'Data kopi berhasil diubah.');
    }

    // Menghapus data
    public function destroy($KodeKopi)
    {
        DB::table('kopi')
            ->where('KodeKopi', $KodeKopi)
            ->delete();

        return redirect()
            ->route('kopi.index')
            ->with('success', 'Data kopi berhasil dihapus.');
    }

    // Fitur pencarian
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $kopi = DB::table('kopi')
            ->where('MerkKopi', 'like', "%" . $cari . "%")
            ->paginate(10);

        return view('kopi.index', compact('kopi'));
    }
}
