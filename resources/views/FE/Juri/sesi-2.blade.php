<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MPR Quiz | Juri II</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        #kiri{
            background-image: url('../images/bg-angin.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
        .container{
            max-width: 45vw;
        }
        body{
            font-family: "Poppins", sans-serif;
            min-height: 100vh;
            height: 100%;
            overflow-x: hidden;
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
        .jawaban-benar{
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

        .pointer{
            background-color: #EEEEEE;
        }
        .isi-pointer{
            color: red;
            font-weight: bolder
        }


        #kanan{
            min-height: 100vh;
            height: auto;
            background-color: #E30000;
            border-left: 10px solid #FFB316;
        }
        .group{
            width: 75%;
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
          <div class="col-7" id="kiri">
              <div class="container">
                <div class="header d-flex justify-content-between align-items-center my-3">
                    <h2 class="py-4">SESI 2</h2>
                </div>
                <div class="pertanyaan">
                    <p class="fw-bold" id="pernyataanSesi2"></p>
                </div>
                <div class="pointer p-3">
                    <div id="pointerSesi2"></div>
                </div>
              </div>
          </div>
          <div class="col-5" id="kanan">
              <div class="text-center text-white my-4">
                  <p class="mb-0">POIN</p>
                  <h4 class="mb-0">GRUP</h4>
              </div>
              <div class="row justify-content-center">

                  @foreach ($team as $item)
                      <div class="col-md-4 my-2" data-id="{{ $item->id }}">
                          <div class="group">
                              <div class="nama-group py-2">
                                  <p class="mb-0">{{ $item->name }}</p>
                                  <p class="mb-0 mt-2" style="font-size:12px">{{ $item->school }}</p>
                              </div>
                              <div class="nilai-group py-3">
                                  <h4 id="poin_{{ $item->id }}">{{ $item->participant()->whereDate('tanggal', '=', now())->sum('poin') }}</h4>
                              </div>
                          </div>
                      </div>
                  @endforeach

              </div>
          </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        const pusherKey = "{{ env('PUSHER_APP_KEY') }}";
        const pusherCluster = "{{ env('PUSHER_APP_CLUSTER') }}";
        const pusher = new Pusher(pusherKey, {
            cluster: pusherCluster,
            encrypted: true,
        });

        const channelrefreshPage = pusher.subscribe('channel-refreshPage');
        channelrefreshPage.bind('event-refreshPage', function(data) {
            location.reload();
        });
        const setpoinSesi2 = pusher.subscribe('channel-setpoin-sesi-2');
        setpoinSesi2.bind('event-setpoin-sesi-2', function(data) {
            const pointElement = document.getElementById(`poin_${data.message.id_team}`);
            pointElement.innerHTML = data.message.poin;
        });

        const kirimPernyataanSesi2 = pusher.subscribe('channel-kirim-pernyataan-sesi-2');
        kirimPernyataanSesi2.bind('event-kirim-pernyataan-sesi-2', function(data) {
            console.log(data);
            document.getElementById('pernyataanSesi2').innerText = data.message.pernyataan;
            const pointerContainer = document.getElementById('pointerSesi2');
            pointerContainer.innerHTML = '';

            const proPointers = data.message.pointers.filter(pointer => pointer.sisi === 'pro');
            const kontraPointers = data.message.pointers.filter(pointer => pointer.sisi === 'kontra');

            if (proPointers.length > 0) {
                const proTitle = document.createElement('h3');
                proTitle.innerText = 'Pro';
                pointerContainer.appendChild(proTitle);

                const proList = document.createElement('ul');
                proPointers.forEach(pointer => {
                    const listItem = document.createElement('li');
                    listItem.innerText = pointer.penjelasan;
                    proList.appendChild(listItem);
                });
                pointerContainer.appendChild(proList);
            }

            if (kontraPointers.length > 0) {
                const kontraTitle = document.createElement('h3');
                kontraTitle.innerText = 'Kontra';
                pointerContainer.appendChild(kontraTitle);

                const kontraList = document.createElement('ul');
                kontraPointers.forEach(pointer => {
                    const listItem = document.createElement('li');
                    listItem.innerText = pointer.penjelasan;
                    kontraList.appendChild(listItem);
                });
                pointerContainer.appendChild(kontraList);
            }
        });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        const pernyataanJuriChannel = pusher.subscribe('channelKirimPertanyaanS2');
        pernyataanJuriChannel.bind('eventKirimPertanyaanS2', function(data) {

            const pernyataanText = data.message.pernyataan;

            const pointers = data.message.pointers;

            const sisi = data.message.sisi;

            function printPernyataanText(pernyataanText) {
                const pernyataanContainer = document.getElementById('soalSesi2');

                pernyataanContainer.innerText = pernyataanText;
            }

            function printPointerList(pointers) {
                const pointerContainer = document.getElementById('loopingJawabanArray');

                let lists = '<ul>';

                pointers.forEach(pointer => lists += '<li>' + pointer.penjelasan + '</li>');

                lists += '</ul>';

                pointerContainer.innerHTML = lists;
            }

            function printSisi(sisi) {
                const sisiContainer = document.getElementById('sisi-pointer-container');

                const color = sisi == 'Pro' ? 'text-success' : 'text-danger';

                sisiContainer.innerHTML = 'POINTER <span class="' + color + '"><b>' + sisi + '</b></span>:';
            }

            printPernyataanText(pernyataanText);

            printPointerList(pointers);

            printSisi(sisi)
        });

        const ankorPindahSesi = pusher.subscribe('channel-pindah-sesi');
        ankorPindahSesi.bind('event-pindah-sesi', function(data) {
            const sesi = data.message.sesi;

            if (sesi == 3) { window.location.href = `/sesi${sesi}-juri`; }
        });

        var channel = pusher.subscribe('channelKirimPertanyaanS2');
        channel.bind('eventKirimPertanyaanS2', function(data) {
            console.log(JSON.stringify(data));

            // Simpan data baru ke local storage
            localStorage.setItem('latestData', JSON.stringify(data));

            // Hapus data lama dari local storage
            localStorage.removeItem('oldData');
            // Simpan data baru sebagai data lama
            var oldData = localStorage.getItem('latestData');
            localStorage.setItem('oldData', oldData);

            // Ambil data dari local storage
            var storedData = localStorage.getItem('latestData');
            if (storedData) {
                var data = JSON.parse(storedData);

                // Tampilkan data di halaman pengguna
                // document.getElementById('soalSesi2').innerText = data.message.pertanyaan;
                var jawabanArrayString = data.message.jawabanArray; // String JSON dari server
                var jawabanArray = JSON.parse(jawabanArrayString); // Ubah string JSON menjadi array JavaScript

                // var jawabanElement = document.getElementById('loopingJawabanArray');
                jawabanElement.innerHTML = ''; // Clear existing content

                // Loop through the jawabanArray and create <p> elements for each jawaban
                for (var i = 0; i < jawabanArray.length; i++) {
                    var jawabanItem = jawabanArray[i];
                    var jawabanText = (i + 1) + '. ' + jawabanItem;
                    var jawabanParagraph = document.createElement('p');
                    jawabanParagraph.textContent = jawabanText;
                    jawabanElement.appendChild(jawabanParagraph);
                }
            }

        });


        // PUSHER STORE NILAI TIM TERBARU
        var channel2 = pusher.subscribe('my-KirimPointStoreS1');
        channel2.bind('my-KirimPointStoreS1', function(data) {
            // Update tampilan dengan data yang diterima dari Pusher
            console.log('KirimPointStoreS1', data);

            // Dapatkan id tim dan poin yang diterima dari Pusher
            var teamId = data.id_team;
            console.log('teamId', teamId)
            var poinBaru = data.poin;
            console.log('poinBaru', poinBaru)

            // Dapatkan elemen HTML yang sesuai dengan id tim
            // var poinElement = document.getElementById('poin_' + teamId);

            if (poinElement) {
                // Dapatkan poin yang sudah ada di halaman
                var poinLama = parseInt(poinElement.innerText);
                // Ensure poinBaru is also an integer
                var poinBaru2 = parseInt(poinBaru);

                // Tambahkan poin yang baru diterima dari Pusher dengan poin yang sudah ada
                var totalPoin = poinLama + poinBaru2;

                // Hapus angka 0 di depan poin jika total poin sudah berjalan
                var formattedPoin = totalPoin.toString().replace(/^0+/, '');

                // Perbarui tampilan dengan total poin yang diformat
                poinElement.innerText = formattedPoin;
            }
        });

        var channel3 = pusher.subscribe('channel-start-countdown');
        channel3.bind('event-start-countdown', function(data) {
            console.log('event-start-countdown', data.message);
            if (data.message.pesan === "StartCountdownSesi2") {
                MulaiCountdown();
            }
        });

        function MulaiCountdown(){
            var countdownSeconds = 120; // Ubah kembali ke 20 jika menggunakan detik
            var countdownInterval;

            function startCountdown() {
                countdownInterval = setInterval(function () {
                    var countdownElement = document.getElementById('countdown');
                    countdownSeconds--;
                    countdownElement.innerText = countdownSeconds;

                    if (countdownSeconds <= 0) {
                        clearInterval(countdownInterval);
                    }
                }, 1000);
            }

            // Panggil fungsi untuk memulai countdown saat ini
            startCountdown();
        }
    </script>
  </body>
</html>
