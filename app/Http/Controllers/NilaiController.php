<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->orderBy('ID')->get();
        return view('nilaikuliah.index', compact('nilaikuliah'));
    }
    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|max:6',
            'NilaiAngka' => 'required|integer',
            'SKS' => 'required|integer',
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        return redirect()->route('nilaikuliah.index')->with('success', 'Data nilai kuliah berhasil ditambahkan.');
    }

}
