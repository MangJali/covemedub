@include('header')
@include('nav_header',array('data'=>['beranda']))
<main style="min-height:100%;position: relative;height:100%">
    <section>
        <div class="container" style="height: 100%; margin:auto">
            <div class="d-flex justify-content-center">
                <div style="width: 25vmax;background:#353B74;border-radius:10px;padding:3vmax;margin:10vmax auto">
                    <form action="#" method="POST">
                        <h1 style="color:white">Masuk</h1>
                        <br>
                        <input type="email" placeholder="Username" class="form-control p-3" style="font-weight: 600;border-radius:10px">
                        <br>
                        <input type="password" placeholder="Password" class="form-control p-3" style="font-weight: 600;border-radius:10px">
                        <br>
                        <br>
                        <div class="text-center"><button class="btn btn-primary" style="background: #787B95;border:none;border-radius:10px;width: 10vmax">Masuk</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="position-absolute bottom-0" style="z-index: -1; height: 15vmax;overflow: hidden;">
        <img src="{{asset('assets/component_gelombang_2.svg')}}" alt="" style="transform: translate(-8.5%,-0%);width: 130%;">
    </div>
    @include('footer')