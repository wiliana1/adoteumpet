<html>
<body>
<head>
</head>
<?php 
$link = mysqli_connect("localhost", "u275160580_boot", "22068412", "u275160580_boot");
$user = $_GET['user'];


$sql = "SELECT * FROM `vendedores` WHERE `cupon` = '$user'";
$resultado = mysqli_query($link,$sql) or die("Acesso negado");
while ($row = mysqli_fetch_assoc($resultado)){
    $rows[] = $row;
    $email[] = $row['email'];
}

mysqli_close($link);

if($email[0] !=""){
        echo "<script>";
        echo "window.opener.document.getElementById('cod').value = '';";
        echo "window.opener.codtem();";
        echo "self.close();";
        echo "</script>";    
    }else{
        echo "<script>";
        echo "self.close();";
        echo "</script>"; 
    }
?>
</body>
</html>