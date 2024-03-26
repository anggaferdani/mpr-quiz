<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
                    <h2>SESI 2</h2>
                    <div class="countdown">
                        <h3 class="mb-0">120</h3>
                    </div>
                </div>
                <div class="pertanyaan">
                    <p class="fw-bold">Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan atau yang dikenal dengan BPUPKI dibentuk pada masa pendudukan Jepang di Indonesia. Sebutkan tugas-tugas yang diberikan kepada BPUPKI saat melaksanakan persidangan pada tanggal 29 Mei sampai 01 Juni 1945 dan 10 sampai 17 Juli 1945!</p>
                </div>
                <div class="pointer p-3">
                    <p class="fw-bold">POINTER :</p>
                    <p class="isi-pointer">1. Penyelidikan usaha-usaha kemerdekaan Indonesia</p>
                    <p class="isi-pointer">2. Mempersiapkan Kemerdekaan</p>
                    <p class="isi-pointer">3. Merumuskan Dasar Negara</p>
                    <p class="isi-pointer">4. Penyusunan Naskah Konstitusi</p>
                    <p class="isi-pointer">5. Menyelidiki Situasi Politik Dan Sosial</p>
                    <p class="isi-pointer">6. Merumuskan Tujuan Dan Cita-Cita Kemerdekaan</p>
                    <p class="isi-pointer">7. Konsultasi Dengan Berbagai Pihak</p>
                </div>
              </div>
          </div>
          <div class="col-5" id="kanan">
              <div class="text-center text-white my-5">
                  {{-- <p class="mb-0">POINT</p> --}}
                  <h4 class="mb-0 fw-bold">POINT</h4>
              </div>
              <div class="row justify-content-center">
                  <div class="col-md-5 d-flex justify-content-center my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP A</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-5 d-flex justify-content-center my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP B</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-5 d-flex justify-content-center my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP A</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-5 d-flex justify-content-center my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP B</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-5 d-flex justify-content-center my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP A</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-5 d-flex justify-content-center my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP B</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>