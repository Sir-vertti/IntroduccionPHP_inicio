<?php include 'includes/header.php';

function sumar($numero1, $numero2) {
    echo $numero1 + $numero2;
    echo "<br>";
    echo $numero1;
}

sumar(10, 20);

function multiplicar($numero1,  $numero2) {
    echo $numero1 * $numero2;
    echo "<br>";
}

multiplicar(10, 20);


function perro($nombre, $raza = 'Pitbull') {
    echo "El nombre de mi perro es: $nombre y su raza es: $raza";
    echo "<br>";
}

perro('Toby');

function personas($nombre, $edad) {
    echo "mi nombre es {$nombre} y mi edad es {$edad}";
    echo "<br>";
}


personas('Verti', 20);


include 'includes/footer.php';