<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$pass = $_POST["senha"];
$senha = sha1($pass);
$img_perfil = "no_user_icon.png";
$expire=time()+60*60*24;

require ("conexao.php");
$sql = mysql_query("select * from usuario where email = '$email';");
$numRegistros = mysql_num_rows($sql);
if($numRegistros == 0){
if(filter_var($email, FILTER_VALIDATE_EMAIL) && empty(!$senha)){
  if(strlen($pass) >=8){
$sql = "insert into usuario(email, nome, senha, profissao, tia, curso, periodo, img_perfil) values ('$email', '$nome', '$senha', 'Profissão', '00000000', 'Curso', 'Periodo', '$img_perfil')";
mysql_query($sql, $con) or die ("Erro de sintaxe, verifique o codigo");

session_start();
  $_SESSION["email"] = $email;
  setcookie("email", $email, $expire);

echo '<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="2; url=home.php">
    <title>Agendafone | Home</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="foundation-icons/foundation-icons.css" />
    <script src="js/vendor/modernizr.js"></script>
    <link rel="stylesheet" href="css/style-sign.css" />
  </head>
   <body>
      <div class="row">
        <div class="small-12 small-centered columns namelogo">
          <h1><img src="img/logo.png" width="55px" alt="Logo agendafone"> Agendafone</h1>
        </div>
      </div>
	<h3> Usuário cadastrado com sucesso!</h3>
</body>
</html>';
}
else{
  header("Location: sign.php?error=1");
}
}
else {

	header("Location: sign.php?error=1");
}
}
else
  header("Location: sign.php?errore=1");

?>
