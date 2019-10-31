<?php
// pegar os dados da tela

$email = $_POST["email"];
$senha = $_POST["senha"];

// --
//$usuario = $_POST["usuario"];

// --
//echo "Usuario :".$usuario."<br>";

// --------------------------------
//Abaixo esta o usuario do logar.php

//Usuario.: <input type="text" name="usuario" placeholder="Digite o seu Usuario" class="form-control" /><br> <br>

// --------------------------------

// abrir a conexao com o babco de dados
    // myslqi_connect(servidor, usuario, senha, banco)
$con = mysqli_connect("localhost","root","","aulaprojeto");

// montar a instrução de seleção para ir ao banco
$sql = "select * from usuario where email='".$email."' and senha='".$senha."'";

// executar a instrução

// redirecionar para a pag painel
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    echo"<script>";
    echo"location.href='adm/painel.php'";
    echo"</script>";
}else{
    echo"<script>";
    $msg = base64_encode("Usúario/Senha Inválido");
    echo"location.href='logar.php?m=".$msg."'";
    echo"</script>";
}
?>