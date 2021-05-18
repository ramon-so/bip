<?php
include_once("conexao.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <div class="contain">
      <div class="arquivo">
        <h1>Insira uma filial</h1>
        <form class="" enctype="multipart/form-data" action="" method="post">
          <input type="text" name="busca" value="">
          <input type="submit" name="" value="Enviar">
        </form>
      </div>
      <?php
      if (isset($_POST['busca'])) {
        $comzeros = $_POST['busca'];
        $semzeros = ltrim($comzeros, "0");
        $sql = "SELECT * FROM tbdDados WHERE FILIAL = '$semzeros'";
        $sql = $conn->query($sql) or die($conn->error);
        $dados = $sql->fetch_array();
        if (is_array($dados)) {
          $mensagem = "Filial: ".$dados['']
        }else{
          $mensagem = "";
        }
        ?>
      <div class="nota">
        <?php  ?>
      </div>
      <?php
      }
       ?>
    </div>
  </body>
</html>
