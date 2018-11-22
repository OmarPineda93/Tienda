<?php
$usr=$_POST['usuario'];
$pwd=$_POST['password'];

include("conexion.php");
$sql="SELECT * FROM empleado where id_empleado='$usr' and pasword='$pwd'";
$resultado=mysqli_query($conexion,$sql);
$contar=mysqli_num_rows($resultado);

if($contar>0)
{
	$usuario=mysqli_fetch_array($resultado);

	
    $_SESSION['vsCodigo']=$usuario['id_empleado'];
    $_SESSION['vsUser']=$usuario['nom_usu'];
	$_SESSION['vsNombre']=$usuario['pnombre'];
	$_SESSION['vsApellido']=$usuario['papellido'];
	$_SESSION['vsClave']=$usuario['pasword'];;
    $_SESSION['vsEstado']=$usuario['estado'];
	$_SESSION['vsTipo']=$usuario['id_rol_usuario'];
    
	if($usuario['tipo']=='1')
	{
		echo 'bienvenido a';
		//aqui donde quiere que lo redirijan
		//header("location:../admin.php");
	}else{
		
		echo 'bienvenido c';
		//aqui donde quiere que lo redirijan
		//header("location:../cliente.php");
	}
}
else
{
    header("location:Login.html");
	echo "Usuario NO encontrado.<br>";
	//echo "Acceso denegado al sistema<br>";
	//echo "<a href='../login.php'>Volver</a>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>