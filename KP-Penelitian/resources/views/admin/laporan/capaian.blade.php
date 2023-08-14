@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Capaian Kemajuan</h1>
    </div>

    
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-12 alert-dismissible fade show text-center" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="table-responsive col-lg-10">
        {{--<a href="/admin/capaian" class="btn btn-success mb-4">Capaian Kemajuan</a> --}}
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Project</th>
                    <th scope="col">Tanggal Bimbingan</th>
                    <th scope="col">Kemajuan saat bimbingan</th>
                    <th scope="col">File Presentasi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($capai as $capaian)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $capaian->project }}</td>
                        <td>{{ $capaian->tglbim }}</td>
                        <td>{{ $capaian->kemajuan }}</td>
                        <td>{{ $capaian->filepres }}</td>
                        <td>
                            {{-- <a href="/dashboard/materi/{{ $daftar->slug }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>--}}
                            {{-- <a href="/dashboard/materi/{{ $daftar->slug }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a> --}}
                            <form action="/admin/capaian{{ $daftar->slug }}" method="post" class="d-inline">
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
