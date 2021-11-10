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
                <a href="{{ url('admin/slider')}}" class="btn {{($data['menu'] == 'slider')?'bg-secondary text-white':'bg-light border border-dark'}} col m-1 p-3 text-center" style="border-radius: 15px;font-weight: 700">Slider</a>
            </div>
        </div>
    </section>

    @if($data['menu']=='artikel')
    @include('artikel',array('paginate'=>$data['paginate']))
    @endif
    @if($data['menu']=='rumahsakit')
    @include('rumahsakit_admin',array('paginate'=>$data['paginate']))
    @endif
    @if($data['menu']=='video')
    @include('video',array('paginate'=>$data['paginate']))
    @endif
    @if($data['menu']=='poster')
    @include('poster',array('paginate'=>$data['paginate']))
    @endif
    @if($data['menu']=='slider')
    @include('slider',array('paginate'=>$data['paginate']))
    @endif

    <div style="height: 12vmax;"></div>
    @include('gelombang')
    @include('footer')