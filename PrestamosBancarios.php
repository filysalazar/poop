<!DOCTYPE html>
<html>
<head>
	<title>Empresa de Prestamos Bancarios</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body background="mifondo.jpg">
<center>
<br>
<img src="logo.png" height="100px">
<P>BIENVENIDO A PRESTAMOS BANCARIOS DE S.R</P>
<br>
<form action="registrarprestamo.php" method="POST">
	nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="nom1" required><br><br>
	primer apellido&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="ape1" required><br><br>
	segundo apellido <input type="text" name="ape2" required><br><br>
	identidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="id" required><br><br>
	telefono casa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="tel1" required><br><br>
	tefono movil&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="tel2" required><br><br>
	N° prestamo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="nump" required><br><br>
	Cantidad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="cant" required><br><br>
	fecha autorizacion&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="date" name="fecha" value="2017-11-01" required><br><br>
	cuota&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="cuo" required><br><br>
	Tipo de Prestamo&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="tipop" form="prestamo">	
	  <option value="Prestamo Personal">Prestamo Bancario</option>
	  <option value="Prestamo de estudio">Prestamo De Estudio</option>
	  <option value="Prestamo Hipotecario">Prestamo Hipotecario</option>
	</select><br><br>
	<input type="submit" name="btnRegistrar" value="registrar">

</form>

</body>
</html>