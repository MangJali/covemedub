@include('header')


    @include('nav_header',array('data'=>array('beranda','login')))

    <main class="text-center">

        <section class="justify-content-center pt-5 mt-5">
            <div class="container">
                <h1>Daftar Rumah Sakit di Malang</h1>
                <div class="list text-start pt-5 mt-5" style="color: black;">
                    <div class="row" style="font-weight: 700;font-size:1vmax">
                        <div class="col-3 ">Nama Rumah Sakit</div>
                        <div class="col-1 text-center">Jenis</div>
                        <div class="col-1 text-center">Kelas</div>
                        <div class="col-2 text-center">Kota</div>
                        <div class="col-2 text-center">No Telp</div>
                        <div class="col-3 ">Alamat</div>
                    </div>
                    <br>
                    @foreach ($data as $val)
                    <div class="row" style="font-weight: 500;font-size:1vmax">
                        <div class="col-3">{{$val->nama}}</div>
                        <div class="col-1 text-center">{{$val->jenis}}</div>
                        <div class="col-1 text-center">{{ $val->tipe }}</div>
                        <div class="col-2 text-center">{{$val->kota}}</div>
                        <div class="col-2 text-center">{{$val->no_telp}}</div>
                        <div class="col-3">{{$val->alamat}}</div>
                    </div>
                    <hr>
                    @endforeach

                </div>
        </section>

        @include('gelombang')
        @include('footer')