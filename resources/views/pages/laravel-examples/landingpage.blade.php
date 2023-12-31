<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-navbars.navs.navland titlePage="Landing"></x-navbars.navs.navland>
        <div class="profile-img" style="display: flex; height: 400px; margin: 0; position: relative;">
            <img src="{{ asset('assets/img/foto_1.JPG') }}" alt="profile-img" width="100%" height="150%"
                style="opacity: 0.9;" />
            <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                <h1 style="color: white; font-size: 38px;  ">SELAMAT DATANG DI SILAPEM</h1>
                <h1 style="color: white; font-size: 24px; font-weight: 100;">Sistem Informasi Pelayanan Kepemudaan </h1>
            </div>
        </div>
        <h1 class="text-center mt-12 mb-0" style="color: rgb(78, 78, 78); font-size: 22px; ">Supported By :
        </h1>

        <div class="supp text-center mb-5">
            <img src="{{ asset('assets/img/supported.png') }}" alt="profile-img" class="text-center" />
        </div>
        <h1 class="text-center mx-5 mt-6 mb-6" style="color: rgb(0, 0, 0); font-size: 25px; font-weight: bold;">
            Evaluasi
            Data
            Kependudukan
        </h1>
        <div class="container">
            <div class="card">
                <div id="bar-chart-container" style="width: 100%; height: 800px;"></div>
            </div>
        </div>
       

        

        <h1 class="text-center mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 28px; font-weight: bold; ">
            Lowongan Kerja
        </h1>
        <div class="container mt-3 position: relative;">
            <div class="scroll-container">
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_1.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more <i
                                    class="fas fa-arrow-right"></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_2.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more <i
                                    class="fas fa-arrow-right"></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_3.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more <i
                                    class="fas fa-arrow-right"></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_4.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_5.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_6.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_7.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_8.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_9.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Company Name
                    </h1>
                    <h1 class="text-start mx-4 mb-2"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Deskripsi Pekerjaan
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Alamat Perusahaan
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>

                </div>
            </div>
            <div class="navigations">
                <button id="back"
                    style="position: absolute; top: 45%; right: 92%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-arrow-left" style="color: #000;"></i>
                </button>

                <button id="next"
                    style="position: absolute; top: 45%; left: 98%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-arrow-right" style="color: #000;"></i>
                </button>
            </div>
        </div>

        <h1 class="text-center mx-5 mt-3 mb-5" style="color: rgb(0, 0, 0); font-size: 28px; font-weight: bold; ">
            Event
        </h1>
        <div class="container mt-3 position: relative;">
            <div class="scroll-container2">
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_4.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Wirausaha Muda 2023
                    </h1>

                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara Seleksi wirausaha muda
                        ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_5.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Pemuda Pelopor 2023
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara seleksi pemuda pelopor
                        2023 ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_6.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Webminar OKP 2023
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara webminar untuk anggota
                        OKP ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_2.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Wirausaha Muda 2023
                    </h1>

                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara Seleksi wirausaha muda
                        ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_1.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Pemuda Pelopor 2023
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara seleksi pemuda pelopor
                        2023 ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_3.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Webminar OKP 2023
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara webminar untuk anggota
                        OKP ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="navigation">
                <button id="backx"
                    style="position: absolute; top: 45%; right: 92%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-arrow-left" style="color: #000;"></i>
                </button>

                <button id="nextx"
                    style="position: absolute; top: 45%; left: 98%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-arrow-right" style="color: #000;"></i>
                </button>
            </div>
        </div>

        <h1 class="text-center mx-5 mt-6 mb-5" style="color: rgb(0, 0, 0); font-size: 30px; font-weight: bold; ">
            Berita
        </h1>
        <div class="container mt-3 position: relative; mb-5">
            <div class="scroll-container3">
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_7.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Acara Gathering Wirausaha
                        Muda
                    </h1>

                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100; max-width: 50px;">Acara
                        gathering wirausaha muda ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_8.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Pelaksanaan gather OKP 2023
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Pelaksanaan gather OKP
                        berjalan ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_9.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Bazar UMKM Subang 2023
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara Bazar UMKM Subang akan
                        ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_2.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Wirausaha Muda 2023
                    </h1>

                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara Seleksi wirausaha muda
                        ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_1.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Seleksi Pemuda Pelopor 2023
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100;">Acara seleksi pemuda pelopor
                        ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>
                <div class="card mx-2" style="border-radius: 10px; width: 324px;">
                    <div class="profile-img" style="height: 200px;">
                        <img src="{{ asset('assets/img/dum_3.png') }}" alt="profile-img" width="100%" />
                    </div>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(12, 12, 12); font-size: 18px; font-weight: bold;">Webminar OKP 2023
                    </h1>
                    <h1 class="text-start mx-4 mb-4"
                        style="color: rgb(42, 42, 42); font-size: 18px; font-weight: 100; max-width: 100px;">Acara
                        webminar untuk anggota ...
                    </h1>
                    <div class="text-start mx-4 mb-5">
                        <a class="btn text-start align-items-center" href="#"
                            style="background-color: #4C6FFF; text-align: center;">
                            <i class="text-white" style="text-transform: none; font-style: normal;">See more
                                <i></i></i>
                        </a>
                    </div>
                </div>

            </div>

            <div class="navigation">
                <button id="backy"
                    style="position: absolute; top: 45%; right: 92%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-arrow-left" style="color: #000;"></i>
                </button>

                <button id="nexty"
                    style="position: absolute; top: 45%; left: 98%; transform: translate(-50%, -50%); border: none; background-color: #fff; border-radius: 50%; width: 40px; height: 40px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);">
                    <i class="fas fa-arrow-right" style="color: #000;"></i>
                </button>
            </div>

        </div>
        <x-footers.footer></x-footers.guest>
    </main>
    <x-plugins></x-plugins>

</x-layout>
<script>
     Highcharts.chart('bar-chart-container', {
    chart: {
        type: 'bar' // Specify the chart type as 'bar'.
    },
    title: {
        text: 'Data Pemuda'
    },
    xAxis: {
        categories: ['Usia 16 - 19 Tahun', 'Usia 20 - 30 tahun', 'Pencari Kerja', 'Pasien TB HIV', 'OAT Dengan ARV', 'Wira Usaha Muda', 'Anggota Organisasi Kepemudaan', 'Oragnisasi Kepemudaan', 'Kriminal Curanmor', 'Kriminal Narkoba', 'Kriminal Pembunuhan', 'OSIS', 'BEM']
    },
    yAxis: {
        title: {
            text: 'Values'
        }
    },
    series: [{
        name: 'Data Series',
        data: [10, 20, 15, 25, 30, 20, 15, 25, 30, 20, 15, 25, 30]
    }]
});
</script>
<script>
    var data = {
        datasets: [{
            label: "Donut Chart",
            data: [36, 25, 25, 14],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx = document.getElementById("myChart").getContext("2d");
    var myChart = new Chart(ctx, {
        type: "doughnut",
        data: data,
    });

    var data2 = {
        datasets: [{
            label: "Donut Chart",
            data: [53, 32, 25, 12],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx2 = document.getElementById("myChart2").getContext("2d");
    var myChart2 = new Chart(ctx2, {
        type: "doughnut",
        data: data2,
    });

    var data3 = {
        datasets: [{
            label: "Donut Chart",
            data: [13, 42, 25, 70],
            backgroundColor: ["#F94144", "#FFB320", "#5D5FEF", "#55BEEB"],
        }, ],
    };
    var ctx3 = document.getElementById("myChart3").getContext("2d");
    var myChart2 = new Chart(ctx3, {
        type: "doughnut",
        data: data3,
    });
</script>
<style>
    .cards {
        width: 10px;
        /* Sesuaikan lebar kartu sesuai kebutuhan */
        height: 10px;
        /* Sesuaikan tinggi kartu sesuai kebutuhan */
        border-radius: 50%;
        /* Memberikan bentuk lingkaran dengan radius 50% */

    }
</style>
<style>
    .container {
        overflow: hidden;
        width: 100%;
        white-space: nowrap;
        position: relative;
    }

    .scroll-container {
        display: inline-block;
        transition: transform 0.3s;
    }

    .scroll-container2 {
        display: inline-block;
        transition: transform 0.3s;
    }

    .scroll-container3 {
        display: inline-block;
        transition: transform 0.3s;
    }

    .card {
        display: inline-block;
        margin-right: 10px;
        /* Jarak antar elemen card */
        vertical-align: top;
    }

    .navigation {
        margin-top: 10px;
    }

    button {
        margin-right: 10px;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollContainer = document.querySelector(".scroll-container");
        const cards = document.querySelectorAll(".card");
        const backBtn = document.getElementById("back");
        const nextBtn = document.getElementById("next");
        let scrollPosition = 0;
        const cardWidth = cards[0].offsetWidth + 10; // Lebar card + margin-right

        nextBtn.addEventListener("click", function() {
            scrollPosition += cardWidth;
            if (scrollPosition > (cards.length - 3) * cardWidth) {
                scrollPosition = (cards.length - 3) * cardWidth;
            }
            scrollContainer.style.transform = `translateX(-${scrollPosition}px)`;
        });

        backBtn.addEventListener("click", function() {
            scrollPosition -= cardWidth;
            if (scrollPosition < 0) {
                scrollPosition = 0;
            }
            scrollContainer.style.transform = `translateX(-${scrollPosition}px)`;
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollContainer = document.querySelector(".scroll-container2");
        const cards = document.querySelectorAll(".card");
        const backBtn = document.getElementById("backx");
        const nextBtn = document.getElementById("nextx");
        let scrollPosition = 0;
        const cardWidth = cards[0].offsetWidth + 10; // Lebar card + margin-right

        nextBtn.addEventListener("click", function() {
            scrollPosition += cardWidth;
            if (scrollPosition > (cards.length - 3) * cardWidth) {
                scrollPosition = (cards.length - 3) * cardWidth;
            }
            scrollContainer.style.transform = `translateX(-${scrollPosition}px)`;
        });

        backBtn.addEventListener("click", function() {
            scrollPosition -= cardWidth;
            if (scrollPosition < 0) {
                scrollPosition = 0;
            }
            scrollContainer.style.transform = `translateX(-${scrollPosition}px)`;
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollContainer = document.querySelector(".scroll-container3");
        const cards = document.querySelectorAll(".card");
        const backBtn = document.getElementById("backy");
        const nextBtn = document.getElementById("nexty");
        let scrollPosition = 0;
        const cardWidth = cards[0].offsetWidth + 10; // Lebar card + margin-right

        nextBtn.addEventListener("click", function() {
            scrollPosition += cardWidth;
            if (scrollPosition > (cards.length - 3) * cardWidth) {
                scrollPosition = (cards.length - 3) * cardWidth;
            }
            scrollContainer.style.transform = `translateX(-${scrollPosition}px)`;
        });

        backBtn.addEventListener("click", function() {
            scrollPosition -= cardWidth;
            if (scrollPosition < 0) {
                scrollPosition = 0;
            }
            scrollContainer.style.transform = `translateX(-${scrollPosition}px)`;
        });
    });
</script>
