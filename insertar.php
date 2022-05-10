<?php
require_once 'conection.php';

if(isset($_POST)){

	$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
	$apaterno = isset($_POST['apaterno']) ? $_POST['apaterno'] : '';
	$amaterno = isset($_POST['amaterno']) ? $_POST['amaterno'] : '';
	$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

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
?>
