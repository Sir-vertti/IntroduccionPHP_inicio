<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200
]; 


// empty: Revisa si un arreglo esta vacio
var_dump( empty($clientes) );
echo "<br>"; 
var_dump( empty($clientes2) );
echo "<br>";
var_dump( empty($clientes3) );
echo "<br>";

// isset: Revisa si un arreglo esta creado o una propiedad esta definida
var_dump( isset($clientes) );
var_dump( isset($clientes2) );
var_dump( isset($clientes3) );
var_dump( isset($clientes4) );

var_dump(isset($cliente['nombre']));
include 'includes/footer.php';