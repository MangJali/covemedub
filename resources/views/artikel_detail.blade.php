@include('header')
@include('nav_header',array('data'=>['beranda','login']))
<main style="display: flex;justify-content: space-between;  flex-direction: column;min-height:100%;">
    <section id="artikel" class="position-relative">
        <div data-aos="fade-left" class="position-absolute top-0 end-0 " style="overflow-x: hidden;z-index: -1;">
            <img src="{{asset('assets/Health _Monochromatic.svg')}}" alt="#" style="width: 50vmax; transform: translateX(30%);" data-aos="fade-left">
        </div>
        <div class="container-xxl " style="z-index: 1;color:#353B74">
            <div style="font-size: 1vmax;"><br> <br> <br>
                <div class="row " data-aos="fade-right">
                    <div class="col-10 ">
                        <h1 class="text-start fst-italic " style="font-size: 3vmax; ">{{$data->judul}}</h1>
                    </div>
                    <div class="text-start fst-italic col-8 " style="font-size: 1.5vmax; ">
                        <hr>
                        <p style="white-space:pre-wrap;font-size: 1vmax;">Di posting pada {{date_format($data->created_at,"d/m/Y H:i")}}</p>
                        <p style="white-space:pre-wrap;">{{$data->isi}}</p>
                        <br>
                        <hr>
                        <br>
                        <a type="button" href="{{url('listartikel')}}" class="btn btn-primary border-0 m-auto ps-5 pe-5 float end" style="border-radius:5vmax;background: #353B74;font-weight: 600;font-size: 1.5vmax;">Lihat Artikel Lainnya</a>
                    </div>
                </div>
            </div>
    </section>
    <div style="z-index: -1; height: 15vmax;overflow: hidden;">
        <img src="{{asset('assets/component_gelombang_2.svg')}}" alt="" style="transform: translate(-8.5%,0%);width: 130%;">
    </div>
    @include('footer')