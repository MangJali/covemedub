@include('header')


@include('nav_header',array('data'=>array('konten','artikel','rumah_sakit','tentang','login')))

<main class="text-center" style="overflow-x: hidden;">
    <section>
        <br>
        <br>
        <h1 style="font-size: 3vmax; font-weight: 700;">Selamat Datang Di COVIMED-UB</h1>
        <h3 style="font-size: 2.3vmax; font-weight: 700;" class="px-2">Covid-19 Maternal-Child Health Education Universitas Brawijaya </h3>
        <br>
        <br>
        <br>
        @if(isset($data['slider']))
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    @foreach($data['slider'] as $key => $val)
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$key}}" @if($key==0) class="active" aria-current="true" @endif aria-label="Slide 1"></button>
                    @endforeach
                </div>
                <div class="carousel-inner">
                    @foreach($data['slider'] as $key => $val)
                    <div class="carousel-item {{($key==0)?'active':''}}">
                        <img src="{{asset('upload_file/'.$val->link_gambar)}}" class="d-block w-100" alt="..." style=" border-radius: 10px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$val->judul}}</h5>
                            <p>{{$val->konten}}</p>
                        </div>
                    </div>
                    @endforeach
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
        @endif
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
                @if($data['video_left']->count()>0||$data['poster']->count()>0||$data['video_right']->count()>0)
                <h1 style="color: #353B74;font-weight: 700;" data-aos="fade-down">Video Edukasi</h1>
                @endif
            </div>
            <br>
            <br>
            <br>
            <div class="row justify-content-between">
                <div class="col-5" style="min-width: 300px;">
                    @if(isset($data['video_left']))
                    @foreach($data['video_left'] as $video)
                    <div class="row" data-aos="fade-down">
                        <iframe class="col-6" style="height:15vh; border-radius: 10px" src="https://www.youtube.com/embed/{{$video->link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h4 class="col-6 text-start"><a  style="text-decoration: none; color: #000;" href="{{url('video/'.$video->id)}}">{{$video->judul}}</a></h4>
                    </div>
                    <br>
                    <br>
                    @endforeach
                    @endif
                    @if(isset($data['poster']))
                    @foreach($data['poster'] as $poster)
                    <div class="row" data-aos="fade-down">
                        <img src="{{asset('upload_file/'.$poster->link_poster)}}" class="col-6" style="height:15vh; border-radius: 10px" alt="">
                        <h4 class="col-6 text-start"><a style="text-decoration: none; color: #000;"  href="{{url('poster/'.$poster->id)}}">{{$poster->judul}}</a></h4>
                    </div>
                    <br>
                    <br>
                    @endforeach
                    @endif
                </div>
                <div class="col-7" style="min-width: 300px;">
                    @if(isset($data['video_right']))
                    @foreach($data['video_right'] as $video)
                    <div class="videotitle">
                        <iframe data-aos="fade-up" style="width: 100%;height:40vh; border-radius: 10px;" src="https://www.youtube.com/embed/{{$video->link_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <h2 class="text-start" data-aos="fade-up"><a  style="text-decoration: none; color: #000;" href="{{url('video/'.$video->id)}}">{{$video->judul}}</a></h2>
                    </div>
                    <br>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>

    @if(isset($data['artikel']))
    <section class="position-relative" id="artikel">
        <div data-aos="fade-left" class="position-absolute top-0 end-0 " style="overflow-x: hidden;z-index: -1;">
            <img src="{{asset('assets/Health _Monochromatic.svg')}}" alt="#" style="width: 50vmax; transform: translateX(30%);" data-aos="fade-left">
        </div>
        <div class="container-xxl " style="z-index: 1;">
            <div style="font-size: 1vmax;"><br> <br> <br> <br> <br> <br></div>
            <div class="row " data-aos="fade-right">
                <div class="col-10 ">
                    <h1 class="text-start fst-italic " style="font-size: 3vmax; ">{{$data['artikel']->judul}}</h1>
                </div>
                <div class="col-8 " style="font-size: 1.5vmax; ">
                    <p class="text-start fst-italic ">{{strlen($data['artikel']->isi)>500?substr($data['artikel']->isi,0,500)."...":$data['artikel']->isi}}</p>
                    <p class="text-start fst-italic ms-0" style="font-weight: 700;"><a style="text-decoration: none; color: #353B74;" href="{{url('artikel/'.$data['artikel']->id)}}">Baca Selengkapnya<i class="bi  bi-play-fill"></i></a></p>
                </div>
            </div>
        </div>
    </section>
    @endif

    <section class="position-relative" style="overflow:hidden;" id="rumah_sakit" data-aos="fade-down">
        <div class="container">
            <br><br><br>
            <div class="d-flex justify-content-center">
                @if(isset($data['rumah_sakit']))
                <div class="card p-4 justify-content-center border-0" style="background: #6FBFDF;width: 42vmax;color: white; border-radius: 10px;">
                    <br>
                    <h3>Daftar Rumah Sakit & Puskesmas malang</h3>
                    <br>
                    <div style="font-size: 1.1rem;" class="text-start">
                        @foreach($data['rumah_sakit'] as $val)
                        <div class="row justify-content-center">
                            <div class="col-4" style="overflow: hidden;white-space: nowrap;">{{$val->nama}}</div>
                            <div class="col-3 text-center" style="overflow: hidden;white-space: nowrap;">{{$val->no_telp}}</div>
                            <div class="col-4" style="overflow: hidden;white-space: nowrap;">{{$val->alamat}}</div>
                        </div>
                        @endforeach
                    </div>
                    <br>
                    <a type="button" href="/list-rumahsakit" class="btn btn-primary border-0 m-auto ps-5 pe-5" style="border-radius:5vmax;background: #353B74;font-weight: 600;">Lihat Detail</a>
                    <br>
                </div>
                @endif
                <br>
            </div>
        </div>
        <br> <br> <br> <br>
        <div class="position-absolute bottom-0" style="z-index: -1;" data-aos="fade-up">
            <img src="{{asset('assets/component_gelombang_2.svg')}}" alt="" style="transform: translate(-8.5%,76%);width: 130%;">
        </div>
    </section>
    @include('footer')