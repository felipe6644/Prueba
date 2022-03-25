<?php 
$connect=mysqli_connect('localhost','root','','prueba_datos');

$name=$_POST['name'];
$last_name=$_POST['last_name'];

if (isset($name)&&isset($last_name)) {
	$sql="INSERT into users (name,last_name)
	values ('$name','$last_name')";
	echo mysqli_query($connect,$sql);
	echo 'Gracias '.$name.' - '.$last_name.'. La consulta se realizo correctamente!';
}else{
	echo 'todos los datos son requeridos';
}
mysqli_close($connect);
?>