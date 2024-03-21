<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        body{
            background-image: url(../images/justPeta.png);
            background-repeat: no-repeat;
            background-size: contain;
            height: 100vh;
            background-position: center center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content h1{
            font-size: 25vw;
            line-height: .85;
            color: #E8372D;
            font-weight: bolder;
            margin-bottom: 0 !important;
        }
        .content h2{
            font-size: 7vw;
            margin-bottom: 0 !important;
            letter-spacing: 1rem;
            font-weight: bolder;
        }
    </style>

  </head>
  <body>
    <div class="content text-center">
        <h1>80</h1>
        <h2>POINT</h2>
    </div>

    <script>
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                // Arahkan pengguna ke route sesi2
                window.location.href = "/sesi1-spin";
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>