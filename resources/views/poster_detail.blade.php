@include('header')
@include('nav_header',array('data'=>['beranda','login']))
<main style="display: flex;justify-content: space-between;  flex-direction: column;min-height:100%;">
    <section id="artikel" class="position-relative">
        <div data-aos="fade-left" class="position-absolute top-0 end-0 " style="overflow-x: hidden;z-index: -1;">
            <img src="{{asset('assets/Health _Monochromatic.svg')}}" alt="#" style="width: 50vmax; transform: translateX(30%);" data-aos="fade-left">
        </div>
        <div class="container-xxl " style="z-index: 1;color:#353B74">
            <div style="font-size: 1vmax;" class="justify-content-center"><br> <br> <br>
                <img src="{{asset('upload_file/'.$data->link_poster)}}" class="w-100" style="max-width:800px; border-radius: 10px" alt="">
                <div class="row " data-aos="fade-right">
                    <div class="col-10 ">
                        <h1 class="text-start fst-italic " style="font-size: 3vmax; ">{{$data->judul}}</h1>
                    </div>
                    <div class="col-8 " style="font-size: 1.5vmax; ">
                        @foreach(explode("\n",$data->konten) as $s)
                        <p class="text-start fst-italic ">{{$s}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    <div style="z-index: -1; height: 15vmax;overflow: hidden;">
        <img src="{{asset('assets/component_gelombang_2.svg')}}" alt="" style="transform: translate(-8.5%,0%);width: 130%;">
    </div>
    @include('footer')