@include('header')
@include('nav_header',array('data'=>['beranda','logout']))
<main style="min-height:100%;position: relative;height:100%">
    <section class="mt-5">
        <div class="container">
            <div class="row justify-content-between">
                <a href="{{ url('admin/artikel')}}" class="btn {{($data['menu'] == 'artikel')?'bg-secondary text-white':'bg-light border border-dark'}} col m-1 p-3 text-center" style="border-radius: 15px;font-weight: 700;">ARTIKEL</a>
                <a href="{{ url('admin/rumahsakit')}}" class="btn {{($data['menu'] == 'rumahsakit')?'bg-secondary text-white':'bg-light border border-dark'}} col m-1 p-3 text-center" style="border-radius: 15px;font-weight: 700">RUMAH SAKIT</a>
                <a href="{{ url('admin/video')}}" class="btn {{($data['menu'] == 'video')?'bg-secondary text-white':'bg-light border border-dark'}} col m-1 p-3 text-center " style="border-radius: 15px;font-weight: 700">VIDEO</a>
                <a href="{{ url('admin/poster')}}" class="btn {{($data['menu'] == 'poster')?'bg-secondary text-white':'bg-light border border-dark'}} col m-1 p-3 text-center" style="border-radius: 15px;font-weight: 700">POSTER</a>
            </div>
        </div>
    </section>

    <section>
        @if($data['menu']=='artikel')

        @endif
        @if($data['menu']=='rumahsakit')
        @endif
        @if($data['menu']=='video')
        @endif
        @if($data['menu']=='video')
        @endif
    </section>

    <div class="position-absolute bottom-0" style="z-index: -1; height: 15vmax;overflow: hidden;">
        <img src="{{asset('assets/component_gelombang_2.svg')}}" alt="" style="transform: translate(-8.5%,-0%);width: 130%;">
    </div>
    @include('footer')