@include('header')

@include('nav_header',array('data'=>['beranda','login']))

<main class="text-center">

    <section class="position-relative mt-4 pt-5 pb-5">
        <div class="position-absolute top-0 end-0" style="overflow: hidden;z-index: -1;">
            <img src="{{ asset('assets/Team meeting_Two Color.svg') }}" alt="#"
                style="width: 50vmax; transform: translate(60%,-20%);">
        </div>
        <div style="font-size: 1vmax;"><br><br><br><br><br></div>
        <div class="container-xxl " style="z-index: 1;">
            <div class="row justify-content-center">
                <div class="col-8 " style="font-size: 1.5vmax; ">
                    <h1 class="text-start fst-italic " style="font-size: 2vmax; font-weight:700">Tentang Kami, </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8 " style="font-size: 1.5vmax; ">
                    <p class="text-start fst-italic ">COVIMED (COVID-19 Maternal-Child Education) merupakan website yang
                        berisikan informasi Kesehatan untuk ibu dan janinnya, khususnya selama Pandemi Covid-19. Ibu dan
                        keluarga akan mendapatkan informasi seputar pemeriksaan kehamilan selama pandemic Covid-19,
                        tanda bahaya kehamilan, penyakit yang muncul selama masa kehamilan, dll.</p>
                </div>
            </div>
        </div>
        <div style="font-size: 1vmax;"><br><br><br><br><br><br><br><br><br></div>
        <div class="position-absolute bottom-0 start-0" style="overflow: hidden;z-index: -1;">
            <img src="{{ asset('assets/Team meeting_Two Color.svg') }}" alt="#"
                style="width: 50vmax; transform: translate(-50%,5%);">
        </div>
    </section>

    <section class="justify-content-center">
        <h1 class=" fst-italic">Team Leader</h1>
        <div class="container pt-5 mt-5">
            <div class="row justify-content-center">
                <div class="col-3 justify-content-center">
                    <img class="w-100 rounded-circle" src="{{ asset('assets/NsDefi.jpg') }}" alt="">
                    <br>
                    <br>
                    <H3 style="font-weight: 700; font-size: 1.5vmax;">Muladefi Choiriyah</H3>
                    <H4 style="font-weight: 600; font-size: 1.5vmax;">Keperawatan Maternitas</H4>
                </div>
                <div class="col-3 justify-content-center">
                    <img class="w-100 rounded-circle" src="{{ asset('assets/NsAyut.jpg') }}" alt="">
                    <br>
                    <br>
                    <H3 style="font-weight: 700;font-size: 1.5vmax;">Ayut Merdikawati</H3>
                    <H4 style="font-weight: 600;font-size: 1.5vmax;">Keperawatan Maternitas</H4>
                </div>
                <div class="col-3 justify-content-center">
                    <img class="w-100 rounded-circle" src="{{ asset('assets/avatar_cewek.svg') }}" alt="">
                    <br>
                    <br>
                    <H3 style="font-weight: 700;font-size: 1.5vmax;">Faizatul Amalia</H3>
                    <H4 style="font-weight: 600;font-size: 1.5vmax;">Teknologi Informasi</H4>
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center">
                <div class="col-3 justify-content-center">
                    <img class="w-100 rounded-circle" src="{{ asset('assets/sabrina.jpg') }}" alt="">
                    <br>
                    <br>
                    <H3 style="font-weight: 700;font-size: 1.5vmax;">Sabrina Ekaristy</H3>
                    <H4 style="font-weight: 600;font-size: 1.5vmax;">Keperawatan</H4>
                </div>
                <div class="col-3 justify-content-center">
                    <img class="w-100 rounded-circle" src="{{ asset('assets/nabila.jpg') }}" alt="">
                    <br>
                    <br>
                    <H3 style="font-weight: 700;font-size: 1.5vmax;">Nabilah</H3>
                    <H4 style="font-weight: 600;font-size: 1.5vmax;">Keperawatan</H4>
                </div>
                <div class="col-3 justify-content-center">
                    <img class="w-100 rounded-circle" src="{{ asset('assets/Virda.png') }}" alt="">
                    <br>
                    <br>
                    <H3 style="font-weight: 700;font-size: 1.5vmax;">Virda Dwi Cahyati</H3>
                    <H4 style="font-weight: 600;font-size: 1.5vmax;">Keperawatan</H4>
                </div>
                <div class="col-3 justify-content-center">
                    <img class="w-100 rounded-circle" src="{{ asset('assets/vara.png') }}" alt="">
                    <br>
                    <br>
                    <H3 style="font-weight: 700;font-size: 1.5vmax;">Vera Adhimah</H3>
                    <H4 style="font-weight: 600;font-size: 1.5vmax;">Keperawatan </H4>
                </div>
            </div>
        </div>
    </section>

    @include('gelombang')
    @include('footer')
