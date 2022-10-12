@extends('layout')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4">
        <h1>Form</h1>
        <form method="post" action="/form">
            @csrf
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-2">
                <label for="tempatLahir" class="form-label">Tempat lahir</label>
                <input type="text" class="form-control" id="tempatLahir" name="tempatLahir" required>
            </div>
            <div class="mb-2">
                <label for="tanggalLahir" class="form-label">Tanggal lahir</label>
                <input type="date" class="form-control" id="tanggalLahir" name="tanggalLahir" required>

            </div>
            <div class="mb-2">
                <label for="">Jenis kelamin</label>
            </div>
            <div class="mb-2">
                <select class="form-select" name="gender" required>
                    <option selected>Pilih gender</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="">Prodi</label>
            </div>
            <div class="mb-2">
                <select class="form-select" aria-label="Daftar prodi" name="prodi" required>
                    <option selected>Pilih prodi</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                    <option value="Ilmu Komputer">Ilmu Komputer</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                </select>
            </div>
            <div class="mb-2">
                <label for="">Hobi</label>
            </div>
            <div class="mb-2">
                <div class="mb-3 form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobiMembaca" name="hobi[]" value="Membaca">
                    <label class="form-check-label" for="hobiMembaca">Membaca</label>
                </div>
                <div class="mb-3 form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobiMenulis" name="hobi[]" value="Menulis">
                    <label class="form-check-label" for="hobiMenulis">Menulis</label>
                </div>
                <div class="mb-3 form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobiTravelling" name="hobi[]"
                        value="Travelling">
                    <label class="form-check-label" for="hobiTravelling">Travelling</label>
                </div>
                <div class="mb-3 form-check form-check-inline">
                    <input type="checkbox" class="form-check-input" id="hobiShopping" name="hobi[]" value="Shopping">
                    <label class="form-check-label" for="hobiShopping">Shopping</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection