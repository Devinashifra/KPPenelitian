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
            height: 580px;
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
    <center><h6>Tentang Pembuatan Video Pendukung JSS</h6></center>

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
                    <th scope="col">Video</th>
                    <th scope="col">Langkah yang dilakukan</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Panduan Mengubah No WA di Akun JSS</td>
                    <td>Login JSS  mobile > Foto Profil > Data Akun > Data Pribadi > No. Whatsapp</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Panduan Mengubah No Telp di Akun JSS</td>
                    <td>Login JSS  mobile > Foto Profil > Data Akun > Data Pribadi > No. Telp</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Panduan Mengubah Email di Akun JSS</td>
                    <td>Login JSS  mobile > Foto Profil > Data Akun > Data Pribadi > Email</td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Panduan Mengedit Nama (NIK Luar Kota)</td>
                    <td>Login JSS  mobile > Foto Profil > Data Akun > Data Probadi > Nama</td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Panduan Connect di Freehotspot</td>
                    <td>Login JSS  mobile > cari : "wifi" . Referensi : https://drive.google.com/file/d/13cdvcpogOkGzNUDXrQsVAIr_enIF675Y/view?usp=sharing</td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Cara User JSS Mengecek apakah WA terdaftarnya ( tervalidasi / belum )</td>
                    <td>Login JSS  mobile > Foto Profil > Verifiaksi Akun</td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Panduan Lapor Pengaduan di JSS</td>
                    <td>Login JSS  mobile > Pengaduan</td>
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