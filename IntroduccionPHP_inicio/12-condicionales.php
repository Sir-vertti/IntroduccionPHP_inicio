<?php include 'includes/header.php';

$autenticado = false;
$admin = true;

if($autenticado && $admin) {
    echo "El usuario esta autenticado";
}else {
    echo "El usuario no esta autenticado, Inicia sesion";
    echo "<br/>";
}

//if anidados

$cliente = [
    'nombre' => 'Alondra <3',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

if(!empty($cliente)) {
    echo "El arreglo de cliente no esta vacio";
    echo "<br/>";
    echo ($cliente['nombre']);
    echo "<br/>";

    if($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
        echo "<br/>";
    } else {
        echo "No hay saldo";
        echo "<br/>";
    }
} 


//else if 

if($cliente['saldo'] > 201) {
    echo "El cliente tiene saldo disponible";
} else if ($cliente['informacion']['tipo'] === 'premium') {
    echo "El cliente es premium";
    echo "<br/>";   
} else {
    echo "No hay limite de saldo";
    echo "<br/>";   
}


//switch

$tecnologia = 'php';

switch($tecnologia) {
    case 'php':
        echo "PHP, un excelente lenguaje";
        break;

        default:
            echo "Aun no hay contenido para esta tecnologia";
            break;
} 


include 'includes/footer.php';