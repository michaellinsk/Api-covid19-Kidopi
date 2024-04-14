<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "api_covid_19";

$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Verifica a conexão
if (mysqli_connect_error()) {
    die("Falha na conexão: " . mysqli_connect_error());
} 

// Obter último acesso do banco de dados
$sql = "SELECT * FROM acessos_api ORDER BY  data_hora DESC LIMIT 1";
$resultado = mysqli_query($conexao, $sql);
$ultimoAcesso = mysqli_fetch_assoc($resultado)

?>