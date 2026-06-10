@extends('template')
@section('title', 'Tambah Data')
@section('konten')

    <br>
    <h2>Tambah Keranjang Belanja</h2>
    <br>

    <a href="{{ route('keranjangbelanja.index') }}" class="btn btn-secondary mb-4">
        Kembali
    </a>

    <div class="card">

        <div class="card-header">
            Form Tambah Keranjang Belanja
        </div>

        <div class="card-body">

            <form action="{{ route('keranjangbelanja.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                <div class="mb-3">
                    <label class="form-label">
                        Kode Barang
                    </label>
                    <input type="text" name="KodeBarang" id="KodeBarang" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Jumlah Pembelian
                    </label>
                    <input type="text" name="Jumlah" id="Jumlah" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Harga per Item
                    </label>
                    <input type="text" name="Harga" id="Harga" class="form-control">
                </div>
                <br>

                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection
