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
    </style>

  </head>
  <body class="d-flex align-items-center" style="height: 100vh; background-image: url(../images/bg-angin.png); background-repeat: no-repeat; object-fit: contain">

   <div class="container">
        <div class="row align-items-center">
            <div class="col-7 text-sesi">
                <h1>SESI 2</h1>
                {{-- <h1>{{ $pertanyaan }}</h1> --}}
                <h3>TEMATIK EMPAT PILAR MPR RI</h3>
            </div>
            <div class="col-5">
                <img class="tanya-sesi2" src="../images/tanya-sesi2.png" alt="">
            </div>
        </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <script>
        
    </script>

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

        document.addEventListener('keydown', function(event) {
            // Pastikan tombol yang ditekan adalah tombol panah kanan (keyCode 39)
            if (event.keyCode === 39) {
                // Lakukan pengalihan ke URL route yang diinginkan
                // Lakukan pengalihan ke URL route yang diinginkan dengan menyertakan variabel data sebagai query string
                var dataString = JSON.stringify(data.message.pertanyaan); // Ganti 'data' dengan variabel yang ingin Anda bawa
                window.location.href = '/sesi2-soal?data=' + encodeURIComponent(dataString);
            } 
            if (event.keyCode === 37) {
            // Lakukan navigasi ke URL sebelumnya dalam riwayat browser
            window.history.back();
        }
        });
    });
    </script>


  </body>
</html>