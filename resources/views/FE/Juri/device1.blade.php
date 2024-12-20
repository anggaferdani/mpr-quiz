<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset("/lib/pusher.min.js")}}"></script>

    <script>
        // Inisialisasi Pusher dengan kunci dan cluster yang sesuai
        const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
        const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
        const pusher = new Pusher(pusherKey, {
            cluster: pusherCluster,
            encrypted: true // Tambahkan ini jika Anda mengaktifkan enkripsi di Pusher
        });
        const channel = pusher.subscribe('channel-device-satu');

        // Variabel global untuk menyimpan total poin
        let totalPoin = 0;

        let school;

        let lastItem = '';
        console.log('lastItemGlobal', lastItem)
        function updateLastItem(item) {
            lastItem = item;
            console.log('initial lastItem:', lastItem);
        }

        channel.bind('event-device-satu', function(data) {
            let dataArray = data.message;
            console.log('dataArray', dataArray);

            let latestItem = dataArray[dataArray.length - 1];
            console.log('latestItem', latestItem);

            updateLastItem(latestItem);
            school = latestItem.name;

            let $deviceShow = $('<div></div>').addClass('deviceShow').attr('id', latestItem.id);
            let $teamName = $('<h2></h2>').text(`GRUP A`).css({'display': 'block'});
            let $schoolName = $('<h2></h2>').text(`${latestItem.name}`).css({
                'display': 'block',
                'font-size': '130px'
            });
            let $totalPoints = $('<h1></h1>').text(`${latestItem.total_poin}`).css('display', 'block').addClass('totalPoint');

            $deviceShow.append($teamName);
            $deviceShow.append($totalPoints);
            $deviceShow.append($schoolName);
            totalPoin = latestItem.total_poin;

            $('body').css({
                'background-image': 'url(../images/nilaiJuriBg.png)',
                'background-repeat': 'no-repeat',
                'background-size': '100% 100%',
                'height': '100vh',
                'background-position': 'center center',
                'display': 'flex',
                'justify-content': 'center',
                'align-items': 'center'
            }).empty().append($deviceShow);
        });



        // PUSHER STORE NILAI TIM TERBARU
        var channel4 = pusher.subscribe('my-KirimPointStoreS1');
        channel4.bind('my-KirimPointStoreS1', function(data) {
            // Update tampilan dengan data yang diterima dari Pusher
            console.log('KirimPointStoreS1', data);

            // Dapatkan id tim dan poin yang diterima dari Pusher
            var teamId = data.id_team;
            console.log('teamId', teamId)
            var poinBaru = data.poin;
            console.log('poinBaru', poinBaru)

            // Cari elemen dengan class 'deviceShow' dan ambil nilai atribut id-nya
            var deviceId = $('.deviceShow').attr('id');
            var totalPoint = $('.totalPoint').text();
            var totalPointElement = $('.totalPoint');
            console.log('deviceId', deviceId);
            console.log('totalPoint', totalPoint);

            // Jika deviceId sama dengan teamId, tambahkan totalPoint dengan poinBaru
            if (deviceId === teamId) {
                let parseIntPoinBaru = parseInt(poinBaru);
                let parseInttotalPoint = parseInt(totalPoint);
                var totalBaru = parseInttotalPoint + parseIntPoinBaru;

                // Perbarui isi point di class totalPoint
                totalPointElement.text(totalBaru);
            }

        });


        const ankorPindahSesi = pusher.subscribe('channel-pindah-sesi');
        ankorPindahSesi.bind('event-pindah-sesi', function (data) {
            // console.log(data)
            const sesi = data.message.sesi;
            if (sesi == 3) {
                let $deviceShow = $('<div></div>').addClass('deviceShow');
                let $totalPoints = $('<h1></h1>').text(`A`).css('display', 'block').addClass('totalPoint');
                let $schoolName = $('<h2></h2>').text(`${school}`).css({
                    'display': 'block',
                    'font-size': '70px',
                    'white-space': 'nowrap',
                    'position': 'absolute',
                    'bottom': '55px',
                    'left': '50%',
                    'color': "white",
                    'width': "100%",
                    'transform': 'translateX(-50%)',
                    'text-align': 'center'
                }).addClass('text-uppercase');
                $deviceShow.append($totalPoints);
                $deviceShow.append($schoolName);
                $('body').css({
                    'background-image': 'url(../images/CERDAS-CERMAT-37.png)',
                    'background-repeat': 'no-repeat',
                    'background-size': '100% 100%',
                    'height': '100vh',
                    'background-position': 'center center',
                    'display': 'flex',
                    'justify-content': 'center',
                    'align-items': 'center'
                }).empty().append($deviceShow);
            }
        });


    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <style>
        body{
            background-image: url(../images/nilaiJuriBg.png);
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
            color: red;
        }
        h2{
            font-weight: bold;
            font-size: 150px;
        }


        .deviceShow{
          text-align: center;
        }

    </style>
</head>
<body>
    <h1 id="data-container"></h1>
    <script src="{{asset("/lib/bootstrap.bundle.min.js")}}"></script>
</body>
</html>
