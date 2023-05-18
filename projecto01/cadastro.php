<?php

require_once("conexao.php");

$usuario = $_POST["nome"];
$data = $_POST["data"];
$endereco = $_POST["endereco"];
$bi = $_POST["bi"];
$genero = $_POST["genero"];

$squl_cadastro=mysqli_query($ligar , "INSERT INTO pacientes (id, nome, nascimento, genero, endereço) values 
("$nome","$data","$endereco","$bi","$genero","")");

if ($squl_cadastro==true){
    
    echo " <script>

alert("Usuário Cadastrado");
window.localication.href="login.html";


   </script>";
    
}
else  {

    echo " <script>
    alert("Usuário Não Cadastrado");
    window.localication.href="login.html";

    </script>";
}

?>