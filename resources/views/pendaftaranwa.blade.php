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
        <form id="registrationForm">
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
                        <input type="text" class="form-control" id="nohp" placeholder="Nomor telephone/whatsapp"
                            value="{{ auth()->user()->nohp }}">
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
                <button type="submit" class="btn btn-primary rounded-pill btn-lg"
                    onclick="submitForm()">Daftar</button>
            </div>
        </form>
    </div>
    @include('components.script')
    <script>
        function submitForm() {
            // Get form data
            var name = document.getElementById("name").value;
            var tanggal_lahir = document.getElementById("tanggal_lahir").value;
            var gender = document.querySelector('input[name="gender"]:checked').value;
            var alamat = document.getElementById("alamat").value;
            var asalsekolah = document.getElementById("asalsekolah").value;
            var nohp = document.getElementById("nohp").value;
            var namaOrtu = document.getElementById("namaOrtu").value;
            var pekerjaanOrtu = document.getElementById("pekerjaanOrtu").value;
            var alamatOrtu = document.getElementById("alamatOrtu").value;
            var teleponOrtu = document.getElementById("teleponOrtu").value;
            var jenjang = document.getElementById("jenjang").value;
            var program = document.getElementById("program").value;
            var kampusJurusan = document.getElementById("kampusJurusan").value;
            var kota = document.getElementById("kota").value;
            var jumlahSiswa = document.querySelector('input[name="jumlahSiswa"]:checked').value;

            // Format the message
            var whatsappMessage =
                "Halo, saya tertarik untuk mendaftar dalam program Rumah Belajar Spirit. Berikut ini detail informasi pendaftaran saya:%0A%0A" +
                "Nama : " + name + "%0A" +
                "Tanggal Lahir : " + tanggal_lahir + "%0A" +
                "Jenis Kelamin : " + gender + "%0A" +
                "Alamat : " + alamat + "%0A" +
                "Asal Sekolah/Kelas : " + asalsekolah + "%0A" +
                "Nomor HP : " + nohp + "%0A" +
                "Nama Ortu : " + namaOrtu + "%0A" +
                "Pekerjaan Ortu : " + pekerjaanOrtu + "%0A" +
                "Alamat Ortu : " + alamatOrtu + "%0A" +
                "Telepon Ortu : " + teleponOrtu + "%0A" +
                "Jenjang Pendidikan : " + jenjang + "%0A" +
                "Program : " + program + "%0A" +
                "Kampus dan Jurusan : " + kampusJurusan + "%0A" +
                "Cabang : " + kota + "%0A" +
                "Jumlah Siswa: " + jumlahSiswa;

            // Send the formatted message to the WhatsApp API
            var whatsappNumber = '6287837816887'; // Replace with your WhatsApp number
            var apiURL = 'https://api.whatsapp.com/send?phone=' + whatsappNumber + '&text=' + whatsappMessage;

            // Open the WhatsApp API URL in a new tab
            window.open(apiURL, '_blank');
        }
    </script>


</body>

</html>
