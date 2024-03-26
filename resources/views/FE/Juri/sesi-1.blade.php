<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                    <h3 class="fw-bold text-center">Sebutkan pecahan uang kertas dan uang koin TE (Tahun Emisi) 2022!</h3>
                    <div class="jawaban d-flex my-2 px-4 py-3">
                        <p class="mb-0">1.</p>
                        <p class="mb-0">Rp.100.000</p>
                    </div>
                    <div class="jawaban d-flex my-2 px-4 py-3">
                        <p class="mb-0">1.</p>
                        <p class="mb-0">Rp.100.000</p>
                    </div>
                    <div class="jawaban my-2 jawaban-benar d-flex px-4 py-3">
                        <p class="mb-0">1.</p>
                        <p class="mb-0">Rp.100.000</p>
                    </div>
                    <div class="jawaban d-flex my-2 px-4 py-3">
                        <p class="mb-0">1.</p>
                        <p class="mb-0">Rp.100.000</p>
                    </div>
                    <div class="jawaban d-flex my-2 px-4 py-3">
                        <p class="mb-0">1.</p>
                        <p class="mb-0">Rp.100.000</p>
                    </div>
                    <div class="jawaban d-flex my-2 px-4 py-3">
                        <p class="mb-0">1.</p>
                        <p class="mb-0">Rp.100.000</p>
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
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP A</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP B</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP C</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP D</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP E</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP F</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP G</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP H</p>
                        </div>
                        <div class="nilai-group py-3">
                            <h4>70</h4>
                        </div>
                      </div>
                  </div>
                  <div class="col-md-4 my-2">
                      <div class="group">
                        <div class="nama-group py-2">
                            <p class="mb-0">GROUP I</p>
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