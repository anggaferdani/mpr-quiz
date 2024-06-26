<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    
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
            font-size: 3.6vw;
            color: #FF3421;
        }
        .triple-tanya{
            width: 100%;
            height: 100vh;
            object-fit: contain
        }
    </style>

  </head>
  <body class="d-flex align-items-center" style="height: 100vh; background-image: url(../images/bg-angin.png); background-repeat: no-repeat; object-fit: contain">

   <div class="container">
        <div class="row align-items-center">
            <div class="col-7 text-sesi">
                <h1>SESI 1</h1>
                <h3>WAWASAN EMPAT PILAR</h3>
            </div>
            <div class="col-5">
                <img class="w-100 triple-tanya" src="../images/triple-tanya.png" alt="">
            </div>
        </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        document.addEventListener('keydown', function(event) {
            // Pastikan tombol yang ditekan adalah tombol panah kanan (keyCode 39)
            if (event.keyCode === 39) {
                // Lakukan pengalihan ke URL route yang diinginkan
                window.location.href = '/sesi1-spin';
            } 
            if (event.keyCode === 37) {
            // Lakukan navigasi ke URL sebelumnya dalam riwayat browser
            window.history.back();
        }
        });

        // PUSHER PINDAH HALAMAN KE SESI 2
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });
        var channel7 = pusher.subscribe('channel-move-sesi');
        channel7.bind('event-move-sesi', function(data) {
            console.log('event-move-sesi', data.message);
            if (data.message.capecape === "sesi-2") {
                window.location.href = "/sesi2";
            }
        });
    </script>
  </body>
</html>