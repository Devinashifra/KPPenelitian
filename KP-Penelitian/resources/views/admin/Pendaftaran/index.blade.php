@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pendaftaran</h1>
    </div>

    
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12 alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        {{--<a href="/admin/pendaftaran" class="btn btn-success mb-4">Pendaftaran KP-Penelitian</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Permohonan</th>
                    <th scope="col">Surat Dari Kampus</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">ID JSS</th>
                    <th scope="col">No WA</th>
                    <th scope="col">Email</th>
                    <th scope="col">Kampus</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Judul Project</th>
                    <th scope="col">Deskripsi Project</th>
                    <th scope="col">Penugasan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($daftars as $daftar)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $daftar->jenisperm }}</td>
                        <td>{{ $daftar->surperm }}</td>
                        <td>{{ $daftar->jenis }}</td>
                        <td>{{ $daftar->namanim }}</td>
                        {{-- <td>{!! $daftar->daftarharga->kelas_bus !!}</td> --}}
                        <td>{{ $daftar->idjss }}</td>
                        <td>{{ $daftar->nowa }}</td>
                        <td>{{ $daftar->emailindi }}</td>
                        <td>{{ $daftar->kampus }}</td>
                        <td>{{ $daftar->tglmul }}</td>
                        <td>{{ $daftar->tglsel }}</td>
                        <td>{{ $daftar->judul }}</td>
                        <td>{{ $daftar->despro }}</td>
                        <td>{{ $daftar->nugas }}</td>
                        <td>
                            {{-- <a href="/dashboard/materi/{{ $daftar->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>--}}
                            {{-- <a href="/dashboard/materi/{{ $daftar->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a> --}}
                            <form action="/admin/pendaftaran{{ $daftar->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Anda yakin ingin menghapus data ini?')"><span
                                        data-feather="trash-2"></span></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
