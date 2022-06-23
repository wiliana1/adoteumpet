<?php
session_start();
$senhap = $_POST['pass'];
$emailp = $_POST['email'];
$ns = $_POST['ns'];
$link = mysqli_connect("localhost", "u275160580_boot", "22068412", "u275160580_boot");
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
if($ns == "" or $ns == null){
$sql = "SELECT * FROM `vendedores` WHERE `senha` =  '$senhap' AND  `email` = '$emailp'";
$resultado = mysqli_query($link,$sql) or die("Acesso negado");
while ($row = mysqli_fetch_assoc($resultado)){
    $nome = $row['nome'];
    $email = $row['email'];
    $senha = $row['senha'];
    $status = $row['status'];
    $cpf = $row['cpf'];
    $bco = $row['banco'];
    $ag = $row['agencia'];
    $cta = $row['conta'];
    $tel = $row['tel'];
    $cod = $row['cupon'];
    $nivel = $row['nivel'];
    $mp =  $row['mercadopago'];
    $niver = $row['datan'];
    $datac = $row['datac'];
}
mysqli_close($link);
if($nome != null){
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    $_SESSION['status'] = $status;
    $_SESSION['cpf'] = $cpf;
    $_SESSION['banco'] = $bco;
    $_SESSION['agencia'] = $ag;
    $_SESSION['conta'] = $cta;
    $_SESSION['telefone'] = $tel;
    $_SESSION['cupon'] = $cod;
    $_SESSION['nivel'] = $nivel;
    $_SESSION['mercadopago'] = $mp;
    $_SESSION['niver'] = $niver;
    $_SESSION['datai'] = $datac;
    $_SESSION['logado'] = "1";
if($status == ""){
    header('Location: novasenha.php');
}else{
   header('Location: sistem/index.php'); 
}
 
    
}else{
    echo "acesso negado";
}
}else{
$sql = "UPDATE `vendedores` SET `senha` = '$senhap', `status` ='ativo' WHERE `email` = '$emailp'";
mysqli_query($link,$sql) or die("Acesso negado");
mysqli_close($link);
echo $sql;
header('Location: index.php');
}