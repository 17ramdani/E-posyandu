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
            <span class="badge filter bg-gradient-success active" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="d-flex">
          <button class="btn bg-gradient-success w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-success w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>



    <div class="content-wrapper">
      <div class="row grid-margin">
        <div class="col-12">
         <form action="{{ route('antrian.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tambah Data Pasien</h4>
              <div class="form-group row">
                <div class="col-lg-3">
                  <label class="col-form-label">Nama Pasien</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" maxlength="25" name="nama_pasien" id="defaultconfig" type="text" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-3">
                  <label class="col-form-label">Tanggal</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" maxlength="20" name="tgl_daftar" id="defaultconfig-2" type="date" placeholder="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-3">
                  <label class="col-form-label">Nomor Antrian</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" maxlength="10" name="no_antrian" id="defaultconfig-3" type="text" placeholder="Nomor Antrian">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-3">
                  <label class="col-form-label">Nama Dokter</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" maxlength="10" name="nama_dokter" id="defaultconfig-3" type="text" placeholder="Nomor Antrian">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-3">
                  <label class="col-form-label">Nama Poli</label>
                </div>
                <div class="col-lg-8">
                  <input class="form-control" maxlength="10" name="nama_poli" id="defaultconfig-3" type="text" placeholder="Nomor Antrian">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-8">
                  <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                  <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </div>
              </div>
            </div>
          </div>
         </form>
        </div>
      </div>
    </div>