<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Bogor Single Window</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('css/templatemo-topic-listing.css')}}" rel="stylesheet">   
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sedan+SC&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Sedan+SC&display=swap" rel="stylesheet">
    </head>
    
    <body id="top">

        <main>
            <nav class="navbar navbar-expand-lg" style="background-color: #ffffff; padding:0px">
                <div class="container">
                    <a class="navbar-brand" href="dashboard.blade.php">
                        <img src="images/topics/logo.png" style="
                        object-fit: cover;
                        max-width: 100%;
                    ">
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse m-0 " id="navbarNav" style="background-color: #387799; border-radius:1px 1px 70px 70px; ">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1" style="font-family: 'Roboto', sans-serif;text-transform: capitalize;font-size: 17px">Beranda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2" style="font-family: 'Roboto', sans-serif;text-transform: capitalize;font-size: 17px">Daftar Pelayanan</a>
                            </li>
                              
                        </ul>
                        <div class="button">
                            <button class="btn me-5"><a href="dashboard" style="color: white;font-family: Poppins,helvetika,sans-serif;border:2px dotted white;border-radius:50px;padding: 5px 10px 5px 10px">Login SSO <i class="fa-solid fa-arrow-right-from-bracket"></i></a></button>
                        </div>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="container" style="margin-left: 100px;">
                            <a class="text-#387799" style="font-size: 48px;font-family:sans-serif;font-weight: bold">Bogor <span style="color:#f39f55;font-size: 48px">Single</span>  Window</a>

                            <h6 class="text-#387799" style="font-family: sans-serif;font-size:26px;font-weight: bold"><a>Portal Aplikasi Pemerintah Kota Bogor Memberikan</a>
                                <a>layanan langsung kepada semua masyarakat di Kota Bogor</a> 
                            </h6>
                        </div>
                    </div>
                </div>
                <img src="images/topics/header.png" style="max-width: 20%;margin-right:150px;padding-bottom:40px;">
            </section>


                       <div class="d-flex justify-content-center text-center position-absolute" style="margin-top:-120px;z-index:4;margin-left:180px;margin-bottom:50px;">
                <span class="border bg-shadow" style="width:1000px;height:220px;background-color:#FFFFFF;border-radius:10px;position:relative">
                    <br>
                    <h5 class="text-center bg-shadow" style="font-family: sans-serif;font-size:20px;color:#387799">Layanan yang sering digunakan</h5>
                    
                <div class="container" style="font-family: sans-serif;">
                    <div class="d-flex justify-content-center text-center" style="font-family: sans-serif;">
                        <a href="kesehatan.blade.php">
                    <div class="bg-white" style="
                        width: 74px;
                        height: 74px;
                        padding: 0;
                        border-radius: 10px;
                        margin: 10px;
                        margin-right: 100px;
                        box-shadow: 1px 1px 1px 1px;
                    ">
                                                <img src="images/topics/authentication-34.png" style="
                        object-fit: cover;
                        max-width: 80%;
                        padding-top: 10px;
                    "><h5 class="text- #3b7799" style="padding-top:20px;font-family:sans-serif;">SIMPEG</h5>
                                            </div>
                    </a>
                    
                    <a href="kesehatan.blade.php">
                    <div class="bg-white" style="
                        width: 74px;
                        height: 74px;
                        padding: 0;
                        border-radius: 10px;
                        margin: 10px;
                        margin-right: 100px;
                        font-family:sans-serif;
                        box-shadow: 1px 1px 1px 1px;
                    ">
                                                <img src="images/topics/ekinerja.png" style="
                        object-fit: cover;
                        max-width: 50%;
                        padding-top: 20px;
                    "><h5 class="text- #3b7799"  style="padding-top:30px;font-family:sans-serif;">E-Kinerja</h5>
                                            </div>
                    </a>
                    <a href="kesehatan.blade.php">
                        <div class="bg-white" style="
                            width: 74px;
                        height: 74px;
                        padding: 0;
                        border-radius: 10px;
                        margin: 10px;
                        margin-right:100px;
                        font-family:sans-serif;
                        box-shadow: 1px 1px 1px 1px;
                        ">
                                                    <img src="images/topics/tnd.png" style="
                            object-fit: cover;
                            max-width: 50%;
                            padding-top: 20px;
                        "><h5 class="text- #3b7799"  style="padding-top:30px;font-family:sans-serif;">TND</h5>
                                                </div>
                    </a>
                    <a href="kesehatan.blade.php">
                        <div class="bg-white" style="
                            width: 74px;
                        height: 74px;
                        padding: 0;
                        border-radius: 10px;
                        margin: 10px;
                        margin-right:100px;
                        font-family:sans-serif;
                        box-shadow: 1px 1px 1px 1px;
                        ">
                                                    <img src="images/topics/bappenda.png" style="
                            object-fit: cover;
                            max-width: 50%;
                            padding-top: 20px;
                        "><h5 class="text- #3b7799"  style="padding-top:30px;font-family:sans-serif;">Bapenda</h5>
                                                </div>
                    </a>
                    <a href="kesehatan.blade.php">
                        <div class="bg-white" style="
                            width: 74px;
                        height: 74px;
                        padding: 0;
                        border-radius: 10px;
                        margin: 10px;
                        font-family:sans-serif;
                        box-shadow: 1px 1px 1px 1px;
                        ">
                                                    <img src="images/topics/dinsos.png" style="
                            object-fit: cover;
                            max-width: 50%;
                            padding-top: 20px;
                        "> <h5 class="text- #3b7799"  style="padding-top:30px;font-family:sans-serif;">Dinsos</h5>
                                                </div>
                    </a>
    
                </div>
                <div class="d-flex  justify-content-center align-items-center position-relative">
                    <div class="position-absolute start-50 translate-middle" style="top:70px; z-index:3">
                        <a href="#section_2" class="btn btn-warning smoothscroll fa-solid fa-angle-down" style="width: 200px;height:40px;padding-top:10px;border-radius:30px;"></a>
                    </div>    
                </div>    
                </div>
            </span>
        </div>

        <section class="explore-section" id="section_2" style="margin-top: 200px;">
            <div id="apps"></div>
            <div class="row" id="section_2">
                <div class="col-12 text-center">
                    <h3 class="" style="color: #325358; margin-top:80px; font-weight: 800">APLIKASI PEMERINTAH KOTA
                        BOGOR
                    </h3>
                </div>
                <div class="col-md text-center">
                    <h4 style="color: #325358; font-weight: 200;">{{ $namaLayanan ?? '' }}</h4>
                </div>
            </div>
        </section>

    <section class="explore-section my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.includes.sidebar')
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel"
                                    aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        @if (!empty($menuLayanan))
                                            @foreach ($menuLayanan['data'] as $row)
                                                <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0"
                                                    style="height: 250px; width:200px">
                                                    <div class="custom-block shadow-lg">
                                                        <a href="topics-detail.html">
                                                            <div class="d-flex">
                                                                <div>
                                                                    <h5 class="mb-2">Nama Layanan</h5>
                                                                </div>
                                                                <span
                                                                    class="badge bg-design rounded-pill ms-auto">{{ $row['visit'] ?? 0 }}</span>
                                                            </div>
                                                            <img src="https://bsw-landing.kotabogor.go.id/v2/img/LOGOBSW5.png"
                                                                class="custom-block-image img-fluid" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab"
                            tabindex="0">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                    <div class="custom-block bg-white shadow-lg">
                                        <a href="topics-detail.html">
                                            <div class="d-flex">
                                                <div>
                                                    <h5 class="mb-2">Investment</h5>

                                                    <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                </div>

                                                <span class="badge bg-finance rounded-pill ms-auto">30</span>
                                            </div>

                                            <img src="images/topics/undraw_Finance_re_gnv2.png"
                                                class="custom-block-image img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
            
        <footer style=" margin-top:900px;margin-bottom:-300px"> 
            <section id="section_5" style="background-color: #3B7799; padding : 20px">
                <div class="container d-flex" style="color: #ffffff; justify-content :center">
                        <a class="me-5" href="#" style="color: #ffffff;"><i class="fa-brands fa-facebook fa-xl"></i> Pemerintah Kota Bogor</a>   

                        <a class="me-5" href="#" style="color: #ffffff;"><i class="fa-brands fa-youtube fa-xl" style="color: #ffffff;"></i> Pemerintah Kota Bogor</a>

                        <a class="me-5" href="#" style="color: #ffffff;"><i class="fa-brands fa-x-twitter fa-xl" style="color: #ffffff;"></i> PemKotaBogor</a>

                        <a class="me-5" href="#" style="color: #ffffff;"><i class="fa-brands fa-square-instagram fa-2xl" style="color: #ffffff;"></i> PemkotaBogor</a>

                        
                </div>
            </section>
            <section id="section_6" style="background-color: #383838; padding : 50px">
                <div class="container d-flex" style="color: #ffffff; justify-content :center">
                    <div class="me-5">
                        <h6 style="color: #ffffff">Bogor Single Window</h6>
                        <p style="color: #ffffff;font-size:12px">Bogor Single Window adalah Portal Pemerintah Kota Bogor terkait</p> 
                        <p style="color: #ffffff;font-size:12px;margin-top:-18px">layanan dari informasi kepada semua masyarakat di Kota Bogor</p>  
                    </div>
                    <div class="me-5">
                        <h6 style="color: #ffffff">Alamat</h6>
                        <p style="color: #ffffff;font-size:12px">Jl.Ir. H Juanda No.10, Rt01/RW01</p>   
                        <p style="color: #ffffff;font-size:12px;margin-top:-18px">Paledang,Kecamatan Bogor Tengah,</p>
                        <p style="color: #ffffff;font-size:12px;margin-top:-18px">KotaBogor,Jawa Barat 16121, Indonesia</p>
                    </div>
                    <div>
                        <h6 style="color: #ffffff">Kontak</h6>
                        <div class="d-flex">
                        <a class="fa-brands fa-whatsapp" style="color: #ffffff;"></a>
                        <p class="ms-2" style="color: #ffffff;font-size:12px">08123456789</p>
                        </div>   
                        <div class="d-flex" style="margin-top: -16px">
                            <a class="fa-solid fa-envelope" style="color: #ffffff;"></a>
                            <p class="ms-2" style="color: #ffffff;font-size:12px">kominfo@kotabogor.go.id</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section_7" style="background-color: #1A1A1A; padding : 10px;">
                <div class="container d-flex" style="color: #ffffff; justify-content :center">
                        <a class="me-5"style="color: #ffffff;"> Bogor Single Window 2023 Dinas komunikasi dan Informatika Kota Bogor.</a>   
                        
                </div>
                <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-bdab699a-afe2-493b-af84-51334da16cc7" data-elfsight-app-lazy></div>
            </section>
        </footer>
    </main>


        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src={{asset('js/bootstrap.bundle.min.js')}}></script>
        <script src={{asset('js/jquery.sticky.js')}}></script>
        <script src={{asset('js/click-scroll.js')}}></script>
        <script src={{asset('js/custom.js')}}></script>

    </body>
</html>
