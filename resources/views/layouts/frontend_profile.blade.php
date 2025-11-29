<!doctype html>
<html lang="en">

<head>
    {{-- set metadata on this website --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASEAN Hub International Design Competition 2026</title>

    {{-- set icon --}}
    <link rel="icon" href="{{ asset('adminlte/dist/img/logo-dki.png') }}" type="image/png">

    {{-- template style - bootstrap 5.2.x --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.2.3/dist/css/bootstrap.min.css') }}">

    {{-- template style - fontawesome 6.7.2 --}}
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome/css/all.min.css') }}">

    {{-- template style - custom-bootstrap --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/template.css') }}">

    <!-- CSS Kustom yang Diperbaiki -->
    <style>
        /* Gaya umum untuk halaman */
        body {
            background-color: #f8f9fa;
            /* Latar belakang abu-abu muda untuk kontras */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Mengatur tampilan kartu agar lebih rapi dan modern */
        .card {
            border: none;
            border-radius: 0.75rem;
            /* Sudut kartu yang sedikit lebih melengkung */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            /* Pastikan semua kartu memiliki tinggi yang sama */
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        /* Padding di dalam kartu menjadi lebih proporsional */
        .card-body {
            padding: 2rem;
        }

        /* Gaya untuk container utama di dalam kartu */
        .section-contact {
            display: flex;
            align-items: center;
            height: 100%;
        }

        /* Gaya untuk wadah ikon di sebelah kiri */
        .section-left {
            background-color: #212529;
            /* Background warna hitam/gelap */
            color: white;
            width: 50px;
            /* Ukuran yang lebih proporsional */
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.25rem;
            /* Jarak antara ikon dan teks yang seimbang */
            flex-shrink: 0;
            /* Mencegah ikon menyusut */
        }

        /* Ukuran ikon yang disesuaikan */
        .section-left i {
            font-size: 1.25rem;
        }

        /* Gaya untuk wadah teks di sebelah kanan */
        .section-right {
            flex-grow: 1;
            /* Biarkan area teks memenuhi sisa ruang */
        }

        .section-right p {
            margin: 0;
            line-height: 1.5;
        }

        /* Gaya untuk label (Our Location, Email, Phone Number) */
        .section-right .label {
            font-weight: 600;
            /* Ketebalan font yang sedang */
            font-size: 1rem;
            color: #212529;
            margin-bottom: 0.5rem;
        }

        /* Gaya untuk detail (alamat, email, nomor telepon) */
        .section-right .detail {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>

    @stack('styles')
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark bg-gradient fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto pt-2 pb-2">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Guideline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Exhibition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Announcement</a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- container --}}
    </nav>
    {{-- navbar --}}

    <section class="container mb-5">
        <h4 class="border-bottom opacity-75 pb-3 mb-3">Judges Team</h4>
        <div class="row g-3">
            <div class="col-sm-3">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail mb-2"
                                src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                                alt="User profile picture">
                            <span class="d-block text-normal">Dr. Imam Marzuki Shofi, S.Si., MT.</span>
                            <span class="d-block text-muted">Universitas Diponegoro</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail mb-2"
                                src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                                alt="User profile picture">
                            <span class="d-block text-normal">Dr. Imam Marzuki Shofi, S.Si., MT.</span>
                            <span class="d-block text-muted">Universitas Diponegoro</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail mb-2"
                                src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                                alt="User profile picture">
                            <span class="d-block text-normal">Dr. Imam Marzuki Shofi, S.Si., MT.</span>
                            <span class="d-block text-muted">Universitas Diponegoro</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail mb-2"
                                src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                                alt="User profile picture">
                            <span class="d-block text-normal">Dr. Imam Marzuki Shofi, S.Si., MT.</span>
                            <span class="d-block text-muted">Universitas Diponegoro</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail mb-2"
                                src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                                alt="User profile picture">
                            <span class="d-block text-normal">Dr. Imam Marzuki Shofi, S.Si., MT.</span>
                            <span class="d-block text-muted">Universitas Diponegoro</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail mb-2"
                                src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                                alt="User profile picture">
                            <span class="d-block text-normal">Dr. Imam Marzuki Shofi, S.Si., MT.</span>
                            <span class="d-block text-muted">Universitas Diponegoro</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail mb-2"
                                src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                                alt="User profile picture">
                            <span class="d-block text-normal">Dr. Imam Marzuki Shofi, S.Si., MT.</span>
                            <span class="d-block text-muted">Universitas Diponegoro</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card border-dark">
                    <div class="card-body">
                        <div class="text-center">
                            <img class="img-fluid img-thumbnail mb-2"
                                src="{{ asset('adminlte/dist/img/user8-128x128.jpg') }}"
                                alt="User profile picture">
                            <span class="d-block text-normal">Dr. Imam Marzuki Shofi, S.Si., MT.</span>
                            <span class="d-block text-muted">Universitas Diponegoro</span>
                        </div>
                    </div>
                </div>
            </div>
            {{-- col --}}
        </div>
        {{-- row --}}
    </section>
    {{-- section-judges --}}



    <section class="container my-5">
        <h4 class="border-bottom opacity-75 pb-3 mb-4">Contact Us</h4>
        <div class="row g-4">
            <!-- Card Lokasi -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="section-contact">
                            <div class="section-left">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="section-right">
                                <p class="label">Our Location</p>
                                <p class="detail">Jl. Medan Merdeka Selatan No. 8-9, Central Jakarta, Postal Code 10110.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Email -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="section-contact">
                            <div class="section-left">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="section-right">
                                <p class="label">Email</p>
                                <p class="detail">Information@aseanhub.jakarta.go.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Telepon -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="section-contact">
                            <div class="section-left">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="section-right">
                                <p class="label">Phone Number</p>
                                <p class="detail">021 - 382 - 2255</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{-- scripts bootstrap 5.2.x --}}
    <script src="{{ asset('bootstrap/bootstrap-5.2.3/dist/js/bootstrap.bundle.min.js') }}"></script>

    {{-- scripts fontawesome 6.7.2 --}}
    <script src="{{ asset('adminlte/plugins/fontawesome/js/all.min.js') }}"></script>

    @stack('scripts')
</body>

</html>