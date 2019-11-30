<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dorian</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="container">
        <h1 class="title my-5">Projeto Dorian</h1>
    </header>
    <main class="container my-5">
        <div class="col-sm-12 col-lg-6">
            <h2>Texto Original</h2>
            <textarea class="form-control text-box" name="text-origin" id="text-origin">
            </textarea>
        </div>
        <div class="col-sm-12 col-lg-6">
            <h2>Texto Modificado</h2>
            <textarea class="form-control text-box" name="text-modified" id="text-modified" readonly>
            </textarea>
        </div>
        <div class="col-sm-12">
            <h2>Alterações realizadas</h2>
            <textarea class="form-control text-box" name="text-highlight" id="text-highlight" readonly>
            </textarea>
        </div>
    </main>
    <footer class="container">

    </footer>

    <script src="./js/jquery.js"></script>
    <script src="./js/dictonary.js"></script>
    <script src="./js/transpilador.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>