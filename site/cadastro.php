<?php
if (isset($_GET["erro"])){
    echo '<script>confirm("E-mail ou senha invalidos");</script>';
  }
  if (isset($_GET["error"])){
    echo '<script>confirm("Digite uma senha com mais de 8 caracteres");</script>';
  }
  if (isset($_GET["errore"])){
    echo '<script>confirm("E-mail já cadastrado");</script>';
  }
if (isset($_SESSION["email"])){
  header("Location: home.php");
}
elseif(isset($_COOKIE["email"])){
  $_SESSION["email"] = $_COOKIE["email"];
  header("Location: home.php");
}

require("template/header.php");
require("template/nav_index.php");
?>


            <br>
            <div class="col-md-6 col-md-offset-3">
                <h2>Cadastro</h2>
                <form action="home.html">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome Completo</label>
                        <input type="text" class="form-control" id="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Senha</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirmar senha</label>
                                <input type="password" class="form-control" placeholder="Corfirmar senha">
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Endereço</label>
                            <input type="text" class="form-control" id="endereco" placeholder="endereço">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone</label>
                            <input type="text" class="form-control" id="telefone" placeholder="Telefone" onkeypress="formataTelefone( this, event )">
                        </div>


                        <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>

        <?php require("template/footer.php"); ?>
