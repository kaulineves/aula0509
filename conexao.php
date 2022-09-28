<?php  
$host= "localhost";
$dbname= "mysql";
$user= "root";
$pass= "";

try{

    $conexao = new PDO("mysql:host=$host;
    dbname=$dbname", $user,$pass);

} catch (PDOException $th){
    $error = $th->getMessage();
    echo "erro ao conectar ao banco de dados: ".$error;
}