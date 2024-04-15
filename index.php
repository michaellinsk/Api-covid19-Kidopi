<?php
require 'conexao.php';


// Obter último acesso do banco de dados
$sql = "SELECT * FROM acessos_api ORDER BY data_hora DESC LIMIT 1";
$resultado = mysqli_query($conexao, $sql);
$ultimoAcesso = mysqli_fetch_assoc($resultado)

?>

<!DOCTYPE html>
<lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informações sobre Mortes por Covid </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
  <h1>Consulte Covid</h1>
</header>
<h2> Consulte os registros de casos de Covid19 de cada País</h2>
<form>
  <div>
    <img src="./img/australia.png" alt= "Bandeira da australia">
      <input type="radio" id="australia" name="pais" value="Australia">
      <label for="australia">Austrália</label><br>
  </div>

  <div>
    <img src="./img/brasil.jpeg" alt= "Bandeira da australia">
    <input type="radio" id="brasil" name="pais" value="Brazil">
    <label for="brasil">Brasil</label><br>
  </div>

  <div>
    <img src="./img/canada.jpeg" alt= "Bandeira da australia">
    <input type="radio" id="canadá" name="pais" value="Canadá">
    <label for="venezuela">Canadá</label><br>
  </div>

</form>

<button id="buscarDados">Buscar Dados</button>

<div id="dadosPais">

</div>
<br>
<div id="totalConfirmados">
   Casos Confirmados:
</div>
<div id="totalMortes">
    Total de Mortes:
    <p id="ultimaConsulta"></p>
</div>
    
  <footer>
  
      <p>Última consulta: <?php  echo $ultimoAcesso['pais'] . " - " . $ultimoAcesso['data_hora']; ?></p>
 

</footer>

<script src= "script.js"></script>


</body>
</html>