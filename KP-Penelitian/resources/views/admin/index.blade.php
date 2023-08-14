@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h1">Welcome</h1>
    </div>


    <div class="row row-cols-1 row-cols-md-3 g-5">
        <div class="col">
            <div class="h-100 p-3 rounded-3" style="background-color: #D2DFBD;">
                <h2 class="card-title">Pendaftaran</h2>
                <a href="/admin/pendaftaran" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
        <div class="col">
            <div class="h-100 p-3  rounded-3" style="background-color: #D2DFBD;">
                <h2 class="card-title">Capaian Kemajuan</h2>
                <a href="/admin/capaian" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
        <div class="col">
            <div class="h-100 p-3 rounded-3" style="background-color: #D2DFBD;">
                <h2 class="card-title">Laporan Akhir</h2>
                <a href="/admin/laporan" class="btn btn-secondary">Selengkapnya &raquo;</a>
            </div>
        </div>
    </div>
@endsection
