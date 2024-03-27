@extends('layout.main')
@section('content')
<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data Jabatan Pegawai</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Data Jabatan Pegawai</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Nav-->
    <div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Data Master Jabatan </h5>
                    <br>
                    <div class="text-start">
                        <button class="btn btn-primary">Tambah Jabatan</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIP</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;1</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;19860926 201505 2 001</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Salasa Nopa Munika</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Kepala Sekolah</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" style="padding: 4px;"><img src="https://i.pinimg.com/originals/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.png" width="16" height="16" alt="Edit" style="filter: brightness(0) invert(1);"></button>
                                        <button class="btn btn-sm btn-danger" style="padding: 4px;"><img src="https://www.iconpacks.net/icons/1/free-trash-icon-347-thumb.png" width="16" height="16" alt="Hapus" style="filter: brightness(0) invert(1);"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;2</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;19981022 201423 1 001</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Hanif Al Aslam</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Komite Sekolah</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" style="padding: 4px;"><img src="https://i.pinimg.com/originals/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.png" width="16" height="16" alt="Edit" style="filter: brightness(0) invert(1);"></button>
                                        <button class="btn btn-sm btn-danger" style="padding: 4px;"><img src="https://www.iconpacks.net/icons/1/free-trash-icon-347-thumb.png" width="16" height="16" alt="Hapus" style="filter: brightness(0) invert(1);"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;3</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;19860421 201602 1 002</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Dimas Aqil Salsabil</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Unit Perpustakaan</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" style="padding: 4px;"><img src="https://i.pinimg.com/originals/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.png" width="16" height="16" alt="Edit" style="filter: brightness(0) invert(1);"></button>
                                        <button class="btn btn-sm btn-danger" style="padding: 4px;"><img src="https://www.iconpacks.net/icons/1/free-trash-icon-347-thumb.png" width="16" height="16" alt="Hapus" style="filter: brightness(0) invert(1);"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;4</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;19990419 201312 2 001</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Nadya Amanda Putri</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Tata Usaha</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" style="padding: 4px;"><img src="https://i.pinimg.com/originals/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.png" width="16" height="16" alt="Edit" style="filter: brightness(0) invert(1);"></button>
                                        <button class="btn btn-sm btn-danger" style="padding: 4px;"><img src="https://www.iconpacks.net/icons/1/free-trash-icon-347-thumb.png" width="16" height="16" alt="Hapus" style="filter: brightness(0) invert(1);"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;5</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;19880126 202107 2 002</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Bella Rossa Yuniarti</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Waka Kurikulum</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" style="padding: 4px;"><img src="https://i.pinimg.com/originals/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.png" width="16" height="16" alt="Edit" style="filter: brightness(0) invert(1);"></button>
                                        <button class="btn btn-sm btn-danger" style="padding: 4px;"><img src="https://www.iconpacks.net/icons/1/free-trash-icon-347-thumb.png" width="16" height="16" alt="Hapus" style="filter: brightness(0) invert(1);"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;6</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;19960411 201602 2 001</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Nurwahidah</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Waka Kesiswaan</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" style="padding: 4px;"><img src="https://i.pinimg.com/originals/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.png" width="16" height="16" alt="Edit" style="filter: brightness(0) invert(1);"></button>
                                        <button class="btn btn-sm btn-danger" style="padding: 4px;"><img src="https://www.iconpacks.net/icons/1/free-trash-icon-347-thumb.png" width="16" height="16" alt="Hapus" style="filter: brightness(0) invert(1);"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;7</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;19930629 202019 1 003</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Surmanto</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Waka Sarpras</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" style="padding: 4px;"><img src="https://i.pinimg.com/originals/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.png" width="16" height="16" alt="Edit" style="filter: brightness(0) invert(1);"></button>
                                        <button class="btn btn-sm btn-danger" style="padding: 4px;"><img src="https://www.iconpacks.net/icons/1/free-trash-icon-347-thumb.png" width="16" height="16" alt="Hapus" style="filter: brightness(0) invert(1);"></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;8</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;19860421 201602 1 002</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Muhammad Wahdi</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;Waka Humas</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary" style="padding: 4px;"><img src="https://i.pinimg.com/originals/53/79/9d/53799d51a62bd28cb04c8a4c57f054c9.png" width="16" height="16" alt="Edit" style="filter: brightness(0) invert(1);"></button>
                                        <button class="btn btn-sm btn-danger" style="padding: 4px;"><img src="https://www.iconpacks.net/icons/1/free-trash-icon-347-thumb.png" width="16" height="16" alt="Hapus" style="filter: brightness(0) invert(1);"></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection