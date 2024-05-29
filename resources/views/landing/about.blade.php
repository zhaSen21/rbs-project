<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        body {
            font-family: 'Poppins', sans-serif;

            background: rgb(255, 255, 255);
            background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(142, 203, 255, 1) 100%);
        }

        .titleopen {
            font-weight: 800;
        }

        .hero-section {
            padding: 10px 0;
            text-align: center;
            font-weight: 500;
            font-size: 18px;
        }

        .vision-mission-section {
            padding: 40px 0;
        }

        .pricing-section {
            padding: 40px 0;
        }

        .footer {
            background-color: black;
            color: white;
            padding: 20px 0;
        }

        .footer a {
            color: white;
        }

        .footer a:hover {
            color: #ccc;
        }

        .pricing-table {
            border-collapse: separate;
            border-radius: 30px;
            /* Adjust this value for your desired roundness */
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 26, 255, 0.2);
            /* Adjust shadow as needed */
        }

        .pricing-table th,
        .pricing-table td {
            text-align: center;
            padding: 10px;
            /* Adjust padding as needed */
        }

        .vision-mission-section .card {
            border-radius: 20px;
            /* Adjust this value for your desired roundness */
            overflow: hidden;
            box-shadow: 0px 0px 20px rgba(0, 26, 255, 0.2);
            /* Adjust shadow as needed */
        }

        .vision-mission-section .card-body {
            padding: 20px;
            /* Adjust padding as needed */
        }

        .vision-mission-section .card-title {
            font-size: 20px;
            /* Adjust font size as needed */
            margin-bottom: 10px;
            /* Adjust margin as needed */
        }

        .vision-mission-section .card-text {
            font-size: 16px;
            /* Adjust font size as needed */
        }
    </style>
</head>

<body>
    @include('components.navbar')
    <div style="background-color: #428ECC; font-family: 'Poppins',sans-serif; font-weight: 500; font-size: 40px">
        <div class="container-fluid p-2">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center" style="font-weight: 700;">Tentang Kami</div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-1 mt-5">
        <div class="row justify-content-center">
            <img src="/images/v49_156.png" alt="RBS" style="width: 200px; height: auto;">
        </div>
    </div>

    <div class="container hero-section">
        <h1 class="titleopen">Rumah Belajar Spirit</h1>
        <p>Selamat datang di <strong>Rumah Belajar Spirit</strong>, tempat di mana semangat belajar menjadi nyata! Kami
            adalah sebuah rumah bimbingan belajar yang berkomitmen untuk menciptakan lingkungan belajar yang mendukung,
            inspiratif, dan membawa kesuksesan bagi setiap siswa.</p>
        <p>Dengan filosofi "Belajar Bersama, Berhasil Bahagia", kami berkomitmen untuk menjadi mitra terpercaya dalam
            perjalanan pendidikan setiap siswa kami. Mari bergabung dengan kami di Rumah Belajar Spirit dan bersama-sama
            wujudkan potensi terbaik Anda!</p>
    </div>

    <div class="container vision-mission-section">
        <h2>VISI & MISI RBS</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">1. VISI</h3>
                        <p class="card-text">Menjadi pusat bimbingan belajar terkemuka yang menghasilkan siswa-siswa
                            berprestasi, percaya diri, dan berintegritas tinggi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">2. MISI</h3>
                        <p class="card-text">1. Memberikan pendampingan pembelajaran yang efektif, inovatif, dan
                            menyenangkan. 2. Menyediakan lingkungan belajar yang kondusif, mendukung, dan inspiratif. 3.
                            Mengembangkan potensi siswa secara optimal melalui pendekatan individual. 4. Membangun
                            karakter siswa yang berintegritas dan bertanggung jawab. 5. Menjalin kerjasama yang harmonis
                            antara siswa, orang tua, dan guru.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pricing-section ">
        <h2>Biaya Bimbingan</h2>
        <h5>Per 1 Semester</h5>
        <table class="table table-bordered pricing-table ">
            <thead>
                <tr>
                    <th>Paket / Kelas</th>
                    <th>Kelompok Anak</th>
                    <th>SMP</th>
                    <th>SMA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2-4</td>
                    <td>Rp. 2.500.000</td>
                    <td>Rp. 3.500.000</td>
                    <td>Rp. 4.500.000</td>
                </tr>
                <tr>
                    <td>5-8</td>
                    <td>Rp. 2.000.000</td>
                    <td>Rp. 3.000.000</td>
                    <td>Rp. 4.000.000</td>
                </tr>
                <tr>
                    <td>9-12</td>
                    <td>Rp. 1.500.000</td>
                    <td>Rp. 2.500.000</td>
                    <td>Rp. 3.500.000</td>
                </tr>
            </tbody>
        </table>
    </div>

    @include('components.footer')

    @include('components.script')
</body>

</html>
