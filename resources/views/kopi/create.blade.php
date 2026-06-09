@extends('template')
@section('title', 'Tambah Kopi')
@section('konten')

    <br>
    <h2>Tambah Kopi</h2>

    @if ($errors->any())

        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif
    <br>

    <a href="{{ route('kopi.index') }}" class="btn btn-secondary mb-4">
        Kembali
    </a>

    <div class="card">

        <div class="card-header">
            Form Tambah Data Kopi
        </div>

        <div class="card-body">

            <form action="{{ route('kopi.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf
                <div class="mb-3">
                    <label class="form-label">
                        Merk Kopi
                    </label>
                    <input type="text" name="MerkKopi" id="MerkKopi" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Stok Kopi
                    </label>
                    <input type="number" name="StokKopi" id="StokKopi" class="form-control">
                </div>

                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="Tersedia" name="Tersedia" checked>
                    <label class="form-check-label" for="Tersedia">
                        Tersedia
                    </label>
                </div>

                <br>

                <input type="submit" value="Simpan Data" class="btn btn-primary">
            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let merk = document.getElementById('MerkKopi').value.trim();
            let stok = document.getElementById('StokKopi').value;

            if (merk === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Merk Kopi wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (merk.length > 30) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Merk Kopi maksimal 30 karakter",
                    icon: "error"
                });
                return false;
            }

            if (stok === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Stok Kopi wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (stok < 0) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Stok Kopi tidak boleh negatif",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
