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
            width: 1000px;
            height: 250px;
            background-color: #f2f2f290;
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
<br>
    <h4>Form Pendaftaran</h4>
    <h6>di Bidang Sistem Informasi dan Statistik Diskominfosan Yk</h6>

    <br>


    <div class="indented-button gap-3 d-md-block">
        <a class="btn btn btn-outline-dark" href="{{ url('/magang/pendaftaran') }}" role="button" aria-disabled="true">Ketentuan</a>
        <a class="btn btn btn-outline-dark" href="{{ url('/magang/form') }}" role="button" aria-disabled="true">Form Daftar</a> 
    </div>

    <br>
    
    <div class="box">
        <p>1. Jadwal Bimbingan : Memilih hari Selasa atau Kamis yang masih kosong atau baru terisi 1</p>
        <p>2. Magang Wajib : memiliki ID JSS (mendaftar JSS)</p>
        <p> Untuk Komunikasi selama Bimbingan via Helpdesk JSS Panduan Install, Daftar Akun
        <p><a class="btn btn btn-outline-dark" href="https://jss.jogjakota.go.id/v4/panduan" role="button" aria-disabled="true">Lupa Password JSS</a> </p>
    </div>

    <br>
    <br>
</body>

    <footer style=" background-color: #72826A">
        <div class="footer">
            <div class="container" style="color: white;">
                <div class="row">
                    <div clas="col">
                        <p>Dinas Komunikasi, Informatika dan Persandian </p>
                        <p>Jl. Kenari No. 56 Yogyakarta Telp. (0274) 515865, 561270 </p>
            
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>