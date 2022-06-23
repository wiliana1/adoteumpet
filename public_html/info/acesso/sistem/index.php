<?php
session_start();

if(trim($_SESSION['logado']) == "1"){

?>
<style>
    
iframe#frameEspecificacoes{
  background: #AAA;
  border: none;
  overflow: hidden;
}

iframe#frameEspecificacoes::-webkit-scrollbar { 
	display: none;
}
</style>
 <title>
    Plataforma de vendas Ecttion
  </title>
<iframe id="frameEspecificacoes" height="100%" width ="100%" src = 'examples/dashboard.php'></iframe>
<?php 
}else{
 echo "<script>alert('por segurança autentique-se novamente')</script>";
 echo  $_SESSION['logado']." cookie atual";
 echo "<script>window.location.href = 'https://ecttion.com/recrut/info/acesso/;</script>";   
}

