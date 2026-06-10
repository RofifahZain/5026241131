@extends('template')
@section('title', 'Data Nilai')
@section('konten')

    <br>
    <h2>Data Nilai Kuliah</h2>

    <br>

    <a href="{{ route('nilaikuliah.create') }}" class="btn btn-primary">Tambah Data</a>
    <br><br>

    <table class="table table-striped table-hover">

        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>

        @forelse ($nilaikuliah as $k)
            <tr>
                <td>{{ $k->ID }}</td>
                <td>{{ $k->NRP }}</td>
                <td>{{ $k->NilaiAngka }}</td>
                <td>{{ $k->SKS }}</td>
                <td>
                    @if ($k->NilaiAngka <= 40)
                        D
                    @elseif ($k->NilaiAngka <= 60)
                        C
                    @elseif ($k->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{ $k->SKS * $k->NilaiAngka }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada data nilai.</td>
            </tr>
        @endforelse

    </table>

@endsection
