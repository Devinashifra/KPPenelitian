@include('layouts.navigation')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Penelitian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{   
           background-color: #D2DFBD;
        }
        .row{
            padding: 5px 0;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        h1{
            text-indent: 30px;
        }
        .indented-button{
            padding-left: 30px;
        }
        .box {
            width: 1100px;
            height: 650px;
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

</head>
<body>
    <br>
    <h1>Laporan Akhir</h1>
    <br>

    
    <div class="box">
        <div class="laporakh">
            <form id="laporan-form" action="{{ route('laporan.post') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
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
                <div class="jenis col-md-8">
                    <select class="form-select" id="jenis" name="jenis" required>
                        <option selected disabled value="">Jenis</option>
                        <option value="indivi">Individu</option>
                        <option value="kel">Kelompok</option>
                    </select>
                </div>   
                <br>
                <div class="filelap col-md-8">
                    <label for="filelap">Upload File Laporan</label>
                    <br>
                    <input type="file" id="filelap" name="filelap">
                </div>
                <br>
                <div class="ttddpl col-md-8">
                    <label for="ttddpl">Upload Lembar yang butuh tanda tangan Dosen Pembimbing Lapangan ( Dari Diskominfosan )</label>
                    <input type="file" id="ttddpl" name="ttddpl">
                    <!-- <label for="filesp" class="form-label">Surat Permohonan dari kampus</label>
                    <input class="form-control" type="file" id="filesp"> -->
                </div>
                <br>
                <div class="linkdrive col-md-8">
                    <label for="linkdrive">Upload Link Drive Hasil KP ( source code programe )</label>
                    <input type="file" id="linkdrive" name="linkdrive">
                    <!-- <label for="filesp" class="form-label">Surat Permohonan dari kampus</label>
                    <input class="form-control" type="file" id="filesp"> -->
                </div>
                <br>
                <div class="presentasi col-md-8">
                    <label for="presentasi">Upload file presentasi selama KP / Penelitian (*.ppt , *.pptx ) :</label>
                    <input type="file" id="presentasi" name="presentasi">
                    <!-- <label for="filesp" class="form-label">Surat Permohonan dari kampus</label>
                    <input class="form-control" type="file" id="filesp"> -->
                </div>
                <br>
                <div class="nilai col-md-8">
                    <label for="nilai">Upload form penilaian KP</label>
                    <br>
                    <input type="file" id="nilai" name="nilai">
                    <!-- <label for="filesp" class="form-label">Surat Permohonan dari kampus</label>
                    <input class="form-control" type="file" id="filesp"> -->
                </div>
                <br>
                <p>Setelah mengupload Laporan Akhir di mohon untuk memverifikasi melalui WhatsApp</p>
                <br>
                <div class="btna">
                    <button class="button" id="submit">Kirim</button>
                </div>
        </div>
    </div>

    <br>
</body>

</html>

<x-app-layout>
</x-app-layout>