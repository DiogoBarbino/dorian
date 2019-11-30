<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dorian</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
            <div class="form-control text-box" name="text-highlight" id="text-highlight">
            </div>
        </div>
    </main>
    <footer class="container">

    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- <script src="./js/jquery.js"></script> -->
    <script src="./js/dictonary.js"></script>
    <script src="./js/transpilador.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>