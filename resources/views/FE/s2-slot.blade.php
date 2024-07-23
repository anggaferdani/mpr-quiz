<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPR Quiz | Spinner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script type="text/javascript" src="{{asset('spinner/src/jquery.1.11.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('spinner/jquery-ui.min.js')}}"></script>

	<script src="{{asset('spinner/src/swal2.min.js')}}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    {{-- Pusher script --}}
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>

    <script>
        console.log('Action keys');

        console.table({
            'Reload spinner data': 'r',
            'Spin the wheel': '[space]',
            'open selected sub tema': '[enter]',
            'To `sesi 2` page': '[F2]'
        });

        // Initiate pusher
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        // Pindah sesi by operator
        const ankorPindahSesi = pusher.subscribe('channel-pindah-sesi');

        ankorPindahSesi.bind('event-pindah-sesi', function(data) {
            const sesi = data.message.sesi;

            if (sesi != 1) { window.location.href = `/sesi${sesi}`; }
        });
    </script>
    {{-- /Pusher script --}}

    <style>
        body{
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            background-image: url('../images/gif-s1-spin.gif'); /* Set the URL of your GIF */
                background-size: cover; /* Set the size */
                background-repeat: no-repeat; /* Set the repeat behavior */
                background-position: center; /* Set the position */
        }
        div:where(.swal2-container) h2:where(.swal2-title){
            color: #ffff !important;
            font-size: 82px;
            padding: 0 !important;
        }
        swal2-popup swal2-modal swal2-show{
            padding: 1.5em 3em !important;
        }

        .swal2-show{
            width: max-content !important;
            padding: 5rem !important;
            border-radius: 25px !important;
            /* color: white !important; */
            background: #E48F45 !important;
            display: grid;

        }
        .swal2-confirm{
            position: absolute;
            left: -100vw;
        }
        .top-content h2{
            font-family: 'Press Start 2P', system-ui;
            color: #5785DD;
        }
        .logo-top img{
            width: 100%;
            height: auto;
            object-fit: contain;
        }
        .spinwheel{
            height: 100vh;
            margin-top: -2.5%;
        }

        @media only screen and (max-width: 700px) {
            .spinwheel {
            /* #canvas { */
                scale: 60%;
            }
        }




        #randomChoice {
            font-size: 88px;
            font-weight: 800;
            transition: transform 0.1s ease;
        }
        .animate {
            animation: bounce 0.5s infinite;
        }
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>

  </head>
  <body>

    <div class="spinwheel d-flex align-items-center justify-content-center">
        <div id="randomChoice">-</div>



    </div>
{{--    <button onclick="startRandom()">Mulai Random</button>--}}

    {{--    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>--}}
  </body>
  <script>



      // Inisialisasi spinwheel dengan item yang ada di local storage
      $(document).on('keypress', function (e) {
          if (e.which == 32) {
              startRandom()
          }
      });
      function startRandom() {
          const choices = ["Pro", "Kontra"];
          const intervalTime = 100; // Interval waktu dalam milidetik
          const duration = 3000; // Durasi animasi dalam milidetik

          const randomChoiceElement = document.getElementById('randomChoice');
          let interval;

          const startAnimation = () => {
              randomChoiceElement.classList.add('animate');
              interval = setInterval(() => {
                  const randomIndex = Math.floor(Math.random() * choices.length);
                  randomChoiceElement.textContent = choices[randomIndex];
              }, intervalTime);
          };

          const stopAnimation = () => {
              clearInterval(interval);
              randomChoiceElement.classList.remove('animate');
              const finalIndex = Math.floor(Math.random() * choices.length);
              randomChoiceElement.textContent = choices[finalIndex];

              console.log(choices[finalIndex]); // hasilnya
          };

          startAnimation();
          setTimeout(stopAnimation, duration);
      }
  </script>
</html>
