@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center">Data Peserta</h1>

    <div class="text-end">
        <a href="/peserta/create" class="btn btn-success btn-sm">+ Tambah Data Peserta</a>
    </div>

    
    @if ($pesertas->isEmpty())
        @include('components.data-kosong')
    @else
        <div class="table-responsive mt-3">
            <table id="basic-datatables" class="table table-stripped align-middle text-dark">
                <tr class="bg-primary">
                    <th>No</th>
                    <th class="w-75">Nama</th>
                    <th>No. KTP</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Kebangsaan</th>
                    <th>Alamat</th>
                    <th>Kode Pos</th>
                    <th>No. Telepon</th>
                    <th>Kualifikasi Pendidikan</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($pesertas as $Peserta)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $Peserta->name }}</td>
                        <td>{{ $Peserta->no_ktp }}</td>
                        <td>{{ $Peserta->tempat_lahir }}</td>
                        <td>{{ $Peserta->tanggal_lahir }}</td>
                        <td>{{ $Peserta->jenis_kelamin }}</td>
                        <td>{{ $Peserta->kebangsaan }}</td>
                        <td>{{ $Peserta->alamat }}</td>
                        <td>{{ $Peserta->kode_pos }}</td>
                        <td>{{ $Peserta->no_telepon }}</td>
                        <td>{{ $Peserta->kualifikasi_pendidikan }}</td>
                        <td>
                            <a href="/peserta/{{ $Peserta->id }}/edit" class="btn btn-warning btn-sm my-3">
                                Edit
                            </a>
                            <form action="/peserta/{{ $Peserta->id }}" method="post" class="d-inline-block">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm my-3"
                                    onclick="return confirm('ingin menghapus data ini ?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endif
@endsection
