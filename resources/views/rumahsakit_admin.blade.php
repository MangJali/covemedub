<section>
    <div class="container mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        <form action="{{url('admin/rumahsakit/create')}}" method="POST">
            @csrf
            <div class="d-flex justify-content-between">
                <h1>Tambah Rumah Sakit</h1>
                <button type="submit" class="btn btn-primary ps-5 pe-5" style="font-weight: 700;border-radius:15px">Simpan</button>
            </div>
            <hr>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kota" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jenis" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tipe</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tipe" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">No. Telp</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_telp" value="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="" required>
                </div>
            </div>
        </form>
    </div>
</section>
<section>
    <div class="container mt-5">
        <div class="mb-3 row justify-content-between">
            <h1 class="col">List Rumah Sakit</h1>
            <form action="{{url('admin/rumahsakit')}}" class="col-sm-12" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nama rumah sakit" value="{{isset($_GET['query'])?$_GET['query']:''}}" name="query" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
        <hr>
        <?php $start = (($paginate->currentPage() - 1) * $paginate->perPage() + 1) ?>
        @foreach($paginate->items() as $val)
        <div class="row justify-content-between mb-1">
            <h5 class="col">#{{$start++}}</h5>
            <div class="col d-flex justify-content-end">
                <button class="btn btn-outline-dark" data-json="{{json_encode($val)}}" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                <form action="{{url('admin/rumahsakit/remove/'.$val->id)}}" class="ms-2" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger">delete</button>
                </form>
            </div>
        </div>
        <form action="">
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="staticEmail" value="{{$val->nama}}" placeholder="-" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="staticEmail" value="{{$val->kota}}" placeholder="-" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jenis</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="staticEmail" value="{{$val->jenis}}" placeholder="-" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Tipe</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="staticEmail" value="{{$val->tipe}}" placeholder="-" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">No. Telp</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="staticEmail" value="{{$val->no_telp}}" placeholder="-" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="staticEmail" value="{{$val->alamat}}" placeholder="-" required>
                </div>
            </div>
        </form>
        <hr>
        @endforeach
        <div class="d-flex justify-content-center">
            @if($paginate->previousPageUrl())
            <a href="{{$paginate->previousPageUrl().(isset($_GET['query'])?'&query='.$_GET['query']:'')}}" class="btn btn-outline-primary">Sebelumnya</a>
            @endif
            @if($paginate->nextPageUrl())
            <a href="{{$paginate->nextPageUrl().(isset($_GET['query'])?'&query='.$_GET['query']:'')}}" class="btn btn-primary ms-5">Selanjutnya</a>
            @endif
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Rumah Sakit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="edit_form" method="POST">
                <div class="modal-body">
                    @csrf
                    @method('put')
                    <input type="hidden" class="form-control" name="id" value="" required>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kota</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kota" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Jenis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="jenis" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Tipe</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tipe" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">No. Telp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_telp" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget
        var obj = JSON.parse(button.getAttribute('data-json'))
        var input_id = document.getElementById('edit_form')
        var form = document.forms['edit_form']
        form.action = "{{url('admin/rumahsakit/edit')}}/" + obj.id
        form["id"].value = obj.id
        form["nama"].value = obj.nama
        form["kota"].value = obj.kota
        form["jenis"].value = obj.jenis
        form["tipe"].value = obj.tipe
        form["no_telp"].value = obj.no_telp
        form["alamat"].value = obj.alamat
    })
</script>