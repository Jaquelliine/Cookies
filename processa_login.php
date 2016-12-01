<?php
//Aqui será feito o processamento do formulário de login


//variaveis que guardam os valores recebidos no preenchimento do formulario
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//quando o usuario informa os dados corretos no login ele é redirecionado
//para a pagina inicial
if ($usuario=="admin" and $senha=="123456"){
	header("location:inicial.php");	

} 


//quando o usuario informa algum dado errado no login, uma msg é informada
else {
	echo"<script> alert ('Usuário e/ou senha inválidos'); window.location.replace('login.php');</script>";
	
}


//quando a caixa de lembrar é marcado e o usuario e senha estão corretos
// ficará guardado os dados de login
if(($_POST["lembrar"] and $usuario=="admin" and $senha=="123456")){
	header("location:inicial.php");	
}


?>