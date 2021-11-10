@include('header')
@include('nav_header',array('data'=>['beranda','login']))
<main style="display: flex;justify-content: space-between;  flex-direction: column;min-height:100%;">
    <section id="artikel" class="position-relative">
        <div data-aos="fade-left" class="position-absolute top-0 end-0 " style="overflow-x: hidden;z-index: -1;">
            <img src="{{asset('assets/Health _Monochromatic.svg')}}" alt="#" style="width: 50vmax; transform: translateX(30%);" data-aos="fade-left">
        </div>
        <div class="container-xxl " style="z-index: 1;color:#353B74">
            <form action="{{url('listartikel')}}" class="col-sm-12 mt-5 me-4" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Judul artikel" value="{{isset($_GET['query'])?$_GET['query']:''}}" name="query" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
            <div style="font-size: 1vmax;"><br> <br> <br>
                @foreach($data->items() as $value)
                <div class="row " data-aos="fade-right">
                    <div class="col-10 ">
                        <h1 class="text-start fst-italic " style="font-size: 3vmax; ">{{$value->judul}}</h1>
                    </div>
                    <div class="text-start fst-italic col-8 " style="font-size: 1.5vmax; ">
                        <hr>
                        <p style="white-space:pre-wrap;font-size: 1vmax;">Di posting pada {{date_format($value->created_at,"d/m/Y H:i")}}</p>
                        <p style="white-space:pre-wrap;">{{strlen($value->isi)>500?substr($value->isi,0,500)."...":$value->isi}}</p>
                        <p class="text-start fst-italic ms-0" style="font-weight: 700;"><a style="text-decoration: none; color: #353B74;" href="{{url('artikel/'.$value->id)}}">Baca Selengkapnya<i class="bi  bi-play-fill"></i></a></p>
                        <br>
                        <hr>
                        <br>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    @if($data->previousPageUrl())
                    <a href="{{$data->previousPageUrl().(isset($_GET['query'])?'&query='.$_GET['query']:'')}}" class="btn btn-outline-primary">Sebelumnya</a>
                    @endif
                    @if($data->nextPageUrl())
                    <a href="{{$data->nextPageUrl().(isset($_GET['query'])?'&query='.$_GET['query']:'')}}" class="btn btn-primary ms-5">Selanjutnya</a>
                    @endif
                </div>
            </div>
    </section>
    <div style="z-index: -1; height: 15vmax;overflow: hidden;">
        <img src="{{asset('assets/component_gelombang_2.svg')}}" alt="" style="transform: translate(-8.5%,0%);width: 130%;">
    </div>
    @include('footer')