<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Penelitian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caprasimo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">

    <style>
        nav{
            background-color: #D2DFBD;
        }
        .row{
            padding: 5px 0;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        h4, h6{
            text-indent: 30px;
        }
        .indented-button{
            padding-left: 30px;
        }
        .box {
            width: 1100px;
            height: 1300px;
            background-color: #EEF7E390;
            padding: 20px;
            margin-left: 30px;
            font-family: Inter;
            border-radius: 10px;
        }

    </style>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand">KP Penelitian</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="font-weight: bold;">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item" style="font-weight: bold;">
                        <a class="nav-link active" aria-current="page" href="{{ url('/alurdanpanduan') }}">Alur dan Panduan</a>
                    </li>
                    <li class="nav-item" style="font-weight: bold;">
                        <a class="nav-link active" aria-current="page" href="{{ url('/magang') }}">Magang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>
<body>
    <br>
    <center><h4>Project Tersedia</h4></center>
    <center><h6>Tentang Pembuatan Aplikasi</h6></center>

    <br>

    <div class="indented-button gap-3 d-md-block">
        <a class="btn btn btn-outline-dark" href="{{ url('/magang/project') }}" role="button" aria-disabled="true">Aplikasi</a>
        <a class="btn btn btn-outline-dark" href="{{ url('/magang/desain') }}" role="button" aria-disabled="true">Desain Grafis</a> 
        <a class="btn btn btn-outline-dark" href="{{ url('/magang/penggunaan') }}" role="button" aria-disabled="true"> Video Tutorial dan Penggunaan Aplikasi</a> 
        <a class="btn btn btn-outline-dark" href="{{ url('/magang/jss') }}" role="button" aria-disabled="true"> Video Pendukung JSS</a> 
    </div>

    <br>
    
    <div class="box">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Aplikasi</th>
                    <th scope="col">Definisi</th>
                    <th scope="col">Fitur Dibutuhkan</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Aplikasi SIM Cuti</td>
                    <td>Aplikasi pengelolaan pengajuan cuti</td>
                    <td>Pengajuan cuti, verifikasi permohonan cuti, laporan rekap permohonan cuti ( slot, terpakai, sisa, akumulasi )</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Aplikasi Katalog Aplikasi</td>
                    <td>Aplikasi pengelolaan Katalog Aplikasi</td>
                    <td>Nama Aplikasi,  Framework Yg Digunakan ( CI/ Laravel ), Database ( Mysql, Postgree, Oracle )Yg Digunakan, Riwayat Versi, Detail Pembaruan Per Versi, Rencana Penambahan/Perbaikanmodul Di Next Versi</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Aplikasi Pelaporan Bugs</td>
                    <td>Aplikasi untuk pengelolaan bugs handling </td>
                    <td>Pencatatan Bugs, Penugasan Perbaikan Bugs ( DSI & Programmer ), Pelacakan Progress Perbaikan Bugs</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Aplikasi Sertifikat Pelatihan</td>
                    <td>Aplikasi untuk membuat sertifikat pelatihan</td>
                    <td>Pengelolaan Data Pelatihan ( Nama Pelatihan, Tanggal Pelatihan, Nama Peserta), Fitur : Edit, Font Styling, Typografi, Ukuran Kertas Form, Orienatasi ( Landscape / Portrait ) & Cetak Sertifikat</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Aplikasi Transmigrasi</td>
                    <td>Aplikasi pengelolaan data transmigrasi </td>
                    <td>Pengelolaan Data Kerjasama Daerah ( Dengan Daerah Tujuan Transmigrasi ), Pengelolaan Data Keberangkatan ( Daerah/Kota Tujuan, Tgl Berangkat, Kuota Peserta Transmigrasi ), Pengelolaan Permohonan Warga Peserta Transmigrasi ( Permohonan Warga Dan Verifikasi Permohonan Oleh Verifikator )</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Aplikasi Pengajuan Produk Hukum</td>
                    <td>Aplikasi Pegajuan Produk Hukum</td>
                    <td>Informasi Alur Pengajuan Produk Hukum, Penyediaan Template Naskah Hukum, Timeline Pengajuan Produk Hukum ( Pengajuan Draft Produk Hukum, Telaah Draft Produk Hukum ( Propem Perkada ), Koreksi 1, Koreksi 2, History ( Catatan / Koreksi ) ), Master Tahapan Alur Pengajuan Produk Hukum Oleh Admin Bagian Hukum</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Aplikasi Kalendar Event</td>
                    <td>Aplikasi Kalender Event</td>
                    <td>Pendaftaran Event, Verifikasi Endaftaran Event, Pendaftraan Pengunjung Event, Verifikasi Pengunjung Event - Tiketing</td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Aplikasi Blog Jss</td>
                    <td>Aplikasi Pengelolaan Blog JSS</td>
                    <td>Profil Per Layanan JSS, Cerita Pengguna Yg Mendapatkan Manfaat, Fitur Teknologi JSS, Kerjasama Teknologi JSS, Event Yg Menggunakan Layanan JSS</td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Aplikasi KBS Online</td>
                    <td>Aplikasi Konsultasi Belajar Siswa</td>
                    <td>Manajemen Konten Q&A, Manajemen User ( Admin, Guru ), Konten ( Materi, Podcast Audio, Video Youtube Talkshow )</td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Aplikasi Pembayaran Retribusi Oline</td>
                    <td>Aplikasi Pembayaran Retribusi Online</td>
                    <td>Master Retribusi, Pengelolaan Data Pelanggan, Cek Info Tagihan, Riwayat Pembayaran, Transaksi Pembayaran</td>
                    </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Aplikasi Pengajuan Izin DPMPTSP</td>
                    <td>Aplikasi Pengajuan Izin Dinas PMPTSP</td>
                    <td>Master Izin, Informasi Syarat Dokumen Dan Alur Permohonan Izin, Pengajuan Izin, Verifikasi Izin, Kunjungan Lapangan, Laporan Permohonan Izin</td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Aplikasi Manajemen Resiko SPBE</td>
                    <td>Aplikasi Manajemen Resiko SPBE</td>
                    <td>Master Aset, Master Resiko, Master Dampak Resiko, Frekuensi Kejadian Reisiko, Tindaklanjut Bila Resiko Terjadi. Lingkup : Hardware Software, Sumber Daya Manusia</td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>Aplikasi Sim Lelang Pemanfaatan BMD</td>
                    <td>Aplikasi Lelang Pemanfataan Barang Milik Daerah</td>
                    <td>Master BMD, Penjadwalan, Proses Lelang, Penentuan Pemenang</td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>Aplikasi Data Dan Statistik</td>
                    <td>Analisis Data, Olah Data</td>
                    <td>Pemagang Direkomendasikan Telah Menguasai Software : Table Dan Atau Bahasa Python</td>
                </tr>
            </tbody>
        </table>
    </div>

    <br>
</body>

    <footer style=" background-color: #72826A">
        <div class="footer">
            <div class="container" style="color: white;">
                <div class="row">
                    <div clas="col">
                        <br>
                        <p>Dinas Komunikasi, Informatika dan Persandian </p>
                        <p>Jl. Kenari No. 56 Yogyakarta Telp. (0274) 515865, 561270 </p>
            
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>