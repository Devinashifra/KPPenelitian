@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan Akhir</h1>
    </div>

    
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12 alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        {{--<a href="/admin/laporan" class="btn btn-success mb-4">Laporan Akhir</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Permohonan</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Upload File Laporan</th>
                    <th scope="col">Upload Tanda Tangan DPL</th>
                    <th scope="col">Upload Link Drive</th>
                    <th scope="col">Upload File KP / Penelitian</th>
                    <th scope="col">Upload Nilai KP</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($akhir as $laporan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $laporan->jenisperm }}</td>
                        <td>{{ $laporan->jenis }}</td>
                        <td>{{ $laporan->filelap }}</td>
                        <td>{{ $laporan->ttddpl }}</td>
                        <td>{{ $laporan->linkdrive }}</td>
                        <td>{{ $laporan->presentasi }}</td>
                        <td>{{ $laporan->nilai }}</td>
                        <td>
                            {{-- <a href="/dashboard/materi/{{ $daftar->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>--}}
                            {{-- <a href="/dashboard/materi/{{ $daftar->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a> --}}
                            <form action="/admin/laporan{{ $daftar->slug }}" method="post" class="d-inline">
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
