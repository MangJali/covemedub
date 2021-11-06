<header class="rounded p-2">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">
                <h1 style="font-weight: 700;">COVIMED-UB</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if (in_array("beranda", $data)) { ?>
                        <li class=" nav-item pull-sm-right">
                            <a class=" nav-link " href=" {{url('')}} ">BERANDA</a>
                        </li>
                    <?php } ?>
                    <?php if (in_array("konten", $data)) { ?>
                        <li class=" nav-item pull-sm-right">
                            <a class=" nav-link " href=" #content ">KONTEN</a>
                        </li>
                    <?php } ?>
                    <?php if (in_array("artikel", $data)) { ?>
                        <li class=" nav-item pull-sm-right">
                            <a class=" nav-link" href="#artikel">ARTIKEL</a>
                        </li>
                    <?php } ?>
                    <?php if (in_array("rumah_sakit", $data)) { ?>
                        <li class=" nav-item ">
                            <a class=" nav-link " href=" #rumah_sakit">RUMAH SAKIT</a>
                        </li>
                    <?php } ?>
                    <?php if (in_array("tentang", $data)) { ?>
                        <li class=" nav-item ">
                            <a class=" nav-link " href="{{url('tentang')}}">TENTANG</a>
                        </li>
                    <?php } ?>
                    <?php if (in_array("login", $data)) { ?>
                        <li class=" nav-item ms-5">
                            @guest
                            <a class=" nav-link " href="{{url('login')}}">LOGIN</a>
                            @endguest
                            @auth
                            <a class=" nav-link " href="{{url('login')}}">ADMIN</a>
                            @endauth
                        </li>
                    <?php } ?>
                    <?php if (in_array("logout", $data)) { ?>
                        <li class=" nav-item ms-5">
                            <a class=" nav-link " href="{{ route('logout') }}" onclick="event.preventDefault();                                                     
                            document.getElementById('logout-form').submit();">LOGOUT</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    <?php } ?>




                </ul>
            </div>
        </div>
    </nav>
</header>