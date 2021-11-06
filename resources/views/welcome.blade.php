@include('header')


@include('nav_header',array('data'=>array('konten','artikel','rumah_sakit','tentang','login')))

<main class="text-center" style="overflow-x: hidden;">
    <section>
        <br>
        <br>
        <h1 style="font-size: 3vmax; font-weight: 700;">Welcome to COVIMED-UB</h1>
        <h3 style="font-size: 2.3vmax; font-weight: 700;" class="px-2">Covid-19 Material-Child Healt Education Universitas Brawijaya </h3>
        <br>
        <br>
        <br>
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('assets/cover.jpg')}}" class="d-block w-100" alt="..." style=" border-radius: 10px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/cover.jpg')}}" class="d-block w-100" alt="..." style=" border-radius: 10px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('assets/cover.jpg')}}" class="d-block w-100" alt="..." style=" border-radius: 10px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section>

    <section id="content">
        <br>
        <br>
        <br>
        <div class="container-xxl" style="color: black;">
            <div class="text-center">
                <h1 style="color: #353B74;font-weight: 700;" data-aos="fade-down">Video Edukasi</h1>
            </div>
            <br>
            <br>
            <br>
            <div class="row justify-content-between">
                <div class="col-4" style="min-width: 300px;">
                    <iframe data-aos="fade-down" style="width: 100%;height:25vh; border-radius: 10px" src="https://www.youtube.com/embed/jPxpk0r2PM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br>
                    <br>
                    <iframe data-aos="fade-down" style="width: 100%;height:25vh; border-radius: 10px" src="https://www.youtube.com/embed/jPxpk0r27M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br>
                    <br>
                    <iframe data-aos="fade-down" style="width: 100%;height:25vh; border-radius: 10px" src="https://www.youtube.com/embed/jPxpk0rP7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br>
                    <br>
                    <iframe data-aos="fade-down" style="width: 100%; height:25vh; border-radius: 10px" src="https://www.youtube.com/embed/jPxpk0rP7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-7" style="min-width: 300px;">
                    <div class="videotitle">
                        <iframe data-aos="fade-up" style="width: 100%;height:40vh; border-radius: 10px;" src="https://www.youtube.com/embed/6v7LZJgR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2 class="text-start" data-aos="fade-up">Video ini memberi informasi terkait penyesuaian pemeriksaan kehamilan selama pandemi covid-19</h2>
                    </div>
                    <br>
                    <div class="videotitle">
                        <iframe data-aos="fade-up" style="width: 100%;height:40vh; border-radius: 10px;" src="https://www.youtube.com/embed/6v7LVPJR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2 data-aos="fade-up" class="text-start">Video ini memberi informasi terkait penyesuaian pemeriksaan kehamilan selama pandemi covid-19</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative" id="artikel">
        <div data-aos="fade-left" class="position-absolute top-0 end-0 " style="overflow-x: hidden;z-index: -1;">
            <img src="{{asset('assets/Health _Monochromatic.svg')}}" alt="#" style="width: 50vmax; transform: translateX(30%);" data-aos="fade-left">
        </div>
        <div class="container-xxl " style="z-index: 1;">
            <div style="font-size: 1vmax;"><br> <br> <br> <br> <br> <br></div>
            <div class="row " data-aos="fade-right">
                <div class="col-10 ">
                    <h1 class="text-start fst-italic " style="font-size: 3vmax; ">Pentingnya Kesehatan Kehamilan di Masa Covid-19 </h1>
                </div>
                <div class="col-8 " style="font-size: 1.5vmax; ">
                    <p class="text-start fst-italic ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <p class="text-start fst-italic ms-0" style="font-weight: 700;">Baca Selengkapnya<i class="bi  bi-play-fill"></i></p>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative" style="overflow:hidden;" id="rumah_sakit" data-aos="fade-down">
        <div class="container">
            <br><br><br>
            <div class="d-flex justify-content-center">
                <div class="card p-4 justify-content-center border-0" style="background: #6FBFDF;width: 42vmax;color: white; border-radius: 10px;">
                    <br>
                    <h3>Daftar Rumah Sakit & Puskesmas malang</h3>
                    <br>
                    <div style="font-size: 1.1rem;" class="text-start">
                        @foreach($data as $val)
                        <div class="row justify-content-center">
                            <div class="col-4">{{$val->nama}}</div>
                            <div class="col-3">{{$val->no_telp}}</div>
                            <div class="col-4">{{$val->alamat}}</div>
                        </div>
                        <hr>
                        @endforeach
                    </div>
                    <br>
                    <a type="button" href="/list-rumahsakit" class="btn btn-primary border-0 m-auto ps-5 pe-5" style="border-radius:5vmax;background: #353B74;font-weight: 600;">Lihat Detail</a>
                    <br>
                </div>
                <br>
            </div>
        </div>
        <br> <br> <br> <br>
        <div class="position-absolute bottom-0" style="z-index: -1;" data-aos="fade-up">
            <img src="{{asset('assets/component_gelombang_2.svg')}}" alt="" style="transform: translate(-8.5%,76%);width: 130%;">
        </div>
    </section>
    @include('footer')