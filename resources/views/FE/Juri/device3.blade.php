<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script>
        // Inisialisasi Pusher dengan kunci dan cluster yang sesuai
        const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
        const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
        const pusher = new Pusher(pusherKey, {
            cluster: pusherCluster,
            encrypted: true // Tambahkan ini jika Anda mengaktifkan enkripsi di Pusher
        });

        // Langganan ke channel 'channel-device-satu'
        const channel = pusher.subscribe('channel-device-tiga');

        // Menangani event 'event-device-satu' yang dikirim dari server
        // Menangani event 'event-device-satu' yang dikirim dari server
channel.bind('event-device-tiga', function(data) {
    // Mengambil array dari data terakhir yang diterima
    let dataArray = data.message;
    console.log('dataArray', dataArray)


    // Mengambil data terakhir dari array
    let lastItem = dataArray[dataArray.length - 1];

    // Membuat elemen div dengan class deviceShow
    let $deviceShow = $('<div></div>').addClass('deviceShow');

    // Membuat elemen h2 untuk nama tim
    let $teamName = $('<h2></h2>').text(`${lastItem.name}`).css('display', 'block');

    // Membuat elemen h1 untuk total poin
    let $totalPoints = $('<h1></h1>').text(`${lastItem.total_poin}`).css('display', 'block');

    // Menambahkan elemen h2 dan h1 ke dalam div deviceShow
    $deviceShow.append($teamName);
    $deviceShow.append($totalPoints);

    // Menghapus konten sebelumnya dan menambahkan div deviceShow ke dalam body
    $('body').empty().append($deviceShow);
});

    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        body{
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
        h1{
            font-family: "Poppins", sans-serif;
            font-weight: bold;
            font-size: 20vw;
            color: #CE8F2E;
        }
        .deviceShow{
          text-align: center;
        }
    </style>
</head>
<body>
    <h1 id="data-container"></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
