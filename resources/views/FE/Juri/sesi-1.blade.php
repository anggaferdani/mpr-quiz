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
        const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
            cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
            encrypted: true
        });

        const channel = pusher.subscribe('channel-kirim-pertanyaan');
        channel.bind('event-kirim-pertanyaan', function(data) {
            // Handle received quiz data
            console.log('Received quiz data:', data);
            // Now you can update your UI with received quiz data
            // Update UI with received quiz data
            const tampilkanPertanyaanElement = document.getElementById('tampilkanPertanyaan');
            if (tampilkanPertanyaanElement) {
                tampilkanPertanyaanElement.innerHTML = data.quiz.pertanyaan;
            }

            // Handle received answers data
            const tampilkanJawabanElement = document.getElementById('tampilkanJawaban');
            if (tampilkanJawabanElement) {
                let jawabanHTML = '';
                data.jawaban.forEach(function(jawaban, index) {
                    jawabanHTML += '<div class="jawaban d-flex my-2 px-4 py-3">';
                    jawabanHTML += '<p class="mb-0">' + (index + 1) + '.</p>';
                    jawabanHTML += '<p class="mb-0 JawabanJuri">' + jawaban.jawaban + '</p>';
                    jawabanHTML += '</div>';
                });
                tampilkanJawabanElement.innerHTML = jawabanHTML;
            }
        });

        const channel2 = pusher.subscribe('channel-button-click-pertanyaan');
        channel2.bind('event-button-click-pertanyaan', function(data) {
            // Handle received quiz data
            console.log('Received quiz data ID:', data);
        });

        const channel3 = pusher.subscribe('channel-addPoints');
        channel3.bind('event-addPoints', function(data) {
            // Handle received quiz data
            console.log('Jawaban diterima:', data);
            $('.jawaban .JawabanJuri').each(function() {
                // Get the value of class JawabanJuri
                var jawabanJuri = $(this).text().trim();
                
                // Check if the value matches with data.message.jawaban
                if (jawabanJuri === data.message.jawaban) {
                    // Add the class 'JawabanJuriAktif' to the parent div
                    $(this).closest('.jawaban').addClass('JawabanJuriAktif');
                }
            });
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

            // Dapatkan elemen HTML yang sesuai dengan id tim
            var poinElement = document.getElementById('poin_' + teamId);

            if (poinElement) {
                // Dapatkan poin yang sudah ada di halaman
                var poinLama = parseInt(poinElement.innerText);
                var poinBaru2 = parseInt(poinBaru);

                // Tambahkan poin yang baru diterima dari Pusher dengan poin yang sudah ada
                var totalPoin = poinLama + poinBaru2;

                // Hapus angka 0 di depan poin jika total poin sudah berjalan
                var formattedPoin = totalPoin.toString().replace(/^0+/, '');

                // Perbarui tampilan dengan total poin yang diformat
                poinElement.innerText = formattedPoin;
            }
        });
    </script>

    <script>

    </script>

    <style>
        .container{
            max-width: 45vw;
        }
        body{
            font-family: "Poppins", sans-serif;
            height: 97vh;
            overflow: hidden;
        }
        .header h2{
            font-family: 'Press Start 2P', system-ui;
            color: red
        }

        .jawaban{
            border-radius: 50px;
            background: rgb(60,60,60);
            background: linear-gradient(0deg, rgba(60,60,60,1) 19%, rgba(145,145,145,1) 100%);
            color: white;
            font-weight: bold;
        }
        .jawaban p:nth-child(2){
            display: block;
            width: 100%;
            text-align: center;
        }
        .JawabanJuriAktif{
            background: rgb(232, 55, 45);
            background: linear-gradient(0deg, rgba(232, 55, 45, 1) 13%, rgba(255, 127, 35, 1) 59%);
        }

        .rectangle-terjawab{
            height: 20px;
            width: 20px;
            background: rgb(232, 55, 45);
            background: linear-gradient(0deg, rgba(232, 55, 45, 1) 13%, rgba(255, 127, 35, 1) 59%);
        }
        .rectangle-belum-terjawab{
            height: 20px;
            width: 20px;
            background: rgb(60,60,60);
            background: linear-gradient(0deg, rgba(60,60,60,1) 19%, rgba(145,145,145,1) 100%);
        }

        .countdown{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 5vw;
            height: 5vw;
            border: 2px solid red; 
            border-radius: 10px;
        }
        .countdown h3{
            font-weight: bold;
            color: red;
        }


        #kanan{
            background-color: #E30000;
            border-left: 10px solid #FFB316;
        }
        .group{
            width: 85%;
        }
        .list-group{
            display: flex !important; 
        }
        .group .nama-group{
            background-color: #990000;
            text-align: center;
            color: white;
            font-weight: bold;
            border-radius: 20px 20px 0 0;
        }
        .group .nilai-group{
            background-color: white;
            text-align: center;
            border-radius: 0 0 20px 20px;
        }
    </style>
  </head>
  <body>
    
      <div class="row" style="height: 100%">
          <div class="col-7">
              <div class="container">
                <div class="header d-flex justify-content-between align-items-center my-3">
                    <h2>SESI 1</h2>
                    <div class="countdown">
                        <h3 class="mb-0">10</h3>
                    </div>
                </div>
                <div class="content">
                    <h3 class="fw-bold text-center" id="tampilkanPertanyaan"></h3>
                    <div id="tampilkanJawaban">
                        
                    </div>
                </div>
                <div class="info d-flex justify-content-between">
                    <div class="d-flex gap-3">
                        <div class="rectangle-terjawab"></div>
                        <p class="fw-bold">Terjawab</p>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="rectangle-belum-terjawab"></div>
                        <p class="fw-bold">Belum Terjawab</p>
                    </div>
                </div>
              </div>
          </div>
          <div class="col-5" id="kanan">
              <div class="text-center text-white my-4">
                  <p class="mb-0">POINT</p>
                  <h4 class="mb-0">GROUP</h4>
              </div>
              <div class="row justify-content-center">
                  @foreach ($team as $item)
                    <div class="col-md-4 my-2" data-id="{{ $item->id }}">
                      <div class="group">
                            <div class="nama-group py-2">
                                <p class="mb-0">{{ $item->name }}</p>
                            </div>
                            <div class="nilai-group py-3">
                               <h4 id="poin_{{ $item->id }}">{{ $item->participant->sum('poin') }}</h4> 
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
          </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>