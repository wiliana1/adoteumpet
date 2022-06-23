<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Nova Senha Distribuidor Ecttion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="https://cdn.jsdelivr.net/sweetalert2/4.2.4/sweetalert2.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/sweetalert2/4.2.4/sweetalert2.min.js"></script>
</head>
<body onload="arruma()">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="logon.php" target="_self" onsubmit="logon()">
					<span class="login100-form-title p-b-26">
						Altere sua senha
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-home zmdi-hc-fw"></i>
						<input name="ns" type="hidden" value="as">
					</span>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" id="email" name="email" value="<?php echo $_SESSION['email'];?>">
						<span class="focus-input100" data-placeholder="Email" readOnly></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" id="senha" type="password" name="pass" required>
						<span class="focus-input100" data-placeholder="Nova senha"></span>
						
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" id="csenha" type="password" name="cpass" onchange="confsenha()" required>
						<span class="focus-input100" data-placeholder="Confirme sua senha"></span>
						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Alterar
							</button>
						</div>
					</div>

				
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script>
	    function confsenha(){
	        var senha = document.getElementById('senha').value;
	        var csenha = document.getElementById('csenha').value;
	        if(senha != csenha){
	            document.getElementById('senha').value = "";
	            document.getElementById('senha').value = "";
	            swal({
                title: "As senhas não conferem",
                html: "Tente novamente",
                type: "error",
                showConfirmButton:true, 
                showCancelButton: false,
                })
	        }
	    }
	    function arruma(){
	     document.getElementById('email').focus();
	     document.getElementById('senha').focus();
	    }
	    function logon(){
	            swal({
                title: "Alterando sua senha",
                html: "Acessa com sua nova senha",
                type: "success",
                showConfirmButton:true, 
                showCancelButton: false,
                })
	    }

	</script>
	<script src="js/main.js"></script>

</body>
</html>