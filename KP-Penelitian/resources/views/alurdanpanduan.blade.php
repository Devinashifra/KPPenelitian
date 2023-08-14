<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KP Penelitian</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Caprasimo">

    <style>
        /* nav{
            background-color: #F7D060;
        }  */
        body{
            /* background-image: linear-gradient(#F7B267,#F79D65,#F4845F,#F27059,#F25C54); */
            /* background-color: #FFEECC; */
            background-image: url('/img/ruang2.png'); 
            background-size: cover;
        }
        /* nav{
            background-color: #F79D65;
        } */

        .row{
            padding: 125px 0;
            text-align: center;
            justify-content: center;
            align-items: center;
        }
        .card{
            width: 180px;
            height: 240px;
            /* background-color:transparent; */
            /* background-color: #9BE8D8; */
        }
        .card-img-top {
            width: 180px;
            height: 150px;
            justify: center;
            align-items: center;
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }
        /* .btn{
            background-color: #ffffff;
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
                        <a class="nav-link active" aria-current="page" href="#">Alur dan Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Magang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>
<body>
    <div class="row sm:justify-center items-center pt-6 sm:pt-0" >
        <div class="col-sm-3">
            <div class="card text-center">
                <img src="{{ asset ('icon') }}/akp.png" class="card-img-top" alt="">
                    <div class="card-body">
                        <a href="https://drive.google.com/file/d/1edmluyUixLjZ4ONgB9x7sAL2D1E4As_z/view" class="btn"><b>Alur Kerja Praktek</b></a>
                    </div>
                </div>
            </div>
        
        <div class="col-sm-3" >
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

<footer class="p-3 mt-3">
        <div class="footer">
            <div class="container" style="bottom: 10px; color: white;">
            <br>
            <br>
            <br>
            </div>
        </div>
    </footer>
    
</html>