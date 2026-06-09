@extends('template')
@section('title', 'Data Kopi')
@section('konten')

    <br>
    <h2>Data Kopi</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <br>

    <a href="{{ route('kopi.create') }}" class="btn btn-primary">
        + Tambah Kopi
    </a>

    <br><br>

    <p>Cari Data Kopi :</p>

    <form action="{{ route('kopi.cari') }}" method="GET">

        <input type="text" name="cari" placeholder="Cari Merk Kopi..." class="form-control">

        <br>

        <input type="submit" value="CARI" class="btn btn-success">

    </form>

    <br>

    <table class="table table-striped table-hover">

        <tr>
            <th>Kode Kopi</th>
            <th>Merk Kopi</th>
            <th>Stok Kopi</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>

        @forelse ($kopi as $k)
            <tr>
                <td>{{ $k->KodeKopi }}</td>
                <td>{{ $k->MerkKopi }}</td>
                <td>{{ $k->StokKopi }}</td>

                <td>
                    {{ $k->Tersedia == 'Y' ? 'Ya' : 'Tidak' }}
                </td>

                <td>
                    <a href="{{ route('kopi.edit', $k->KodeKopi) }}" class="btn btn-warning">
                        Edit
                    </a>

                    <form action="{{ route('kopi.destroy', $k->KodeKopi) }}" method="POST" style="display:inline;"
                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data kopi.</td>
            </tr>
        @endforelse

    </table>

    {{ $kopi->links() }}

@endsection
