<?php
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
                <h2>Entrar na conta</h2>
                <form action="home.html">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>

                    <button type="submit" class="btn btn-default">Entrar</button>
                </form>
            </div>

      <?php require("template/footer.php"); ?>
