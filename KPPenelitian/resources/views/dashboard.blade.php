<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Penelitian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caprasimo">

    <style>
        nav{
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

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand">KP Penelitian</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" style="font-weight: bold;">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item" style="font-weight: bold;">
                        <a class="nav-link active" aria-current="page" href="#">Alur dan Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Magang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alur dan Panduan</li>
        </ol>
    </nav> -->
    <!-- <nav class="navbar sticky-top bg-body-tertiary" style="--bs-breadcrumb-divider: '>'; font-color: #000000" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/index') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Alur dan Panduan</li>
            <li class="breadcrumb-item active" aria-current="page">JSS</li>
            <li class="breadcrumb-item active" aria-current="page">Magang</li>
            <li class="breadcrumb-item active" aria-current="page">Laporan</li>
        </ol>
    </nav> -->
</head>
<body>
    <div class="row sm:justify-center items-center pt-6 sm:pt-0">
        <div class="col-sm-3">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/akp.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="https://drive.google.com/file/d/1edmluyUixLjZ4ONgB9x7sAL2D1E4As_z/view" class="btn"><b>Alur Kerja Praktek</b></a>
                    </div>
                </div>
            </div>
        
        <div class="col-sm-3">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/panduan.png" class="card-img-top" alt="" >
                    <div class="card-body" >
                        <a href="https://docs.google.com/document/d/18MTJJ2lfO7cCuekA1WAfEjBX1N_RkzL7PqrJ4WFtMOE/edit" class="btn"><b>Panduan</b></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
    
</html>

        
    </div>
</x-app-layout>

