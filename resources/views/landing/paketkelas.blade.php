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

        /* Custom CSS */
        .rounded {
            border-radius: 15px;
        }

        .card-title {
            font-weight: bold;
        }

        .card-text {
            font-weight: 400;
        }

        .sec1card {
            color: white
        }

        .section-title {
            font-weight: 800;
            margin-bottom: 40px;
        }

        .icon-text {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .icon-text i {
            color: #3498db;
            margin-right: 10px;
        }

        .bg-overlay {
            background-color: rgba(255, 255, 255, 0.244);
            /* Semi-transparent background */
            backdrop-filter: blur(20px);
            /* Apply blur effect */
            padding: 60px 0;
            /* Adjust padding as needed */
            position: relative;
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <section class="container-fluid py-5 bg-overlay text-center">
        <div class="container">
            <h1 class="display-4 section-title">Program Semester</h1>
            <p class="lead" style="font-weight: 600;">Tahun Pelajaran 2023/2024</p>
            <p class="lead mb-5" style="font-weight: 300;">Persiapan Ulangan Harian, PSTS, PSAS, USBN & Persiapan seleksi
                masuk PTN Favorit</p>
            <div class="row justify-content-center mt-5">
                <!-- SD Card -->
                <div class="col-md-3">
                    <div class="card rounded bg-danger">
                        <div class="card-body">
                            <h5 class="card-title sec1card">SD</h5>
                            <p class="card-text sec1card">Kelas 4, 5, 6</p>
                        </div>
                    </div>
                </div>
                <!-- SMP Card -->
                <div class="col-md-3">
                    <div class="card rounded bg-primary">
                        <div class="card-body">
                            <h5 class="card-title sec1card">SMP</h5>
                            <p class="card-text sec1card">Kelas 7, 8, 9</p>
                        </div>
                    </div>
                </div>
                <!-- SMA Card -->
                <div class="col-md-3">
                    <div class="card rounded bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title sec1card">SMA</h5>
                            <p class="card-text sec1card">Kelas 10, 11, 12</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Second Section - Jenjang dan Mata Pelajaran -->
    <section class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center section-title">Jenjang dan Mata Pelajaran</h2>
            <div class="row mt-4">
                <!-- SD Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-danger text-white">
                            <h5 class="card-title">SD</h5>
                            <p class="card-text">
                                Kelas 4/5/6 <br>
                                Menyesuaikan kurikulum
                            </p>
                        </div>
                    </div>
                </div>
                <!-- SMP Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-primary text-white">
                            <h5 class="card-title">SMP</h5>
                            <p class="card-text">
                                Kelas 7/8/9 <br>
                                Matematika, Fisika, Bahasa Inggris
                            </p>
                        </div>
                    </div>
                </div>
                <!-- SMA IPA Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-secondary text-white">
                            <h5 class="card-title">SMA IPS</h5>
                            <p class="card-text">
                                Kelas 4/5/6 <br>
                                Matematika, Ekonomi, Sejarah, Sosiologi, Geografi, Bahasa Inggris, TPS
                            </p>
                        </div>
                    </div>
                </div>
                <!-- SMA IPS Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-secondary text-white">
                            <h5 class="card-title">SMA IPA</h5>
                            <p class="card-text">
                                Kelas 10/11/12 <br>
                                Matematika, Fisika, Kimia, Biologi, Bahasa Inggris, TPS
                            </p>
                        </div>
                    </div>
                </div>
                <!-- UTBK TPS Card -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body bg-secondary text-white">
                            <h5 class="card-title">UTBK TPS</h5>
                            <p class="card-text">
                                Potensi kognitif <br>
                                Matematika, Bahasa Indonesia, Bahasa Inggris
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Third Section - Layanan dan Fasilitas -->
    <section class="container-fluid py-5 bg-overlay">
        <div class="container">
            <h2 class="text-center section-title">Layanan dan Fasilitas</h2>
            <div class="row mt-4 justify-content-center">
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-start">
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Pertemuan 3 kali seminggu</p>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Try Out UTBK berkala</p>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Diampu oleh tentor berpengalaman</p>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Konsultasi kesulitan belajar</p>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Konsultasi jurusan kuliah</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column align-items-start">
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Kelas tambahan mendekati PSTS, PSAS, USBN</p>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Map soal dan kumpulan soal setiap pertemuan</p>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Perpustakaan mini</p>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Toilet, Kantin, Parkir, Wifi</p>
                        </div>
                        <div class="icon-text">
                            <i class="fa-solid fa-circle-check fa-lg"></i>
                            <p class="lead mb-0">Tempat ibadah</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('components.footer')
    @include('components.script')
</body>

</html>
