<?php
session_start();
include 'enviaemail.php';
$_SESSION['volta'] = "1";
$hoje = date('d/m/Y');
$nome = $_POST['name']; 
$email = $_POST['email'];
$datan = $_POST['niver'];
$gerente = $_POST['mg'];
$cod = $_POST['cod'];
$senha =  substr(uniqid(rand()), 0, 6);
$msg = file_get_contents('https://ecttion.com/recrut/info/emailconfirmando.php?cod='.$senha);

function concluido($nome,$email,$datan,$cod,$senha,$gerente,$hoje){
$link = mysqli_connect("localhost", "u275160580_boot", "22068412", "u275160580_boot");
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
$sql = "INSERT INTO `vendedores`( `nome`, `email`, `datan`, `cupon`, `senha`, `gerente`, `datac`, `nivel`) VALUES ('$nome','$email','$datan','$cod','$senha', '$gerente', '$hoje', '1')";
//echo $sql;
mysqli_query($link,$sql) or die("Erro ao tentar cadastrar registr8o");
mysqli_close($link);
//echo "<script>confirmar('Sua senha de acesso foi encaminhada para seu email<br>', 'Faça Login para acompanhar suas vendas');</script>";

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link href="https://cdn.jsdelivr.net/sweetalert2/4.2.4/sweetalert2.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/sweetalert2/4.2.4/sweetalert2.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
function confirmar(t,c){
    var z = setInterval(function () {
    clearInterval(z);
    swal({
    type: 'success',
    title: t,
    text: c 
    }).then(function() {
     self.close();
    });
}, 8000);
    
}
function volta(){
   window.location.href = 'index.php';;
}
function aguarde(){
    swal({
    type: 'info',
    title: 'Aguarde',
    text: 'sua inscrição seja ativada assim que o processamento for concluído!' 
    }).then(function() {
      //window.location.href = 'https://boot.ecttion.com/pay/dirt.php';
      
    });
    //setInterval(function(){ window.location.href = 'https://boot.ecttion.com/'; }, 7000);
}  
</script>

</head>
<body onload="carregar()">
<div id="loading" style="display: block">
    <center><img src="https://boot.ecttion.com/images/load.gif" style="width:780px;height:520px;" /></center>
    <h1><center>Processando Aguarde!</center></h1>
</div>
<div id="conteudo"  style="display: none">
    Processado
    <?php
    concluido($nome,$email,$datan,$cod,$senha,$gerente,$hoje);
    enviaemail($email,$msg,$nome);
    ?>
</div>
<script>
   // window.opener.enviado();
    
    function carregar(){
    setInterval(function () {
    document.getElementById("loading").style.display = "inline";
    document.getElementById("conteudo").style.display = "none";
    }, 2000);
   // window.history.replaceState(null, null, "/");
    
    }
var i = setInterval(function () {
    clearInterval(i);
    // O código desejado é apenas isto:
    document.getElementById("loading").style.display = "none";
    document.getElementById("conteudo").style.display = "inline";
}, 2000);
var o = setInterval(function () {
    clearInterval(o);
    volta();
}, 4000);

</script>
</body>
</html>
