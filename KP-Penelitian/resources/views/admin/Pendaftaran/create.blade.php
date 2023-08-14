@extends('dashboard.admin.pendaftaran')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Pendaftaran</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/admin/pendaftaran" class="mb-5" enctype="multipart/form-data">
            
            <div class="row g-3">
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Nama_Lengkap" class="col-form-label">Nama Lengkap</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Nama_Lengkap') is-invalid @enderror"
                            id="Nama_Lengkap" name="Nama_Lengkap" placeholder="Nama Lengkap" required autofocus
                            value="{{ old('Nama_Lengkap') }}">
                        @error('Nama_Lengkap')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="NIM" class="col-form-label">NIM</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM"
                            name="NIM" placeholder="NIM" required autofocus value="{{ old('NIM') }}">
                        @error('NIM')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="ID_JSS" class="col-form-label">ID_JSS</label>
                    </div>
                    <div class="col-sm-8">
                        <select class="form-select" id="ID_JSS" name="ID_JSS"
                            placeholder="ID_JSS" required autofocus>
                            @foreach ($ID_JSS as $ID_JSS)
                                @if (old('ID_JSS') == $ID_JSS->id)
                                    <option value="{{ $ID_JSS->id }}" selected>
                                        {{ $ID_JSS->kelas_bus }}</option>
                                @else
                                    <option value="{{ $ID_JSS->id }}">{{ $harga->kelas_bus }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Tgl_Keberangkatan" class="col-form-label">Tanggal Pemesanan</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="date" class="form-control @error('Tgl_Keberangkatan') is-invalid @enderror"
                            id="Tgl_Keberangkatan" name="Tgl_Keberangkatan" required autofocus
                            value="{{ old('Tgl_Keberangkatan') }}">
                        @error('Tgl_Keberangkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Jlh_Penumpang" class="col-form-label">Jumlah Beli</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Jlh_Penumpang') is-invalid @enderror"
                            id="Jlh_Penumpang" name="Jlh_Penumpang" placeholder="Jumlah" required
                            autofocus value="{{ old('Jlh_Penumpang') }}">
                        @error('Jlh_Penumpang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Harga_Tiket" class="col-form-label">Harga</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Harga_Tiket') is-invalid @enderror"
                            id="Harga_Tiket" name="Harga_Tiket" placeholder="Harga" required autofocus
                            value="{{ old('Harga_Tiket') }}">
                        @error('Harga_Tiket')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-sm-4">
                        <label for="Total_Bayar" class="col-form-label">Total Bayar</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control @error('Total_Bayar') is-invalid @enderror"
                            id="Total_Bayar" name="Total_Bayar" placeholder="Total Bayar" required autofocus
                            value="{{ old('Total_Bayar') }}">
                        @error('Total_Bayar')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <hr class="my-4">
            <div class="justify-content-center mb-5">
                <button class="btn btn-primary btn-lg" type="">
                    Hitung Total Bayar</button>
                <button class="btn btn-primary btn-lg mx-4" id="submit">Pesan
                    Tiket</button>
                <button class="btn btn-danger btn-lg" id="clear">Cancel</button>
            </div>
        </form>
    </div>
@endsection
