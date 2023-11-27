<?php include 'includes/header.php';

// Definir un array asociativo llamado $cliente
$cliente = [
    'nombre' => 'carlos', // Asignar el valor 'carlos' a la clave 'nombre'
    'saldo ' => 200, // Asignar el valor 200 a la clave 'saldo'
    'informacion' => [ // Asignar un array anidado a la clave 'informacion'
        'tipo' => 'premium', // Asignar el valor 'premium' a la clave 'tipo'
        'disponible' => 100 // Asignar el valor 100 a la clave 'disponible'
    ]
];

// Mostrar el contenido del array $cliente utilizando var_dump
echo "<pre>";
var_dump ($cliente);
echo "</pre>";

// Mostrar el valor de la clave 'nombre' del array $cliente
echo $cliente['nombre'];

// Mostrar el valor de la clave 'tipo' del array $cliente['informacion']
echo $cliente['informacion'] ['tipo'];

// Agregar una nueva clave 'codigo' con el valor 1234 al array $cliente
$cliente['codigo'] = 1234;
var_dump($cliente);

include 'includes/footer.php';

