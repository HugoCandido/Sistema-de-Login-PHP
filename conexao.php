<?php 


$localhost = "localhost";
$user = "root";
$password = "";
$banco = "usuarios";

global $pdo;

try{
    //codigo orientado a objeto para conexão com o banco de dados.
    $pdo = new PDO("mysql:dmname =".$banco. "; host=".$localhost, $user, $password,);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e){
    echo "Erro: ".$e->getMessage();
    exit;
}

?>