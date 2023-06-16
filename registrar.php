<?php 
include("con_db.php");
if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['pais_residencia']) >= 1 && strlen($_POST['direccion']) >= 1) 
    {
	    $nombre = trim($_POST['nombre']);
	    $email = trim($_POST['email']);
	    $fecha_reg = date("d/m/y");
        $telefono = trim($_POST['telefono']);
        $pais_residencia = trim($_POST['pais_residencia']);
        $direccion = trim($_POST['direccion']);
        $consulta ="INSERT INTO 'datos-inscripcion('nombre', 'email', 'fecha_reg', 'telefono', 'pais_residencia', 'direccion') VALUES ('$nombre','$email','$fecha_reg','$telefono','$pais_residencia','$direccion')"; 
		$resultado = mysqli_query($conex,$consulta);
		echo "<pre>" . print_r($consulta) . "</pre>";
		echo "<pre>" . print_r($resultado) . "</pre>";
	    if ($resultado){
	    	echo "<h3 class="ok">ACA EL TEXTO</h3>";
	    }
		else{
			echo "<h3 class="bad">ACA EL TEXTO</h3>"
		}
	}
}
?>
