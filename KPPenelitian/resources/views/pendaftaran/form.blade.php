<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Penelitian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=IrishGrover"> -->

    <style>
        body,nav{
            background-image: url('/img/ruang2.png'); 
            background-size: cover;
            /* background-repeat: no-repeat; */
            background-position: center;
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
            height: 1325px;
            background-color: #f2f2f290;
            padding: 20px;
            margin-left: 30px;
            border-radius: 10px;
            text-align: left;
        }
        .button{
            /* display: inline-block; */
            padding: 10px 25px;
            cursor: pointer;
            text-align: center;
            /* padding-left: 100px; */
            text-decoration: none;
            color: #fff;
            background-color: #4E4949;
            border: none;
            border-radius: 10px;
            font-family: cursive;
        }
        .btna{
            padding-left: 700px;
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
    <h4>Form Pendaftaran</h4>
    <h6>di Bidang Sistem Informasi dan Statistik Diskominfosan Yk</h6>

    <br>

    <div class="indented-button gap-3 d-md-block">
        <a class="btn btn-outline-dark" href="{{ url('/pendaftaran') }}" type="button">Ketentuan</a>
        <a class="btn btn-outline-dark" href="{{ url('/form') }}" type="button">Form Daftar</a>
    </div>

    <br>
    
    <div class="box">
        <div class="datakp">
            <form id="lelang-form" action="/magang/form" method="POST" enctype="multipart/form-data"> 
                @csrf
                <div class="email col-md-8">
                    <label for="email">Email :</label>
                    <input type="email" class="form-control" placeholder="Email" id="email"> 
                </div>
                <br>
                <div class="jenperm col-md-8">
                    <select class="form-select" id="jenisperm" name="jenisperm" required>
                        <option selected disabled value="">Jenis Permohonan</option>
                        <option value="KP">Kerja Praktek</option>
                        <option value="Penelitian">Penelitian</option>
                    </select>
                    <!-- <label for="jenisperm">Jenis Permohonan</label>
                    <br>
                    <input type="radio" id="kp" name="fav_language" value="KP">
                    <label for="kp">Kerja Praktek</label><br>
                    <input type="radio" id="penelitian" name="fav_language" value="penelitian">
                    <label for="penelitian">Penelitian</label><br> -->
                </div>   
                <br>
                <div class="surperm col-md-8">
                    <label for="filesp" class="form-label">Surat Permohonan dari kampus</label>
                    <input class="form-control" type="file" id="filesp">
                </div>
                <br>
                <div class="jenis col-md-8">
                    <select class="form-select" id="jenis" name="jenis" required>
                        <option selected disabled value="">Jenis</option>
                        <option value="indivi">Individu</option>
                        <option value="kel">Kelompok</option>
                    </select>
                    <!-- <label for="jenis">Jenis</label>
                    <br>
                    <input type="radio" id="indi" name="fav_language" value="indi">
                    <label for="indi">Individu</label><br>
                    <input type="radio" id="kel" name="fav_language" value="kel">
                    <label for="kel">Kelompok</label><br> -->
                </div>   
                <br>
                <div class="namanim col-md-8">
                    <label for="namanim">Nama Lengkap, NIM (Individu/Ketua Kelompok): </label>
                    <input type="namanim" class="form-control" placeholder="Nama/NIM" id="namanim" name="namanim"> 
                </div>
                <br>
                <div class="idjss col-md-8">
                    <label for="idjss">ID JSS (Individu/Ketua Kelompok): </label>
                    <input type="idjss" class="form-control" placeholder="ID JSS" id="idjss" name="idjss"> 
                </div>
                <br>
                <div class="nowa col-md-8">
                    <label for="nowa">No WhatsApp (Individu/Ketua Kelompok): </label>
                    <input type="nowa" class="form-control" placeholder="No WhatsApp" id="nowa" name="nowa"> 
                </div>
                <br>
                <div class="emailindi col-md-8">
                    <label for="emailindi">Email (Individu/Ketua Kelompok): </label>
                    <input type="emailindi" class="form-control" placeholder="Email" id="emailindi" name="emailindi"> 
                </div>
                <br>
                <div class="kampus col-md-8">
                    <label for="kampus">Kampus: </label>
                    <select class="form-select" id="kampus" name="kampus" required>
                        <option selected disabled value="">Kampus</option>
                        <option value="ugm">Universitas Gadjah Mada</option>
                        <option value="uny">Universitas Negreri Yogyakarta</option>
                        <option value="umy">Universitas Muhammadiyah Yogyakarta</option>
                        <option value="uad">Universitas Ahmad Dahlan</option>
                        <option value="uii">Universitas Islam Indonesia</option>
                        <option value="uty">Universitas Teknik Yogyakarta</option>
                        <option value="atma">Universitas Atma Jaya Yogyakarta</option>
                    </select>
                </div>
                <br>
                <div class="tglmul col-md-2">
                    <label for="tglmul">Tanggal Mulai: </label>
                    <input type="date" class="form-control" id="tglmul" name="tglmul"> 
                </div>
                <br>
                <div class="tglsel col-md-2">
                    <label for="tglsel">Tanggal Selesai: </label>
                    <input type="date" class="form-control" id="tglsel" name="tglsel"> 
                </div>
                <br>
                <div class="judul col-md-8">
                    <label for="judul">Judul Project yang ditujukan untuk Diskominfosan: </label>
                    <input type="text" class="form-control" placeholder="Judul Project" id="judul"> 
                </div>
                <br>
                <div class="despro col-md-8">
                    <label for="despro">Deskripsi Project: </label>
                    <input type="text" class="form-control" placeholder="Deskripsi Project" id="despro"> 
                </div>
                <br>
                <div class="nugas col-md-8">
                    <label for="nugas">Penugasan: </label>
                    <input type="text" class="form-control" placeholder="Penugasan" id="nugas"> 
                </div>
                <br>
                <div class="btna">
                    <button class="button" id="submit">Kirim</button>
                </div>
        </div>
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
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>