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
        .bg-sesi2-soal{
            position: relative;
            height: 100vh; 
            width: 100%;
            background-image: url(../images/gif-sesi2.gif); 
            background-repeat: no-repeat; 
            object-fit: cover;  
        }
        #content-soal-sesi2{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
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
        /* .countdown{
            position: absolute;
            left: 50%;
            width: 5rem;
            height: 5rem;
            border: 1px solid red;
            border-radius: 10px;
        }
    .countdown h1{
        color: red;
        font-weight: bold;
        margin-bottom: 0 !important;
    } */
        .wrap-countdown{
            position: absolute;
            bottom: 5%;
            width: 100%;
        }
        .countdown{
            width: 15vw;
            height: 15vw;
            /* border: 1px solid red; */
            /* border-radius: 10px; */
        }
        #countdown-div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100vw;
            height: 100vh;
        }
        .countdown h3{
            /* color: rgb(117, 8, 8); */
            color: #FF3421;
            font-weight: bold;
            margin-bottom: 0 !important;
            font-size: 5vw;
        }
        #countdown-div h1{
            background-color: red;
            padding: 5rem;
            border-radius: 25px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 1;
            color: white;
            font-weight: bold;
        }

    </style>

  </head>
  <body>

    <img src="../images/gif-sesi2.gif" class="bg-sesi2-soal" alt="">
    
    {{-- <div class="d-flex justify-content-center">
        <div class="top-content d-flex align-items-center justify-content-between mb-2" style="position: absolute; top: 0; width: 85%">
            <h2>SESI 2</h2>
            <div class="countdown px-3 py-2 d-flex align-items-center justify-content-center">
                <h1 id="countdown" class="mb-0">120</h1>
            </div>
        </div>
    </div> --}}

   <div class="container" id="content-soal-sesi2">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <h2 class="fw-bolder text-center" id="showingDataPusher">{{ print_r($data, true) }}</h2>
            </div>
        </div>
    </div>
    <div class="wrap-countdown d-flex justify-content-center">
        <div class="countdown px-3 py-2 d-flex align-items-center justify-content-center">
            <h3 id="countdown" class="mb-0">30</h3>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('d0c13db38b1d3aee0d7a', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('channelKirimPertanyaanS2');
        channel.bind('eventKirimPertanyaanS2', function(data) {
            console.log(JSON.stringify(data));
            document.getElementById('showingDataPusher').innerText = data.message.pertanyaan;
        });
    </script>

  </body>
</html>