<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Penelitian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caprasimo">

    
    <style>
        nav, body{
            background-image: url('/img/ruang2.png'); 
            background-size: cover;
            /* background-repeat: no-repeat; */
            /* background-position: center; */
            /* background-color: pink; */
            /* background-color: #D2DFBD; */
            /* background-color: #F7D060; */
        }
        body{
            /* background-image: linear-gradient(#F7B267,#F79D65,#F4845F,#F27059,#F25C54); */
            /* background-color: #D2DFBD; */
        }
        .row{
            padding: 125px 0;
            text-align: center;
            /* font-family: Caprasimo; */
            justify-content: center;
            align-items: center;
        }
        .card{
            width: 180px;
            height: 240px;
            /* background-color: #D2DFBD; */
            /* background-color: #F7D060; */
            outline: 0px ;
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
        /* .card-body{
            position: ;
        } */
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
                        <a class="nav-link active" aria-current="page" href="#">Magang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>
<body>

    <div class="row sm:justify-center items-center pt-6 sm:pt-0">
        <div class="col-sm-2">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/akunjss.png" class="card-img-top" alt="" >
                    <div class="card-body">
                        <a href="{{ url('/magang/pendaftaran') }}" class="btn"><b>Pendaftaran</b></a>
                    </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/templet.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="https://docs.google.com/presentation/d/1Vq5TnI3cT1Cy5ncLBRHrz2vmuMDanQkDd8FlWcmZOTE/edit?usp=sharing" class="btn"><b>Template Presentasi</b></a>
                    </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/jadwal.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="https://calendar.google.com/calendar/u/0/r?cid=czFlMWk3bmM5bWc1Z2luN25nbTU0OWk0Z2dAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ" class="btn"><b>Jadwal Tersedia</b></a>
                    </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/proter.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="{{ url('/magang/project') }}" class="btn"><b>Project Tersedia</b></a>
                    </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/templet.png" class="card-img-top "  alt="">
                    <div class="card-body">
                        <a href="https://docs.google.com/document/d/1nnAf64xu7qFpLJlBELJXYZvxXZmPLx37gkfU5SX7u_E/edit?pli=1" class="btn"><b>Template Penilaian</b></a>
                    </div>
            </div>
        </div>
    </div>
    
</body>



</html>