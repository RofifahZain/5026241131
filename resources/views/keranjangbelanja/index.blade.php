@extends('template')
@section('title', 'Data Nilai')
@section('konten')

    <br>
    <h2>Data Keranjang Belanja</h2>
    <p></p>

    <a href="{{ route('keranjangbelanja.create') }}" class="btn btn-warning">Beli</a>
    <br><br>

    <table class="table table-striped table-hover">

        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @forelse ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ $k->Harga }}</td>
                <td>{{ $k->Jumlah * $k->Harga }}</td>
                <td>
                    <form action="{{ route('keranjangbelanja.destroy', $k->ID) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">
                            Batal
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data nilai.</td>
            </tr>
        @endforelse

    </table>

@endsection
