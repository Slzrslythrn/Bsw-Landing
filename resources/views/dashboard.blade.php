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

    </head>
    
    <body id="top">

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="dashboard.blade.php">
                        <span>BSW</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Daftar Pelayanan</a>
                            </li>
                            
                        </ul>
                        <li class="nav-item dropdown" style="list-style:none">Hi! Pengguna
                            <ul class="dropdown-menu dropdown-menu-light mt-3" aria-labelledby="navbarLightDropdownMenuLink">
                                <a class="dropdown-item" href="bsw_masyarakat.blade.php">BSW Masyarakat</a>
                                <a class="dropdown-item" href="bsw_asn.blade.php">BSW ASN</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                                
                            </ul>
                        </li>
                        </div>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h1 class="text-white text-center">Bogor Single Window</h1>

                            <h6 class="text-white text-center">Portal Aplikasi Pemerintah Kota Bogor Memberikan layanan
                                langsung kepada semua masyarakat di Kota Bogor
                            </h6>
                        </div>
                        <div class="container">
                            <div class="d-flex justify-content-center text-center ">
                                <a href="kesehatan.blade.php">
                            <div class="bg-white" style="
                                width: 74px;
                                height: 74px;
                                padding: 0;
                                border-radius: 10px;
                                margin: 0 10px;
                            ">
                                                        <img src="images/topics/1.png" style="
                                object-fit: cover;
                                max-width: 100%;
                            "><a class="text-white">SIMPEG</a>
                                                    </div>
                            </a>
                            
                            <a href="kesehatan.blade.php">
                            <div class="bg-white" style="
                                width: 74px;
                                height: 74px;
                                padding: 0;
                                border-radius: 10px;
                                margin: 0 10px;
                            ">
                                                        <img src="images/topics/1.png" style="
                                object-fit: cover;
                                max-width: 100%;
                            "><a class="text-white">SIMPEG</a>
                                                    </div>
                            </a>
                            <a href="kesehatan.blade.php">
                                <div class="bg-white" style="
                                    width: 74px;
                                height: 74px;
                                padding: 0;
                                border-radius: 10px;
                                margin: 0 10px;
                                ">
                                                            <img src="images/topics/2.png" style="
                                    object-fit: cover;
                                    max-width: 100%;
                                "><a class="text-white">EKINERJA</a>
                                                        </div>
                            </a>
                            <a href="kesehatan.blade.php">
                                <div class="bg-white" style="
                                    width: 74px;
                                height: 74px;
                                padding: 0;
                                border-radius: 10px;
                                margin: 0 10px;
                                ">
                                                            <img src="images/topics/2.png" style="
                                    object-fit: cover;
                                    max-width: 100%;
                                "><a class="text-white">TND</a>
                                                        </div>
                            </a>
                            <a href="kesehatan.blade.php">
                                <div class="bg-white" style="
                                    width: 74px;
                                height: 74px;
                                padding: 0;
                                border-radius: 10px;
                                margin: 0 10px;
                                ">
                                                            <img src="images/topics/2.png" style="
                                    object-fit: cover;
                                    max-width: 100%;
                                "> <a class="text-white">SIMPEG</a>
                                                        </div>
                            </a>
            
                        </div>
                          
                        </div>
                    </div>                  
                </div>    
                        
            </section>

            <div class="d-flex  justify-content-center align-items-center position-relative">
                <div class="position-absolute start-50 translate-middle" style="top:2px; z-index:444">
                <button type="button" class="btn btn-warning" style="width: 200px"><a class="down-arrow" href="#apps">Drop</a></button>
                </div>    
            </div>

            <br>
            <br>
            <br>
            <div id="apps"></div>
            <div class="col-12 text-center">
                <h3 class="mb-2" style="color: #325358; margin-top:80px"">APLIKASI PEMERINTAH KOTA BOGOR</h3>
            </div>

            <section class="explore-section section-padding" id="section_2">
                <div class="container d-flex" style="margin-bottom: -800px; margin-top: -80px">
                        <div class="me-5 ps-3 pe-5 pt-3 pb-3 d-flex flex-column" style="background-color: orange;height: 500px">
                        
                            <a href="#" class="nav-item m-3 me-5" style="color: white" > Kepegawaian</a>
                            <a href="#" class="nav-item m-3 me-5" style="color: white" > Kesehatan</a>
                            <a href="#" class="nav-item m-3 me-5" style="color: white" > Pemerintahan</a>
                            <a href="#" class="nav-item m-3 me-5" style="color: white" > Keuangan</a>
                            <a href="#" class="nav-item m-3 me-5" style="color: white" > Kepegawaian</a>
                            <a href="#" class="nav-item m-3 me-5" style="color: white" > Kesehatan</a>
                            <a href="#" class="nav-item m-3 me-5" style="color: white" > Pemerintahan</a>
                            <a href="#" class="nav-item m-3 me-5" style="color: white" > Keuangan</a>

                        </div>

                        <div class="row">
                        <div class="col-12 d-flex">    
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Kesehatan</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Pemerintahan</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/light.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                                        </div>
                                </div>

                                <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
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

                                                    <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                            </div>

                    </div>
                </div>
            </section>

        <footer style=" margin-top:600px"> 
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
                            {{-- <i class="" style="color: #ffffff;"></i> --}}
                            <p class="ms-2" style="color: #ffffff;font-size:12px">kominfo@kotabogor.go.id</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section_7" style="background-color: #1A1A1A; padding : 10px;">
                <div class="container d-flex" style="color: #ffffff; justify-content :center">
                        <a class="me-5"style="color: #ffffff;"> Bogor Single Window 2023 Dinas komunikasi dan Informatika Kota Bogor.</a>   
                        
                </div>
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
