<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a href="#"><img class="mx-md-2" src="/images/school_5569954.png" alt="" width="55"
                    height="45">
                <a class="navbar-brand fw-bold">Sekolah Rakyat<br>
                    <h6 class="fw-lighter">SMP / SMK / SMA</h6>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav px-5 mx-md-5">
                        <li class="nav-item">
                            <a class="nav-link mx-md-2" href="#">Beranda</a>
                        </li>
                        <li class="nav-item dropdown mx-md-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-md-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Akademik
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-md-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Kesiswaan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-md-2">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Berita
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a class="nav-link" href="#">Galeri</a>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                    <a class="position-absolute bi bi-search active end-0 p-5"></a>
                </div>
        </div>
    </nav>

    {{-- Carousel --}}
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/goodrich-kingrey-nGlQGJZ-9k8-unsplash.jpg" class="d-block w-100" alt="..."
                    height="300">
                <div class="position-absolute bottom-0 m-3 text-white p-2" style="background-color: grey">
                    <h5>Selamat Datang di Website Sekolah</h5>
                    <p>Bersama kita wujudkan generasi yang cerdas, berakhlak dan berprestasi</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/priscilla-du-preez-ggeZ9oyI-PE-unsplash.jpg" class="d-block w-100" alt="..."
                    height="300">
                <div class="position-absolute bottom-0 m-3 text-white p-2" style="background-color: grey">
                    <h5>Selamat Datang di Website Sekolah</h5>
                    <p>Bersama kita wujudkan generasi yang cerdas, berakhlak dan berprestasi</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/vitaly-gariev-vyuiyIyboc0-unsplash.jpg" class="d-block w-100" alt="..."
                    height="300">
                <div class="position-absolute bottom-0 m-3 text-white p-2" style="background-color: grey">
                    <h5>Selamat Datang di Website Sekolah</h5>
                    <p>Bersama kita wujudkan generasi yang cerdas, berakhlak dan berprestasi</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    {{-- Content --}}
    <div class="row mx-md-5">
        <div class="col-md-8">

            {{-- Card 1 --}}
            <div class="card mt-3">
                <div class="card">
                    <div class="card-header text-dark fw-bold" style="background-color: #80808033">
                        Sambutan Kepala Sekolah
                    </div>
                    <div class="container-fluid">
                        <div class="float-md-start p-2">
                            <img class="img-fluid" style="width: 300px; max-width: 100%; height: auto;" src="/images/images.jpg" alt="">
                        </div>
                        <div class="p-2 d-block">
                            Assalamu'alaikum Warahmatullahi Wabarakatuh,

                            Puji syukur kita panjatkan ke hadirat Tuhan Yang Maha Esa atas segala rahmat dan
                            karunia-Nya, sehingga kita dapat terus berikhtiar dalam mencerdaskan kehidupan bangsa
                            melalui pendidikan.

                            Selamat datang di website resmi [Sekolah Rakyat]. Website ini kami hadirkan sebagai
                            jembatan informasi antara sekolah, siswa, orang tua, dan masyarakat luas, agar seluruh
                            kegiatan, prestasi, dan perkembangan sekolah dapat diakses dengan mudah dan transparan.

                            Sebagai lembaga pendidikan, kami berkomitmen untuk terus menciptakan lingkungan belajar
                            yang kondusif, inovatif, dan berkarakter — tidak hanya membekali siswa dengan ilmu
                            pengetahuan, tetapi juga menanamkan nilai-nilai akhlak mulia, kedisiplinan, dan semangat
                            gotong royong.

                            Kami percaya bahwa pendidikan yang berkualitas lahir dari kolaborasi yang erat antara
                            guru, siswa, orang tua, dan seluruh pemangku kepentingan. Oleh karena itu, kami
                            senantiasa terbuka terhadap masukan dan kerja sama demi kemajuan bersama.

                            Akhir kata, kami mengucapkan terima kasih atas kepercayaan yang diberikan kepada [Sekolah
                            Rakyat]. Semoga kita semua dapat bersama-sama mewujudkan generasi yang cerdas,
                            berakhlak mulia, dan berprestasi.

                            Wassalamu'alaikum Warahmatullahi Wabarakatuh.
                            <br>
                            <p>
                                [Prabowo Subianto]
                                Kepala Sekolah
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="card mt-2 mb-5">
                <div class="card text-dark fw-bold">
                    <div class="card-header" style="background-color: #80808033">
                        Kegiatan Terbaru
                        <a class="float-md-end" href="#">
                            <h6 style="font-weight: 700">Lihat Semua Kegiatan →</h6>
                        </a>
                    </div>
                    <div class="container">
                        <div class="row row-cols-2 row-cols-md-4 g-3 mt-1 mb-2">
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img class="img-fluid" src="/images/child-student-playing-school.jpg" alt="">
                                        <h6 class="mt-md-1 fw-bold">Kegiatan Membaca dan Belajar Bersama</h6>
                                        <p class="fw-lighter mt-md-1">📅 20 September 2026 <br>
                                            Siswa-siswi antusias mengikuti program literasi rutin setiap minggu
                                            untuk menumbuhkan minat dan budaya baca sejak dini di lingkungan
                                            sekolah.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img class="img-fluid" src="/images/little-boy-celebrating-new-years-eve-home.jpg"
                                            alt="">
                                        <h6 class="mt-md-1 fw-bold">Peringatan Hari Kartini di Sekolah
                                        </h6>
                                        <p class="fw-lighter mt-md-4">📅 21 April 2026 <br>
                                            Siswa-siswi tampil mengenakan pakaian adat dari berbagai daerah untuk
                                            mengenang semangat perjuangan R.A. Kartini bagi pendidikan perempuan.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img class="img-fluid" src="/images/woman-creating-their-own-vision-board.jpg" alt="">
                                        <h6 class="mt-md-1 fw-bold">Pembelajaran Interaktif di Ruang Kelas Ruang
                                        </h6>
                                        <p class="fw-lighter mt-md-1">📅 15 September 2026 <br>
                                            Kegiatan belajar berlangsung aktif dan menyenangkan, mendorong siswa
                                            untuk lebih berani bertanya, berdiskusi, dan berpartisipasi di dalam
                                            kelas.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <img class="img-fluid" src="/images/kid-having-fun-jungle-party.jpg" alt="">
                                        <h6 class="mt-md-1 fw-bold">Upacara Bendera dan Latihan Baris-Berbaris</h6>
                                        <p class="fw-lighter mt-md-1">📅 22 September 2026 <br>
                                            Upacara bendera dan latihan baris-berbaris rutin dilaksanakan setiap
                                            Senin untuk menanamkan disiplin dan rasa cinta tanah air kepada siswa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="card-header text-dark fw-bold" style="background-color: #80808033">
                    <svg class="me-md-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                        <path
                            d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06" />
                    </svg>
                    Pengumuman Terbaru
                </div>
                <ul class="list-group list-group-flush">
                    <div class="row row-cols-md-1">
                        <div class="col">
                            <li class="list-group-item">
                                <div class="row align-items-center g-2">
                                    <div class="col-2 col-md-2">
                                        <div class="border d-block justify-content-md-center p-2 rounded"
                                            style="background-color: #80808033; width: 3rem; height: 3rem; margin-top: 15px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="text-dark text-decoration-none" href="#">
                                            Pendaftaran Peserta Didik Baru <br> Tahun Ajaran 2025/2026 <br> 📅 22
                                            September 2026
                                        </a>
                                    </div>
                                    <div class="col-md-2 float-end">
                                        <a href="" class="text-decoration-none text-dark">
                                            <h4 style="font-size: 2rem; margin-top: 15px;">
                                                >
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col">
                            <li class="list-group-item">
                                <div class="row align-items-center g-2">
                                    <div class="col-2 col-md-2">
                                        <div class="border d-block justify-content-md-center p-2 rounded"
                                            style="background-color: #80808033; width: 3rem; height: 3rem; margin-top: 15px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="text-dark text-decoration-none" href="#">
                                            Pendaftaran Peserta Didik Baru <br> Tahun Ajaran 2025/2026 <br> 📅 22
                                            September 2026
                                        </a>
                                    </div>
                                    <div class="col-md-2 float-end">
                                        <a href="" class="text-decoration-none text-dark">
                                            <h4 style="font-size: 2rem; margin-top: 15px;">
                                                >
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col">
                            <li class="list-group-item">
                                <div class="row align-items-center g-2">
                                    <div class="col-2 col-md-2">
                                        <div class="border d-block justify-content-md-center p-2 rounded"
                                            style="background-color: #80808033; width: 3rem; height: 3rem; margin-top: 15px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="text-dark text-decoration-none" href="#">
                                            Pendaftaran Peserta Didik Baru <br> Tahun Ajaran 2025/2026 <br> 📅 22
                                            September 2026
                                        </a>
                                    </div>
                                    <div class="col-md-2 float-end">
                                        <a href="" class="text-decoration-none text-dark">
                                            <h4 style="font-size: 2rem; margin-top: 15px;">
                                                >
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col">
                            <li class="list-group-item">
                                <div class="row align-items-center g-2">
                                    <div class="col-2 col-md-2">
                                        <div class="border d-block justify-content-md-center p-2 rounded"
                                            style="background-color: #80808033; width: 3rem; height: 3rem; margin-top: 15px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="text-dark text-decoration-none" href="#">
                                            Pendaftaran Peserta Didik Baru <br> Tahun Ajaran 2025/2026 <br> 📅 22
                                            September 2026
                                        </a>
                                    </div>
                                    <div class="col-md-2 float-end">
                                        <a href="" class="text-decoration-none text-dark">
                                            <h4 style="font-size: 2rem; margin-top: 15px;">
                                                >
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col">
                            <li class="list-group-item">
                                <div class="row align-items-center g-2">
                                    <div class="col-2 col-md-2">
                                        <div class="border d-block justify-content-md-center p-2 rounded"
                                            style="background-color: #80808033; width: 3rem; height: 3rem; margin-top: 15px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="text-dark text-decoration-none" href="#">
                                            Pendaftaran Peserta Didik Baru <br> Tahun Ajaran 2025/2026 <br> 📅 22
                                            September 2026
                                        </a>
                                    </div>
                                    <div class="col-md-2 float-end">
                                        <a href="" class="text-decoration-none text-dark">
                                            <h4 style="font-size: 2rem; margin-top: 15px;">
                                                >
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="col">
                            <li class="list-group-item">
                                <div class="row align-items-center g-2">
                                    <div class="col-2 col-md-2">
                                        <div class="border d-block justify-content-md-center p-2 rounded"
                                            style="background-color: #80808033; width: 3rem; height: 3rem; margin-top: 15px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-file-earmark-text-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <a class="text-dark text-decoration-none" href="#">
                                            Pendaftaran Peserta Didik Baru <br> Tahun Ajaran 2025/2026 <br> 📅 22
                                            September 2026
                                        </a>
                                    </div>
                                    <div class="col-md-2 float-end">
                                        <a href="" class="text-decoration-none text-dark">
                                            <h4 style="font-size: 2rem; margin-top: 15px;">
                                                >
                                            </h4>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="row p-3 g-0" style="background-color: #6E8FB2;">
        <div class="col-md" style="border-right: 3px solid white; height: 97px;">
            <div><img class="float-start" style="margin-right: 30px; margin-left: 40px"
                    src="/images/Gemini_Generated_Image_3cl1z33cl1z33cl1-removebg-preview.png" alt=""
                    width="55" height="45">
                <div class="navbar-brand fw-bold" style="color: white; margin-top: 30px;">Sekolah Rakyat<br>
                    <h6 class="fw-lighter">SMP / SMK / SMA</h6>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4" style="border-right: 3px solid white; height: 97px;">
            <div><img class="float-start" style="margin-right: 30px; margin-left: 70px"
                    src="/images/a_clean_minimalist_high_contrast_graphic_logo_on.png" alt=""
                    width="55" height="45">
                <div class="navbar-brand fw-bold" style="color: white; margin-top: 30px;">Di Buat Oleh<br>
                    <h6 class="fw-lighter">Rizky Nur</h6>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 d-flex justify-content-center">
            <a class="navbar-brand fw-bold" style="color: white; margin-top: 37px;">© Copyright Sekolah Rakyat<br>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>