@extends('layout.template')

@section('content')
<div class="min-height-300 bg-success position-absolute w-100"></div>
@include('layout.sidebar')
<main class="main-content position-relative border-radius-lg ">
    @include('layout.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Lihat Data Anak</h1>
            </div>
        </div>

        <div class="row">
            <form action="{{ url ('/anak/update/' .$data->id)  }}" method="POST">
                @csrf
                <div class="card bg-gradient-gray m-3 col-lg-11">
                <div class="card-body m-3">
                <div class="col-lg-12 mb-3">
                    <div class="form-group">
                        <label class="col-sm-2 col-form-label">Nama Anak</label>
                        <input type="text" class="form-control" name="nama_anak" id="nama_anak"  value="{{$data->nama_anak }}">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lhr" id="tempat_lhr" value="{{$data->tempat_lhr }}">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lhr" id="tgl_lhr" value="{{$data->tgl_lhr }}">
                    </div>
                    <div class="form-group">
                        <label for="">BB Lahir</label>
                        <input type="text" class="form-control" name="bb_lahir" id="bb_lahir" value="{{$data->bb_lahir }}">
                    </div>
                    <div class="form-group">
                        <label for="">TB Lahir</label>
                        <input type="text" class="form-control" name="tb_lahir" id="tb_lahir" value="{{$data->tb_lahir }}">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="{{$data->jenis_kelamin }}"> >
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Anak Ke</label>
                        <input type="text" class="form-control" name="anak_ke" id="anak_ke" value="{{$data->anak_ke }}">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Persalinan</label>
                        <input type="text" class="form-control" name="jenis_persalinan" id="jenis_persalinan" value="{{$data->jenis_kelamin }}">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Persalinan</label>
                        <input type="text" class="form-control" name="tempat_persalinan" id="tempat_persalinan" value="{{$data->tempat_persalinan }}">
                    </div>
                    <div class="form-group">
                        <label for="">Dokter</label>
                        <input type="text" class="form-control" name="dokter" id="dokter" value="{{$data->dokter }}">
                    </div>
                    <div class="form-group">
                        <label for="">NIK Anak</label>
                        <input type="text" class="form-control" name="NIK_anak" id="NIK_anak" value="{{$data->NIK_anak }}">
                    </div>
                    <div class="form-group">
                        <label for="">BPJS Anak</label>
                        <input type="text" class="form-control" name="BPJS_anak" id="BPJS_anak" value="{{$data->BPJS_anak }}">
                    </div>
                </div>
                <div class="form-group">
                    <a href="{{ url ('/anak') }}">Kembali Ke Halaman Utama</a>
                </div>
            </div>
        </div>

            </form>
        </div>
    </div>
    </div>
    </div>





    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Theme</h5>
                    <p>Pilih Warna Kesukaanmu</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0 overflow-auto">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-success active" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="d-flex">
                    <button class="btn bg-gradient-success w-100 px-3 mb-2 active me-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                    <button class="btn bg-gradient-success w-100 px-3 mb-2" data-class="bg-default"
                        onclick="sidebarType(this)">Dark</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="d-flex my-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)">
                    </div>
                </div>
                <hr class="horizontal dark my-sm-4">
                <div class="mt-2 mb-5 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
