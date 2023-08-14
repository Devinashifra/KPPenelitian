@include('layouts.navigation')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Penelitian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caprasimo">

    <style>
        body{
           
            background-color: #D2DFBD;
        }
        .row{
            padding: 125px 0;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        .card{
            width: 180px;
            height: 240px;
        }
        .card-img-top {
            width: 180px;
            height: 150px;
            justify: center;
            align-items: center;
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
            /* top: 75%;
            left: 75%;
            translate: -50% -50%; */
        }
    </style>

    
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row sm:justify-center items-center pt-6 sm:pt-0">
        <div class="col-sm-3">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/lapkem.png" class="card-img-top" alt="" >
                    <div class="card-body" >
                        <a href="{{ url('/capaian') }}" class="btn"><b>Laporan Kemajuan</b></a>
                    </div>
                </div>
            </div>
        
        <div class="col-sm-3">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/laporakh.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="{{ url('/laporan') }}" class="btn"><b>Laporan Akhir Periode</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
    
</html>

<x-app-layout>

    
</x-app-layout>
