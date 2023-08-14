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
            height: 450px;
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
    <h1>Capaian Kemajuan</h1>
    <br>

    
    <div class="box">
        <div class="capaian">
            <form id="lelang-form" action="{{ route('capai.post') }}" method="POST" enctype="multipart/form-data"> 
                @csrf
                <div class="project col-md-8">
                    <label for="project">Project yang ditugaskan </label>
                    <input type="text" class="form-control" placeholder="Project" id="project"> 
                </div>
                <br>
                <div class="tglbim col-md-2">
                    <label for="tglbim">Tanggal Bimbingan </label>
                    <input type="date" class="form-control" id="tglbim" name="tglbim"> 
                </div>
                <br>
                <div class="kemajuan col-md-8">
                    <label for="kemajuan">Kemajuan yang dicapai saat bimbingan </label>
                    <input type="text" class="form-control" placeholder="Kemajuan" id="kemajuan"> 
                </div>
                <br>
                <div class="filepres col-md-8">
                    <label for="filepres">Upload File Presentasi</label>
                    <br>
                    <input type="file" id="filepres" name="filepres">
                </div>
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