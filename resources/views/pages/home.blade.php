<x-app-layout>
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1"
        style="background-size: cover;background-image: url({{ asset('images/topics/bg_heroo.jpg') }})">
        <div class="container">
            <div class="row">

                <div class="container" style="margin-left: 100px;">
                    <a class="text-#387799" style="font-size: 48px;font-family:sans-serif;font-weight: bold">Bogor <span style="color:#f39f55;font-size: 48px">Single</span>  Window</a>

                    <h6 class="text-#387799" style="font-family: sans-serif;font-size:26px;font-weight: bold"><a>Portal Aplikasi Pemerintah Kota Bogor Memberikan</a>
                        <a>layanan langsung kepada semua masyarakat di Kota Bogor</a> 
                    </h6>
                    <a href="" class="bg-white p-2 text-black" style="border-radius: 20px">
                        <img src="{{ asset('images/playstore.webp') }}" alt="" width="20px">
                        Google Play Store</a>
                </div>
            </div>
        </div>
        <img src="{{ asset('images/topics/header.png') }}" style="max-width: 20%;margin-right:150px;padding-bottom:40px;">
    </section>

    <section class="featured-section" style="margin-top: -120px;z-index: 4">
        <div class="container">
            <div class="rows justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="custom-block bg-white shadow-lg p-5" style="border-radius: 15px;height:240px">
                        <h3 class="text-center mb-5" style="color: #3B7799;margin-top:-10px">Aplikasi Pilihan</h3>
                        <div class="row gap-2 justify-content-center">
                            @if (!empty($dataTerbanyak))
                                @foreach ($dataTerbanyak['data'] as $row)
                                    <div class="col-md-2">
                                        <a href="{{ isset($row['link_sso']) ? $row['link_sso'] : $row['link_website'] }}"
                                                target="_blank">
                                        <div class="card shadow" style="width: 74px;height:74px;margin-top:80px;margin-left:50px">
                                            
                                                <img class="card-img-top"
                                                    src="{{ $row['icon'] ?? 'https://bsw-landing.kotabogor.go.id/v2/img/LOGOBSW5.png' }}"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center" style="color: #3B7799;padding-top:20px">
                                                        {{ $row['nama'] ?? 'BSW' }}</h5>
                                                </div>
                                            
                                        </div>
                                    </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex  justify-content-center align-items-center position-relative">
                <div class="position-absolute start-50 translate-middle" style="top:70px; z-index:3;margin-top:-70px">
                    <a href="#section_2" class="btn btn-warning smoothscroll fa-solid fa-angle-down" style="width: 200px;height:40px;padding-top:10px;border-radius:30px;"></a>
                </div>    
            </div> 
        </div>
    </section>

    <section class="explore-section" id="section_2">
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
                                    aria-labelledby="design-tab" tabindex="0" >
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
                        <ul class="pagination justify-content-end">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
        <div class="elfsight-app-bdab699a-afe2-493b-af84-51334da16cc7" data-elfsight-app-lazy></div>
</x-app-layout>