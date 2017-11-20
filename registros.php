<?php
	class registro{
		public $con;

		/*Metodo conectar*/
		function conectar(){
			$this->con = new mysqli("localhost","root","root2017","basedatos");
				if($con->connect_errno)
					die("Fallo la conexión: ".$this->con->connect_errno);				
	
		}

		/*Metodo registrarpersona*/
		function registrarpersona($nombre1,$apellido1,$apellido2,$identidad,$telefono1,$telefono2){
			$query = "INSERT INTO CLIENTES(primernombre, primerapellido, segundoapellido, identidad, telefonocasa, telefonomovil) 
					  VALUES('$nombre1', '$apellido1', '$apellido2', '$identidad', '$telefono1','$telefono2')";
			$insertar = $this->con->query($query);
		}

		function registrarprestamo($idcliente, $numeroprestamo, $cantidad, $cuota){
			$query = "INSERT INTO PRESTAMOS(idcliente, numeroprestamo, cantidadprestamo, cuota) 
					  VALUES('$idcliente', '$numeroprestamo', '$cantidad', '$cuota')";
			$insertar = $this->con->query($query);	
		}
	}
?>