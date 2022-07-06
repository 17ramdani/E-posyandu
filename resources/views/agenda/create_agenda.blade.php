@extends('layout.template')

@section('content')
<div class="min-height-300 bg-info position-absolute w-100"></div>
@include('layout.sidebar')
<main class="main-content position-relative border-radius-lg ">
    @include('layout.navbar')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-3">
                <h1>Tambah Agenda</h1> 
            </div>
        </div>

        <div class="row ">
            <form action="{{ url ('/agenda/store') }}" method="POST">
                @csrf
                <div class="card bg-gradient-gray m-3 col-md-11">
                <div class="card-body m-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for=""> Nama Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" id="kegiatan" placeholder="Imunisasi Balita">
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Kegiatan </label>
                        <input type="text" class="form-control" name="tempat" id="tempat" placeholder="Posyandu Bandung">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Mulai</label>
                        <input type="date" class="form-control" name="start" id="start">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Selesai</label>
                        <input type="date" class="form-control" name="end" id="end">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kegiatan</label>
                        <select class="form-control" name="j_kegiatan" id="j_kegiatan">
                            <option value=" KIA"> KIA</option>
                            <option value=" KB"> KB</option>
                            <option value=" Imunisasi"> Imunisasi</option>
                            <option value="Gizi">Gizi</option>
                            <option value="Penanggulangan diare">Penanggulangan diare</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Dilaksanakan Pukul 9 Pagi">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>

                    <div class="form-group">
                        <a href="{{ url ('/agenda') }}">Kembali Ke Halaman Utama</a>
                    </div>
                </div>
                </div>
            </div>
            </form>
           
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
