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
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <a class="dropdown-item" href="topics-listing.html">BSW Masyarakat</a>
                                    <a class="dropdown-item" href="kesehatan.balde.php">BSW ASN</a>
                                    <a class="dropdown-item" href="logout">Logout</a>
                                    
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
                            {{-- <div class="d-flex  justify-content-center align-items-center position-relative">
                                <div class="position-absolute start-50 translate-middle" style="top:150px; z-index:444">
                                <button type="button" class="btn btn-warning" style="width: 200px">Drop</button>
                                </div>    
                            </div> --}}
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
            <div class="col-12 text-center">
                <h3 class="mb-2" style="color: #325358; margin-top:80px" id="apps">APLIKASI PEMERINTAH KOTA BOGOR</h3>
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
                                            <div class="custom-block bg-white shadow-lg">
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
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graphic</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Logo Design</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                    </div>

                                                    <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graphic</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        {{-- <div class="w-100"></div> --}}
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
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
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graphic</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Logo Design</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                    </div>

                                                    <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graphic</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
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
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graphic</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Logo Design</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">100</span>
                                                    </div>

                                                    <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Web Design</h5>

                                                            <p class="mb-0">Topic Listing Template based on Bootstrap 5</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">14</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-3 col-12 mb-3 mb-lg-0" style="height: 250px; width:200px">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graphic</h5>

                                                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
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

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="custom-block custom-block-overlay">
                                                <div class="d-flex flex-column h-100">
                                                    <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                    <div class="custom-block-overlay-text d-flex">
                                                        <div>
                                                            <h5 class="text-white mb-2">Finance</h5>

                                                            <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                                                            <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                                        </div>

                                                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                                                    </div>

                                                    <div class="social-share d-flex">
                                                        <p class="text-white me-4">Share:</p>

                                                        <ul class="social-icon">
                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-twitter"></a>
                                                            </li>

                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-facebook"></a>
                                                            </li>

                                                            <li class="social-icon-item">
                                                                <a href="#" class="social-icon-link bi-pinterest"></a>
                                                            </li>
                                                        </ul>

                                                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                                    </div>

                                                    <div class="section-overlay"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Composing Song</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Compose_music_re_wpiw.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Online Music</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">45</span>
                                                    </div>

                                                    <img src="images/topics/undraw_happy_music_g6wc.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 col-12">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Podcast</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-music rounded-pill ms-auto">20</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                                            <div class="custom-block bg-white shadow-lg">
                                                <a href="topics-detail.html">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="mb-2">Graduation</h5>

                                                            <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                                                        </div>

                                                        <span class="badge bg-education rounded-pill ms-auto">80</span>
                                                    </div>

                                                    <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding section-bg" id="section_5">
                <div class="container">
                    
                        <a href="#" class="fa fa-facebook"></a>
                 
                </div>
            </section>
        </main>

<footer class="site-footer section-padding">
            <div class="container">
                
            </div>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src={{asset('js/bootstrap.bundle.min.js')}}></script>
        <script src={{asset('js/jquery.sticky.js')}}></script>
        <script src={{asset('js/click-scroll.js')}}></script>
        <script src={{asset('js/custom.js')}}></script>

    </body>
</html>
