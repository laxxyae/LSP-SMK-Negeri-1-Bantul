@extends('layouts.dashboard')

@section('content')
    <h1 class="text-center text-dark mb-5">Edit Data Peserta</h1>

    <form action="/peserta" method="POST" class="text-dark">
        @csrf
        <input type="hidden" name="peserta_lama" value="">
        <div class="mb-3">
            <label for="nama" class="form-label fw-bold text-dark">Nama Lengkap</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                placeholder="Masukan Nama Lengkap" value="{{ old('nama', $peserta->name) }}" autofocus required>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_ktp" class="form-label fw-bold text-dark">No KTP</label>
            <input type="text" class="form-control @error('no_ktp') is-invalid @enderror" name="no_ktp"
                id="no_ktp" placeholder="Masukan Nomor KTP" value="{{ old('no_ktp', $peserta->no_ktp) }}" required>
            @error('no_ktp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label fw-bold text-dark">Tempat Lahir</label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir"
                id="tempat_lahir" placeholder="Masukan Tempat Lahir" value="{{ old('tempat_lahir', $peserta->tempat_lahir) }}" required>
            @error('tempat_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label fw-bold text-dark">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
                id="tanggal_lahir" placeholder="Masukan Tanggal Lahir" value="{{ old('tanggal_lahir', $peserta->tanggal_lahir) }}" required>
            @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold text-dark">Jenis Kelamin</label>
            <br>
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="laki-laki"
                checked>
            <label class="form-check-label" for="laki">
                Laki-Laki
            </label>
            <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" id="perempuan">
            <label class="form-check-label" for="perempuan">
                Perempuan
            </label>
            @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kebangsaan" class="form-label fw-bold text-dark">Kebangsaan</label>
            <input type="text" class="form-control  @error('kebangsaan') is-invalid @enderror" name="kebangsaan"
                id="kebangsaan" placeholder="Masukan Kebangsaan" value="{{ old('kebangsaan', $peserta->kebangsaan) }}" required>
            @error('kebangsaan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label fw-bold text-dark">Alamat</label>
            <textarea type="text" class="form-control  @error('alamat') is-invalid @enderror" name="alamat" id="alamat"
                placeholder="Masukan Alamat" value="{{ old('alamat', $peserta->alamat) }}" rows="5" required></textarea>
            @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kode_pos" class="form-label fw-bold text-dark">Kode Pos</label>
            <input type="text" class="form-control  @error('kode_pos') is-invalid @enderror" name="kode_pos"
                id="kode_pos" placeholder="Masukan Kode Pos" value="{{ old('kode_pos', $peserta->kode_pos) }}" required>
            @error('kode_pos')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_telepon" class="form-label fw-bold text-dark">No Telepon</label>
            <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" name="no_telepon"
                id="no_telepon" placeholder="Masukan No Telepon" value="{{ old('no_telepon', $peserta->no_telepon) }}" required>
            @error('no_telepon')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="kualifikasi_pendidikan" class="form-label fw-bold text-dark">Kualifikasi Pendidikan</label>
            <input type="text" class="form-control  @error('kualifikasi_pendidikan') is-invalid @enderror"
                name="kualifikasi_pendidikan" id="kualifikasi_pendidikan"
                placeholder="Masukan Kualifikasi Pendidikan" value="{{ old('kualifikasi_pendidikan', $peserta->kualifikasi_pendidikan) }}" required>
            @error('kualifikasi_pendidikan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="text-end">
            <button type="submit" class="btn btn-primary my-3">Edit</button>
        </div>
    </form>
@endsection
