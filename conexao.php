<?php
$host = "locahost";
$usuario = "root";
$senha = "root";
$bd = "lumia";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
				echo "Falha na Conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>
