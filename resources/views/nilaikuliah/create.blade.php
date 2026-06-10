@extends('template')
@section('title', 'Tambah Data')
@section('konten')

    <br>
    <h2>Tambah Data</h2>
    <br>

    <a href="{{ route('nilaikuliah.index') }}" class="btn btn-secondary mb-4">
        Kembali
    </a>

    <div class="card">

        <div class="card-header">
            Form Tambah Data Nilai Kuliah
        </div>

        <div class="card-body">

            <form action="{{ route('nilaikuliah.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                <div class="mb-3">
                    <label class="form-label">
                        NRP
                    </label>
                    <input type="text" name="NRP" id="NRP" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Nilai Angka
                    </label>
                    <input type="number" name="NilaiAngka" id="NilaiAngka" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        SKS
                    </label>
                    <input type="number" name="SKS" id="SKS" class="form-control">
                </div>
                <br>

                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
