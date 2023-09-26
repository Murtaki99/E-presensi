@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Lets Scann Your ID Card</h6>
            </div>
            <div class="card-body">
                <div class="chart-scan pt-4 mb-2">
                    <div id="reader" width="500px"></div>
                     <audio id="beep" preload="auto">
                        <source src="/assets/img/beep.mp3" type="audio/mpeg">
                     </audio>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Konfigurasi Absen</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button"  id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i></a><div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <form method="post" action=" ">
                        <div class="d-flex justify-content-start pl-1">
                            <div class="form-group mb-1 mr-1">
                                <select name="kelas" id="" class="form-control-sm form-control">
                                    <option value="">Pilih Kelas</option>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                </select>
                            </div>
                            <div class="form-group mb-1 mr-1">
                                <select name="mapel" id="mapel" class="form-control-sm form-control">
                                    <option value="">Mata Pelajaran</option>
                                    <option value="Pelajaran 1">Pelajaran 1</option>
                                    <option value="Pelajaran 2">Pelajaran 2</option>
                                    <option value="Pelajaran 3">Pelajaran 3</option>
                                    <option value="Pelajaran 4">Pelajaran 4</option>
                                    <option value="Pelajaran 5">Pelajaran 5</option>
                                    <option value="Pelajaran 6">Pelajaran 6</option>
                                </select>
                            </div>
                            <div class="form-group mb-1 mr-1">
                                <select name="kelas" id="" class="form-control-sm form-control">
                                    <option value="">Pilih Kelas</option>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <small>Absensi</small>
                            <ul id="scannedList" class="list-group"></ul>
                        </div>
                        <input type="hidden" name="scannedData" id="scannedData" value="">
                        <button type="submit" class="btn btn-success btn-sm btn-user btn-block">Create</button>
                        <hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
