<?php

/*
hi from github
$algo = $_GET['algo'];
$nume = $_GET['numero'];
echo $algo.$nume;*/
/*$algo = $_POST['algo']; 
$dos = $_POST['nume'];
$tres = $_POST['cosa'];*/

/*ARREGLO ASOCIATIVO POR NUMERO
$array2 = array(123,"loquesea",987);
echo $array2[];*/


	/*		
$arreglo = array('algo' => 'Bruno', 'dos' => 'Leon', 'tres' => 'TECSUP');
echo $arreglo['algo'];*/
/*
ARREGLOS ASOCIATIVOS A NOMBRE
$arreglo = array('algo' => $algo, 'dos' => 'Leon', 'tres' => 'TECSUP');

echo $arreglo['algo'];*/




			/*//<input type="text" name="llave">bruno
$arr = array('llave' => "bruno");*/

//echo var_dump($arr['llave']);

//echo $algo;


	/*$nombre = $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$direccion= $_POST['direccion'];
	$telefono= $_POST['telefono'];*/

//PARAMETROS DE MYSQLI
$ser = "localhost";
$user = "root";
$pass = "feelingshitty";
$bd = "domingo";

//CONEXION A MYSQLI
$conexion = mysqli_connect($ser, $user, $pass, $bd)
	or die("Error en la conexion!");

//EL QUERY O CONSULTA
$insertar="SELECT * FROM prueba";


/*
SQL INJECTION
	SI TU MANDAS EL $_POST DENTRO DEL QUERY, no se puede autentificar o filtrar
$insertar="INSERT INTO `domingo`.`prueba` (nombre, apellido, direccion, telefono) VALUES ('$_POST['nombre']' <!----
, '$apellido', '$direccion', '$telefono')";


$insertar="INSERT INTO `domingo`.`prueba` (nombre, apellido, direccion, telefono) VALUES ('"."bruno"."'	<!----
, '$apellido', '$direccion', '$telefono')";
*/




//RESULT
$resultado=mysqli_query($conexion,$insertar)
	or die("Error al insertar");

if (mysqli_num_rows($resultado) > 0) {
    // output data of each row
	//echo mysqli_num_rows($resultado);
    //fetch_assoc = crear un arreglo asociativo
    
    while($row = mysqli_fetch_assoc($resultado)) {
        echo "nombre: " . $row["nombre"]. " - apellido: " . $row["apellido"]. " direccion: " . $row["direccion"]." ".$row["telefono"]. "<br>";
    }
    /*while($row = mysqli_fetch_array($resultado)) {
        echo "nombre: " . $row[1]. " - apellido: " . $row["apellido"]. " direccion: " . $row["direccion"]." ".$row["telefono"]. "<br>";
        echo var_dump($row);
    }*/

} else {
    echo "0 results";
}




mysqli_close($conexion);
echo "SUCCESSFUL COMMIT";


?>
