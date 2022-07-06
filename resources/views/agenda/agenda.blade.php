@extends('layout.template')

@section('content')
@include('sweetalert::alert')
<div class="min-height-300 bg-info position-absolute w-100"></div>
@include('layout.sidebar')
<main class="main-content position-relative border-radius-lg ">
    @include('layout.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-8  "> 
                <h1>Agenda Posyandu</h1>
                <a href="{{ url ('/agenda/create') }}" class="btn btn-primary mt-3"><i class="fa-solid fa-plus"></i> Agenda</a>
            </div>

            <div class="card ">
            <div class="card-body px-0 pt-0 pb-2 m-2">
            <div class="table-responsive p-0"">
            <table class=" table text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kegiatan</th>
                        <th>Tempat</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Jenis Kegiatan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                @foreach($data as $dataAgenda)
                <tr>
                    <td>{{ $dataAgenda->id }}</td>
                    <td>{{ $dataAgenda->kegiatan }}</td>
                    <td>{{ $dataAgenda->tempat }}</td>
                    <td>{{ $dataAgenda->start }}</td>
                    <td>{{ $dataAgenda->end }}</td>
                    <td>{{ $dataAgenda->j_kegiatan }}</td>
                    <td>{{ $dataAgenda->keterangan }}</td>
                    <td>
                        <a href="{{ url ('/agenda/show/' .$dataAgenda->id) }}" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        <a href="{{ url('/agenda/destroy/'.$dataAgenda->id) }}" " 
                            onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </tr>
                @endforeach
                </table>
            </div>
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
