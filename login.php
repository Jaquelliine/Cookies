<?php
//Aqui pode ser colocado algum código PHP necessário
//não foi necessário
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<p>Bem vindo!<br>Entre com suas credenciais para acessar o sistema</p>
<br>

<form action="processa_login.php" method="post">
<label>Usuário: <input type="text" name="usuario"></label><br>
<label>Senha: <input type="password" name="senha"></label><br>
<label><input type="checkbox" name="lembrar"> Lembrar usuário/senha</label><br><br>
<input type="submit" value="Entrar">
</form>

</body>
</html>