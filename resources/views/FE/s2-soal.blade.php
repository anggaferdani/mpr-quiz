<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">


    <style>
        .top-content h2{
            font-family: 'Press Start 2P', system-ui;
            color: #5785DD;
        }
        .text-sesi h1{
            font-family: 'Press Start 2P', system-ui;
            font-size: 7.5vw;
            color: #00CED4;
        }
        .text-sesi h3{
            font-family: "Poppins", sans-serif;
            font-weight: bold;
            font-size: 3vw;
            color: #FF3421;
        }

        .tanya-sesi2{
            height: 100vh;
            width: 100%;
            object-fit: contain;
        }
        .countdown{
        width: 5rem;
        height: 5rem;
        border: 1px solid red;
        border-radius: 10px;
    }
    .countdown h1{
        color: red;
        font-weight: bold;
        margin-bottom: 0 !important;
    }

    </style>

  </head>
  <body style="height: 100vh; background-image: url(../images/bg-angin.png); background-repeat: no-repeat; object-fit: contain">

    
    <div class="d-flex justify-content-center">
        <div class="top-content d-flex align-items-center justify-content-between mb-2" style="position: absolute; top: 0; width: 85%">
            <h2>SESI 2</h2>
            {{-- <div class="d-flex align-items-center gap-4 logo-top">
                <img src="../images/mpr.png" alt="">
                <img src="../images/kemendikbud.png" alt="">
            </div> --}}
            <div class="countdown px-3 py-2 d-flex align-items-center justify-content-center">
                <h1 id="countdown" class="mb-0">120</h1>
            </div>
        </div>
    </div>

   <div class="container">
        <div class="row align-items-center">
            <div class="col-7">
                <h2 class="fw-bolder">Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 dan 10 sampai 17 Juli 1945!</h2>
            </div>
            <div class="col-5">
                <img class="tanya-sesi2" src="../images/tanya-sesi2.png" alt="">
            </div>
        </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>