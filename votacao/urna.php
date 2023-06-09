<?php 
session_start();
if (!$_SESSION['ideleitor']) {
    header("Location: validacao.php");
    exit; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Votação</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <h1>Votação</h1>
  <div class="teclado">
    <form action="votacao.php" method="post" id="formvoto">
      <input type="number" name="num_cand" id="numcand" placeholder="" min="10" max="99" step=".01" oninput="consulta()"/><br />

    </form>
      <div class="teclado">
        <button class="btnteclado" onclick="add(1)">1 </button><button class="btnteclado"
          onclick="add(2)">2</button><button class="btnteclado" onclick="add(3)">3</button><button class="btnteclado"
          onclick="add(4)">4</button><button class="btnteclado" onclick="add(5)">5</button><button class="btnteclado"
          onclick="add(6)">6</button><button class="btnteclado" onclick="add(7)">7</button><button class="btnteclado"
          onclick="add(8)">8</button><button class="btnteclado" onclick="add(9)">9</button><button class="btn0"
          onclick="add(0)">0</button> <br>
        <div class="tecfunc"> <!--Teclas Funcionais-->
          <button class="btncorrige" onclick="remover()">Corrige</button><button
            class="btnbranco" onclick="branco()">Branco</button><a href="validacao.php"><input type="submit" value="Confirmar" onclick="" form="formvoto" class="btnconfirmar" /></a>
        </div>
      </div>


  </div>
  <script src="script.js"></script>
</body>

</html>