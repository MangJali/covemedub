<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Headers · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background: #f5f5f5;
        }
        
        main {
            color: #353B74;
        }
        
        header {
            border: 1px solid;
            border-color: #78E3D4;
        }
        
        .navbar-light .navbar-brand {
            color: #353B74;
        }
        
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .show>.nav-link {
            font-weight: 700;
            color: #353B74;
        }
        
        .navbar-light .navbar-nav .nav-link {
            font-weight: 700;
            color: #353B74;
        }
        /* width */
        
         ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }
        /* Track */
        
         ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px grey;
            border-radius: 10px;
        }
        /* Handle */
        
         ::-webkit-scrollbar-thumb {
            background: grey;
            border-radius: 10px;
        }
        /* Handle on hover */
        
         ::-webkit-scrollbar-thumb:hover {
            background: #353B74;
        }
    </style>
</head>

<body>

    <main>

        <header class="rounded p-2">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <h1 style="font-weight: 700;">COVIDMEN-UB</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class=" nav-item pull-sm-right">
                                <a class=" nav-link active " aria-current=" page " href=" #content ">KONTEN</a>
                            </li>
                            <li class=" nav-item ">
                                <a class=" nav-link " href=" # ">RUMAH SAKIT</a>
                            </li>
                            <li class=" nav-item ">
                                <a class=" nav-link " href=" # ">TENTANG</a>
                            </li>
                            <li class=" nav-item ms-5">
                                <a class=" nav-link " href=" # ">LOGIN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="text-center">
            <section>
                <br>
                <br>
                <h1 style="font-size: 3vmax; font-weight: 700;">Welcome to COVIDMEN-UB</h1>
                <h3 style="font-size: 2.3vmax; font-weight: 700;" class="px-2">Covid-19 Material-Child Healt Education Universitas Brawijaya </h3>
                <br>
                <br>
                <br>
                <img src="./assets/undraw_medicine_b1ol.svg" alt="#" style="width: 40vmax;">
                <br>
                <br>
                <br>
            </section>

            <section id="content">
                <br>
                <br>
                <br>
                <div class="container-xxl" style="color: black;">
                    <div class="row">
                        <div class="col-5">
                            <iframe style="width: 100%; border-radius: 10px" src="http://www.youtube.com/embed/jPxpk0r2P7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <br>
                            <iframe style="width: 100%; border-radius: 10px" src="http://www.youtube.com/embed/jPxpk0r2P7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <br>
                            <iframe style="width: 100%; border-radius: 10px" src="http://www.youtube.com/embed/jPxpk0r2P7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br>
                            <br>
                            <iframe style="width: 100%; border-radius: 10px" src="http://www.youtube.com/embed/jPxpk0r2P7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="col-7 ms-auto">
                            <div class="videotitle">
                                <iframe style="width: 100%; border-radius: 10px;" src="http://www.youtube.com/embed/6v7LVPZJgR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h2 class="text-start">Video ini memberi informasi terkait penyesuaian pemeriksaan kehamilan selama pandemi covid-19</h2>
                            </div>
                            <br>
                            <div class="videotitle">
                                <iframe style="width: 100%; border-radius: 10px;" src="http://www.youtube.com/embed/6v7LVPZJgR4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <h2 class="text-start">Video ini memberi informasi terkait penyesuaian pemeriksaan kehamilan selama pandemi covid-19</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="position-relative">
                <div class="position-absolute top-0 end-0" style="overflow-x: hidden;z-index: -1;">
                    <img src="Health _Monochromatic.svg" alt="#" style="width: 50vmax; transform: translateX(30%);">
                </div>
                <div class="container-xxl " style="z-index: 1;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="row ">
                        <div class="col-10 ">
                            <h1 class="text-start fst-italic " style="font-size: 3vmax; ">Pentingnya Kesehatan Kehamilan di Masa Covid-19 </h1>
                        </div>
                        <div class="col-8 " style="font-size: 1.5vmax; ">
                            <p class="text-start fst-italic ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                                Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <p class="text-start fst-italic ms-0" style="font-weight: 700;">Baca Selengkapnya<i class="bi  bi-play-fill"></i></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="position-relative" style="overflow:hidden;">
                <div class="container">
                    <br><br><br>
                    <div class="d-flex justify-content-center">
                        <div class="card p-3 justify-content-center border-0" style="background: #6FBFDF;width: 40vmax;color: white; border-radius: 10px;">
                            <br>
                            <h3>Daftar Rumah Sakit & Puskesmas malang</h3>
                            <br>
                            <div class="row">
                                <div class="col-4">RSUD Kota Malang</div>
                                <div class="col-4">Senin - Jum'at</div>
                                <div class="col-4">Jl. Rajasa No.27 Kota Malang</div>
                            </div>
                            <div class="row">
                                <div class="col-4">RSUD Kota Malang</div>
                                <div class="col-4">Senin - Jum'at</div>
                                <div class="col-4">Jl. Rajasa No.27 Kota Malang</div>
                            </div>
                            <div class="row">
                                <div class="col-4">RSUD Kota Malang</div>
                                <div class="col-4">Senin - Jum'at</div>
                                <div class="col-4">Jl. Rajasa No.27 Kota Malang</div>
                            </div>
                            <div class="row">
                                <div class="col-4">RSUD Kota Malang</div>
                                <div class="col-4">Senin - Jum'at</div>
                                <div class="col-4">Jl. Rajasa No.27 Kota Malang</div>
                            </div>
                            <div class="row">
                                <div class="col-4">RSUD Kota Malang</div>
                                <div class="col-4">Senin - Jum'at</div>
                                <div class="col-4">Jl. Rajasa No.27 Kota Malang</div>
                            </div>
                            <br>
                            <button class="btn btn-primary border-0 m-auto" style="width: 10vmax;border-radius:5vmax;background: #353B74;font-weight: 600;">Lihat Detail</button>
                            <br>
                        </div>
                        <br>
                    </div>
                </div>
                <br> <br> <br> <br>
                <div class="position-absolute bottom-0" style="z-index: -1;">
                    <img src="./assets/component_gelombang_2.svg" alt="" style="transform: translate(-8.5%,76%);width: 130%;">
                </div>
            </section>
        </main>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>