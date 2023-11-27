<?php include 'includes/header.php';

$nombreCliente = "Carlos Verti";

//Conocer extension de un string
echo strlen($nombreCliente);
echo "<br/>";

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br/>";

//Convertir a mayusculas
echo strtoupper($nombreCliente);
echo "<br/>";

//Convertir a minusculas
echo strtolower($nombreCliente);
echo "<br/>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br/>";

//Reemplazar
echo str_replace ('Carlos', 'Ingeniero', $nombreCliente);
echo "<br/>";

//Revisar si un string existe o no
echo strpos($nombreCliente, 'Carlos');
echo "<br/>";

echo strpos($nombreCliente, 'lesli');
echo "<br/>";

//Concatenar
$tipoCliente = "Premium";
echo "<br/>";

echo "El cliente" .$nombreCliente . "es" .$tipoCliente;
echo "<br/>";

echo "El cliente {$nombreCliente} es {$tipoCliente}";
echo "<br/>";   


include 'includes/footer.php';
