<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        body {
            background: linear-gradient(to right, #acdcff, #ffffff);
        }

        h1 {
            font-weight: bold;
        }

        .form-label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .form-check-label {
            margin-left: 1rem;
        }
    </style>

</head>

<body>
    @include('components.navbar')
    <div class="container py-5">
        <h1 class="text-center mb-4">Daftar sekarang!</h1>
        <form action="{{ route('storeData') }}" method="POST">
            @csrf
            <div class="row mb-4">
                <div class="col-md-6">
                    <h4>Data Siswa</h4>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama lengkap</label>
                        <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}"
                            placeholder="Nama lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tempat/tanggal lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tempat/tanggal lahir"
                            value="{{ auth()->user()->tanggal_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis kelamin</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="lakiLaki"
                                value="Laki-laki" {{ auth()->user()->gender === 'Laki-laki' ? 'checked' : '' }}>
                            <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="perempuan"
                                value="Perempuan" {{ auth()->user()->gender === 'Perempuan' ? 'checked' : '' }}>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="Alamat"
                            value="{{ auth()->user()->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="asalsekolah" class="form-label">Asal sekolah / Kelas</label>
                        <input type="text" class="form-control" id="asalsekolah" placeholder="Asal sekolah/kelas"
                            value="{{ auth()->user()->asalsekolah }} / {{ auth()->user()->kelas }} ">
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor telephone/whatsapp</label>
                        <input type="text" class="form-control" id="nohp"
                            placeholder="Nomor telephone/whatsapp" value="{{ auth()->user()->nohp }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Data Orangtua/Wali</h4>
                    <div class="mb-3">
                        <label for="namaOrtu" class="form-label">Nama Bapak/Ibu/Wali</label>
                        <input type="text" class="form-control" id="namaOrtu" placeholder="Nama Bapak/Ibu/Wali">
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaanOrtu" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaanOrtu" placeholder="Pekerjaan">
                    </div>
                    <div class="mb-3">
                        <label for="alamatOrtu" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamatOrtu" placeholder="Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="teleponOrtu" class="form-label">Nomor telephone/whatsapp</label>
                        <input type="text" class="form-control" id="teleponOrtu"
                            placeholder="Nomor telephone/whatsapp">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <h4>Pilihan program bimbingan</h4>
                    <div class="mb-3">
                        <label for="jenjang" class="form-label">Jenjang Pendidikan</label>
                        <select class="form-select" id="jenjang" placeholder="Jenjang">
                            <option selected>SD</option>
                            <option selected>SMP</option>
                            <option selected>SMA</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="program" class="form-label">Pilih program</label>
                        <select class="form-select" id="program">
                            <option selected>Program SBMPTN</option>
                            <option selected>Program Reguler Semester</option>
                            <option selected>Program Reguler Paket</option>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kampusJurusan" class="form-label">Kampus dan jurusan</label>
                        <input type="text" class="form-control" id="kampusJurusan"
                            placeholder="Kampus dan jurusan impian">
                    </div>
                    <div class="mb-3">
                        <a href="/about" class="text-decoration-none">Mau cek perkiraan biaya? klik disini!</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Cabang RBS</h4>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Pilih Cabang</label>
                        <select class="form-select" id="kota">
                            <option selected>Kembangsawit, Kec. Ambal, Kabupaten Kebumen, Jawa Tengah 54392
                            </option>
                            <option selected>Jl. Masjid Baitussalam No. 7 Desa Depokrejo RT 02/01 Kebumen
                            </option>
                            <option selected>JL. Deresan 2 Caturtunggal, Depok. Sleman</option>
                            <!-- Options here -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah siswa per kelompok</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jumlahSiswa" id="satuAnak"
                                value="1">
                            <label class="form-check-label" for="satuAnak">1 anak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jumlahSiswa" id="duaAnak"
                                value="2">
                            <label class="form-check-label" for="duaAnak">2 anak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jumlahSiswa" id="tigaEnamAnak"
                                value="3-6">
                            <label class="form-check-label" for="tigaEnamAnak">3-6 anak</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jumlahSiswa"
                                id="tujuhEmpatBelasAnak" value="7-14">
                            <label class="form-check-label" for="tujuhEmpatBelasAnak">7-14 anak</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary rounded-pill btn-lg">Daftar</button>
            </div>
        </form>
    </div>
    @include('components.script')

</body>

</html>
