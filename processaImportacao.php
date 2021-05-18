<?php
include_once("conexao.php");
$file = $_FILES['file'];
$dir = "./arquivos/";
try {
  move_uploaded_file($file['tmp_name'], $dir.$file['name']);
} catch (\Exception $e) {
  echo "erro!";
}
$arquivo = new DomDocument();
$arquivo->load($dir.$file['name']);
$linhas = $arquivo->getElementsByTagName("Row");
//var_dump($linhas);
foreach ($linhas as $linha) {
  if (is_numeric($linha->getElementsByTagName("Data")->item(0)->nodeValue)) {
    $filial = $linha->getElementsByTagName("Data")->item(0)->nodeValue;
    echo "Filial: $filial <br>";
    $tipo = $linha->getElementsByTagName("Data")->item(1)->nodeValue;
    echo "Tipo: $tipo <br>";
    $regional = $linha->getElementsByTagName("Data")->item(2)->nodeValue;
    echo "Regional: $regional <br>";
    $divisao = $linha->getElementsByTagName("Data")->item(3)->nodeValue;
    echo "Divisao: $divisao <br>";
    $cidade = $linha->getElementsByTagName("Data")->item(4)->nodeValue;
    echo "Ciadade: $cidade <br>";
    $estado = $linha->getElementsByTagName("Data")->item(5)->nodeValue;
    echo "Estado: $estado <br>";
    $regiao = $linha->getElementsByTagName("Data")->item(6)->nodeValue;
    echo "Regiao: $regiao <br>";
    $endereco = $linha->getElementsByTagName("Data")->item(7)->nodeValue;
    echo "Endereco: $endereco <br>";
    $gerente = $linha->getElementsByTagName("Data")->item(8)->nodeValue;
    echo "Gerente: $gerente <br>";
    $nome_cd = $linha->getElementsByTagName("Data")->item(9)->nodeValue;
    echo "Nome CD: $nome_cd <br>";
    $sql = "INSERT INTO tbmDados(FILIAL, TIPO, REGIONAL, DIVISAO, CIDADE, ESTADO, REGIAO, ENDERECO, GERENTE, NOMECD) VALUES('".addslashes($filial)."', '".addslashes($tipo)."', '".addslashes($regional)."', '".addslashes($divisao)."', '".addslashes($cidade)."', '".addslashes($estado)."','".addslashes($regiao)."', '".addslashes($endereco)."', '".addslashes($gerente)."', '".addslashes($nome_cd)."')";
    $sql = $conn->query($sql) or die($conn->error);
    echo "<hr>";
  }else{
    echo "oi";
  }

}
 ?>
