<?php
include_once("conexao.php");
$file = $_FILES['file'];
$dir = "./arquivos";
try {
  move_uploaded_file($file['tmp_name'], $dir);
} catch (\Exception $e) {
  echo "erro!";
}

 ?>
