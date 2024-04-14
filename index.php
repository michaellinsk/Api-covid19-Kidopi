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
  <title>Informações sobre Mortes por Covid</title>
  <link rel="stylesheet" href="estilo.css">
</head>
  <h1>Dados de Mortes por Covid</h1>

  <form>
  <input type="radio" id="australia" name="pais" value="Australia">
  <label for="australia">Austrália</label><br>
  <input type="radio" id="brasil" name="pais" value="Brazil">
  <label for="brasil">Brasil</label><br>
  <input type="radio" id="canadá" name="pais" value="Canadá">
  <label for="venezuela">Canadá</label><br>
</form>

<button id="buscarDados">Buscar Dados</button>

<div id="dadosPais">
  Selecione um país e clique em "Buscar Dados" para ver os dados COVID-19.
</div>

<div id="totalConfirmados">
   Casos Confirmados:
</div>
<div id="totalMortes">
    Total de Mortes:
    <p id="ultimaConsulta"></p>
</div>
 <p>Última consulta: <?php  echo $ultimoAcesso['pais'] . " - " . $ultimoAcesso['data_hora']; ?></p>
</div>

<script src= "script.js"></script>


</body>
</html>