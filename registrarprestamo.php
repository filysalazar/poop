<?php

	/*Datos de persona recolectados por POST*/
	$nom1 = $_POST['nom1'];
	$ape1 = $_POST['ape1'];
	$ape2 = $_POST['ape2'];
	$ide = $_POST['ide'];
	$tel1 = $_POST['tel1'];
	$tel2 = $_POST['tel2'];

	/*Datos de prestamo recolectados por POST*/
	$np = $_POST['nump'];
	$ct = $_POST['cant'];
	$fe = $_POST['fecha'];
	$cuo = $_POST['cuo'];
	$tp = $_POST['tipop'];

	echo "nombre: ".$nom1;

	include 'registros.php';	

	class consulta extends registro{
	function getidcliente($nom1){
		$query = "SELECT idclientes FROM clientes WHERE primernombre='$nom1'";
		$result = $this->con->query($query); 
		$id="";
		while ($row = mysqli_fetch_array($result)) {
			$id=$row['idclientes'];
		}
		return $id;
	}

	function getidmax(){
		$query = "SELECT MAX(idclientes) as id FROM clientes";
		$result = $this->con->query($query); 
		$id="";
		while ($row = mysqli_fetch_array($result)) {
			$id=$row['id'];
		}
		return $id;
	}

	}

	$reg = new consulta();
	$reg->conectar();	
	if($reg->getidcliente($nom1)!=""){
		echo "llego aqui 1";
		$reg->registrarprestamo($reg->getidcliente($nom1),$np,$ct,$cuo);
	}
	else{
		echo "<br>llego aqui 2";
		$reg->registrarprestamo((($reg->getidmax())+1),$np,$ct,$cuo);
	    //$reg->registrarpersona($nom1,$ape2,$ape1,$ide,$tel1,$tel2);
	}
		
	//$reg->registrarprestamo($np,$ct,$fe,$cuo);*/
	//$reg->registrarpersona($nom1,$ape1,$ape2,$ide,$tel1,$tel2);
?>