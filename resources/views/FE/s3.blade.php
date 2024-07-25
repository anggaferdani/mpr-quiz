<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MPR Quiz | Sesi III</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        .text-sesi h1 {
            font-family: 'Poppins', system-ui;
            font-size: 8vw;
            color: #CE8F2E;
        }

        .text-sesi h3 {
            font-family: "Poppins", sans-serif;
            font-weight: bold;
            font-size: 3vw;
            color: black;
        }

        .tanya-sesi2 {
            height: 100vh;
            width: 100%;
            object-fit: contain;
        }

        body {
            background-image: url(../images/nilaiJuriBg.png);
            /* D:\application\mpr-quiz\public\images\bg-nilai-juri.png */
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 100vh;
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="d-flex align-items-center" style="height: 100vh; background-repeat: no-repeat; object-fit: contain">
    <div class="container" style="display: flex; justify-content: center; align-items: center">
        <div class="row align-items-center justify-content-center">
            <div class="text-sesi w-fit m-auto" style="width: fit-content">
                <div class="d-flex justify-content-between">
                    <h1>SESI &nbsp;</h1>
                    <h1>3</h1>
                </div>
                <h3  class="text-center">REBUTAN</h3>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    <script>


        // Initiate pusher
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        // Pindah sesi by operator

        const ankorPindahSesi = pusher.subscribe('channel-pindah-sesi');
        ankorPindahSesi.bind('event-pindah-sesi', function(data) {
            const sesi = data.message.sesi;

            if (sesi == 1) { window.location.href = `/sesi${sesi}`; }
        });


        {{--var channel = pusher.subscribe('channelKirimPertanyaanS2');--}}
        {{--channel.bind('eventKirimPertanyaanS2', function (data) {--}}
        {{--    console.log(JSON.stringify(data));--}}

        {{--    if (data.message.berita === 'movesesi2') {--}}
        {{--        // Lakukan pengalihan ke URL route yang diinginkan dengan menyertakan variabel data sebagai query string--}}
        {{--        var dataString = JSON.stringify(data.message.pertanyaan); // Ganti 'data' dengan variabel yang ingin Anda bawa--}}
        {{--        window.location.href = '/sesi2-soal?data=' + encodeURIComponent(dataString);--}}
        {{--    }--}}
        {{--});--}}
    </script>
</body>
</html>
