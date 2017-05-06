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



        <!-- Main component for a primary marketing message or call to action -->
        <br><br><br><br><br>
        <div class="row">
          <div class="col-md-12">
          <h2 class="text-center">Encontre o serviço ideal pelo melhor preço!</h2>
          <br>
          <p>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                  <input type="text" class="form-control input-lg" list="servicos" name="servico" placeholder="Ex.: Fotógrafo...">
                    <datalist id="servicos">
                      <option value="Fotografo">
                      <option value="Pedreiro">
                      <option value="Eletricista">
                    </datalist>
                  <span class="input-group-btn">
                      <button onclick="window.location='busca.html'" class="btn btn-success input-lg" type="button">Procurar</button>
                  </span>
                </div><!-- /input-group -->
              </div><!-- /div col-->
            </div>
            </div><!-- /div col-->
            </div>
          </p>
        </div>
        </div>

      <?php require("template/footer.php"); ?>
