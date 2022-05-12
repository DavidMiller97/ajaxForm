<?php
require_once 'conection.php';

if(isset($_POST)){

	$nombre = isset($_POST['nombre']) ? validar($_POST['nombre']) : '';
	$apaterno = isset($_POST['apaterno']) ? validar($_POST['apaterno']) : '';
	$amaterno = isset($_POST['amaterno']) ? validar($_POST['amaterno']) : '';
	$pass = isset($_POST['pass']) ? validar($_POST['pass']) : '';

	if(empty($nombre) || empty($apaterno) || empty($amaterno) || empty($pass)){
		echo 'Error en el formulario';
	}else{
		$sql = "INSERT INTO usuarios (nombre, apaterno, amaterno, pass) VALUES('$nombre', '$apaterno', '$amaterno', '$pass');";
                $result = pg_query($con, $sql);

                if($result){
                        echo 'Usuario almacenado';
                }else{
                	echo 'Error al almacenar al usuario';
		}

	}

}else{
	echo 'Error en el formulario';
}

function validar($data){

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
