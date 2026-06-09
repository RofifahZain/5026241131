@extends('template')
@section('title', 'Edit Kopi')
@section('konten')

    <br>
    <h2>Edit Kopi</h2>

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
            Form Edit Data Kopi
        </div>

        <div class="card-body">

            <form action="{{ route('kopi.update', $kopi->KodeKopi) }}" method="POST" onsubmit="return validasiForm()">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">
                        Kode Kopi
                    </label>

                    <input type="text" class="form-control" value="{{ $kopi->KodeKopi }}" readonly>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Merk Kopi
                    </label>

                    <input type="text" name="MerkKopi" id="MerkKopi" class="form-control" value="{{ $kopi->MerkKopi }}">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Stok Kopi
                    </label>

                    <input type="number" name="StokKopi" id="StokKopi" class="form-control" value="{{ $kopi->StokKopi }}">

                </div>

                <div class="form-check form-switch">

                    <input class="form-check-input" type="checkbox" role="switch" id="Tersedia" name="Tersedia"
                        {{ $kopi->Tersedia == 'Y' ? 'checked' : '' }}>

                    <label class="form-check-label" for="Tersedia">

                        Tersedia

                    </label>

                </div>

                <br>

                <input type="submit" value="Update Data" class="btn btn-primary">

            </form>

        </div>

    </div>

    <script>
        function validasiForm() {
            let merk = document.getElementById('MerkKopi').value.trim();
            let stok = document.getElementById('StokKopi').value;
            let tersedia = document.getElementById('Tersedia').value.trim();

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

            if (tersedia === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Status Tersedia wajib diisi (Y/N)",
                    icon: "error"
                });
                return false;
            }

            if (tersedia.length > 1) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Tersedia hanya boleh 1 karakter (Y atau N)",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
