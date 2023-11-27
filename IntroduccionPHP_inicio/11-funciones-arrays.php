<?php include 'includes/header.php';

// in_array: buscar elementos
$carrito = ['tablet', 'television', 'computadora'];
var_dump( in_array('tablet', $carrito) );
echo "<br>";
var_dump(in_array('iphone', $carrito)); 

// ordenar elementos de un array
$numeros = array(3,4,5,1,2);
sort($numeros); // ordenar de menor a mayor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//de mayor a menor
rsort($numeros);

// ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo "<pre>";
asort($cliente); // ordenar por valor 
arsort($cliente); // ordenar por valor 
ksort($cliente); // ordenar por clave orden alfabético
krsort($cliente); // ordenar por clave en orden inverso alfabético
echo "</pre>";


include 'includes/footer.php';