<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spin Sesi 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-image: url(../images/nilaiJuriBg.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            height: 100vh;
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1 {
            font-family: "Poppins", sans-serif;
            font-weight: bold;
            font-size: 20vw;
            color: #CE8F2E;
        }

        .deviceShow {
            text-align: center;
        }

        .animated-btn {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            line-height: 80px;
            display: inline-block;
            text-align: center;
            background: #E0A335;
            position: relative;
        }

        .animated-btn::before, .animated-btn::after {
            content: '';
            display: block;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border-radius: 50%;
            background: rgba(224, 163, 53, 0.51);
            animation: ripple-1 2s infinite ease-in-out;
            z-index: -1;
        }

        .animated-btn::after {
            background: #d28c0e;
            animation: ripple-2 2s infinite ease-in-out;
            animation-delay: 0.5s;
        }

        .animated-btn.disabled-btn {
            background-color: red;
            cursor: not-allowed;
        }

        .animated-btn.disabled-btn::before, .animated-btn.disabled-btn::after {
            background: rgba(255, 0, 0, 0.51);
        }

        .animated-btn.disabled-btn::after {
            background: rgba(255, 0, 0, 0.7);
        }

        @keyframes ripple-1 {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        @keyframes ripple-2 {
            0% {
                transform: scale(1);
                opacity: 1;
            }

            100% {
                transform: scale(1.7);
                opacity: 0;
            }
        }

    </style>
</head>
<body>


<button style="width: 900px; height: 400px" onclick="startSpin()" class="btn">
    <div class="text-center">
        <div class=" animated-btn text-white">
            <div style="margin-top: 70px">
                <i class="fa fa-play" style="font-size: 100px"></i>
            </div>
        </div>
    </div>

</button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

<script src="{{asset("/lib/pusher.min.js")}}"></script>

<script>
    const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        encrypted: true
    });

    const channelrefreshPage = pusher.subscribe('channel-refreshPage');
    channelrefreshPage.bind('event-refreshPage', function(data) {
        location.reload();
    });
    const ankorPindahSesi = pusher.subscribe('channel-pindah-sesi');
    ankorPindahSesi.bind('event-pindah-sesi', function(data) {
        console.log(data)
        const sesi = data.message.sesi;
        if (sesi == 2) { window.location.href = `/spin-button-sesi-2`; }
    });


    function startSpin() {
        const button = document.querySelector('.animated-btn');
        button.disabled = true;
        button.classList.add('disabled-btn');

        setTimeout(() => {
            button.disabled = false;
            button.classList.remove('disabled-btn');
        }, 3000);

        $.ajax({
            url: '/spin-trigger',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function (data) {
                console.log(data);
            },
            error: function (xhr, status, error) {
                console.error(error);
            }
        });
    }
</script>

</body>
</html>
