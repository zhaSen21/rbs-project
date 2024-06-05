<!DOCTYPE html>
<html>

<head>
    @include('components.head')
</head>

<body>

    <div class="v39_126">


        <div class="v48_155" style="padding-top: 100px">
            <div class="container hero-section">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="openingtext">Halo, selamat datang</h5>
                        <h1 class="hero-text"><strong>Berhasil bersama, belajar bahagia</strong></h1>
                        <p class="hero-subtext">Di Rumah Belajar Spirit, dapatkan bahan ajar lengkap serta fasilitas
                            lainnya. Ayo daftar sekarang!</p>
                        @guest
                            <div class="btn-container me-5">
                                <a href="{{ route('signup') }}" class="btn btn-primary rounded-pill btn-lg ">Buat Akun</a>
                                <div class="spacerbtn"></div>
                                <a href="{{ route('login') }}"
                                    class="btn btn-outline-primary rounded-pill btn-lg ">Masuk</a>
                            </div>
                        @endguest
                    </div>
                    @guest
                        <div class="col-md-6 images-section d-flex align-items-center justify-content-center">
                            <img src="./images/home1.png" alt="Stuff" class="img-fluid"
                                style="max-width: 100%; height: auto; margin-bottom: 380px; margin-left: 700px;">
                        </div>
                    @endguest
                    @auth
                        <div class="col-md-6 images-section d-flex align-items-center justify-content-center">
                            <img src="./images/home1.png" alt="Stuff" class="img-fluid"
                                style="max-width: 100%; height: auto; margin-bottom: 235px; margin-left: 700px;">
                        </div>
                    @endauth
                </div>
            </div>
        </div>

        @include('components.navbar')

        {{-- SECTION 2 --}}

        <div class="container sec2con">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="sec2open">Kenapa memilih Rumah Belajar Spirit?</h2>
                    <div class="container text-center v319_611">
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <i class="iconsec2 fa-solid fa-clipboard-list"></i>
                                <h3 class="sec2title">DISKUSI & KONSULTASI</h3>
                                <p class="sec2sub">Rumah Belajar Spirit memberikan pelayanan diskusi konsultasi bagi
                                    siswa yang membutuhkan diskusi/konsultasi terhadap materi pelajaran yang tidak
                                    ataupun kurang dipahami.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <i class="iconsec2 fa-solid fa-desktop"></i>
                                <h3 class="sec2title">TRY OUT CBT</h3>
                                <p class="sec2sub">Tryout UTBK (Ujian Tertulis Berbasis Komputer) dilakukan sesuai
                                    dengan aturan dan ketentuan yang ada secara online dengan tata tertib yang sama
                                    dengan ujian sebenarnya.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <i class="iconsec2 fa-solid fa-user-group"></i>
                                <h3 class="sec2title">TENTOR BERPENGALAMAN</h3>
                                <p class="sec2sub">Rumah Belajar Spirit memberikan fasilitas diampu oleh tentor
                                    berpengalaman untuk semua jenjang paket kelas yang tersedia.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <i class="iconsec2 fa-solid fa-chalkboard-user"></i>

                                <h3 class="sec2title">KELAS TAMBAHAN</h3>
                                <p class="sec2sub">Rumah Belajar Spirit memberikan layanan kelas tambahan mendekati
                                    PSTS, PSAS, dan USBN.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <i class="iconsec2 fa-solid fa-list-check"></i>
                                <h3 class="sec2title">MAP SOAL & KUMPULAN SOAL</h3>
                                <p class="sec2sub">Rumah Belajar Spirit memberikan fasilitas map soal beserta kumpulan
                                    soal bagi seluruh siswa.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <i class="iconsec2 fa-solid fa-book-bookmark"></i>
                                <h3 class="sec2title">PERPUSTAKAAN MINI</h3>
                                <p class="sec2sub">Rumah Belajar Spirit memberikan fasilitas perpustakaan mini yang
                                    menyediakan berbagai buku bacaan untuk menunjang kegiatan belajar mengajar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- SECTION 3 --}}

        <div class="section3bg">
            <div class="container section3con">
                <h1 class="text-center" style="padding-bottom: 50px; color:#083F7E">ALUMNI SPIRIT</h1>
                <div class="row mb-4">
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Septi Khumairatussalbiyah<br>
                            Administrasi Publik - 2023<br>
                            Universitas Diponegoro
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Ziddan Muhammadhi<br>
                            D4 Pengelolaan Arsip dan Rekaman Informasi - 2023<br>
                            Politeknik Negeri Semarang
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Muhammad Ivan Ardiansyah<br>
                            Teknik Sipil - 2023<br>
                            Universitas Sebelas Maret
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Nadya Kusuma<br>
                            Fisika - 2023<br>
                            Universitas Sebelas Maret
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Desy Seftian<br>
                            D3 Perpajakan - 2023<br>
                            Universitas Sebelas Maret
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Deqi Norma Agustina<br>
                            Teknik Industri - 2021<br>
                            Universitas Diponegoro
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Dina Halliana<br>
                            Gizi - 2020<br>
                            Universitas Diponegoro
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Laura Nuradhi S<br>
                            Biologi - 2023<br>
                            Universitas Jenderal Soedirman
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Rahma Yanuar Ayuningtyas <br>
                            Pendidikan Biologi - 2023 <br>
                            Universitas Tidar
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Intan Cahaya Rahmadiyani <br>
                            Teknik Geologi - 2020 <br>
                            Universitas Jenderal Soedirman
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Rahma Yanuar Ayuningtyas <br>
                            Pendidikan Biologi - 2023 <br>
                            Universitas Tidar
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Hanum Nur Hamadah <br>
                            Administrasi - 2022 <br>
                            Universitas Diponegoro
                        </div>
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Prasti Cesa Mediana <br>
                            D3 Administrasi Bisnis - 2023 <br>
                            Politeknik Negeri Semarang
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Syarifathunnisa Iryanti <br>
                            Biologi - 2023 <br>
                            Universitas Gajah Mada
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Josua Victory <br>
                            Mikrobiologi - 2023 <br>
                            Universitas Gajah Mada
                        </div>
                    </div>
                    <div class="col-md-3 d-flex align-items-center mb-4">
                        <i class="fa-solid fa-user fa-3x me-3 custom-icon"></i>
                        <div class="custom-text">
                            Lestari <br>
                            Sastra Prancis - 2019 <br>
                            Universitas Indonesia
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- SECTION 4 --}}
    @include('components.footer')

    <script src="https://kit.fontawesome.com/91c2fd848f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
