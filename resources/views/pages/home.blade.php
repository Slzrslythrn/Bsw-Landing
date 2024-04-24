<x-app-layout>
    <section class="hero-section d-flex justify-content-center align-items-center" id="section_1"
        style="background-image: url({{ asset('images/f7d145bcffd5035fea7950858eb96664.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-4">
                    <img src="{{ asset('images/header.png') }}" alt="">
                </div>
                <div class="col-lg-8 col-12 mx-auto ">
                    <h1 class="text-white">Bogor Single Window</h1>
                    <h6 class="text-white">Portal Aplikasi Pemerintah Kota Bogor Memberikan layanan
                        langsung kepada semua masyarakat di Kota Bogor
                    </h6>
                    <a href="" class="bg-white p-2 text-black" style="border-radius: 20px">
                        <img src="{{ asset('images/playstore.webp') }}" alt="" width="20px">
                        Google Play Store</a>
                </div>

            </div>
        </div>

    </section>

    <section class="featured-section">
        <div class="container">
            <div class="rows justify-content-center">
                <div class="col-lg-12 col-12">
                    <div class="custom-block bg-white shadow-lg p-5" style="border-radius: 15px">
                        <h3 class="text-center mb-5" style="color: #3B7799">Aplikasi Pilihan</h3>
                        <div class="row gap-2 justify-content-center">
                            @if (!empty($dataTerbanyak))
                                @foreach ($dataTerbanyak['data'] as $row)
                                    <div class="col-md-2">
                                        <div class="card shadow" style="width: 11rem;">
                                            <a href="{{ isset($row['link_sso']) ? $row['link_sso'] : $row['link_website'] }}"
                                                target="_blank">
                                                <img class="card-img-top"
                                                    src="{{ $row['icon'] ?? 'https://bsw-landing.kotabogor.go.id/v2/img/LOGOBSW5.png' }}"
                                                    alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title text-center" style="color: #3B7799">
                                                        {{ $row['nama'] ?? 'BSW' }}</h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
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
</x-app-layout>
