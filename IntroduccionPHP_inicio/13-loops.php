<?php include 'includes/header.php';

//!! loops

//while 
$i = 0; //inicializador

while ($i < 10) {

    echo $i . "<br/>";

    $i++; //incremento

}

echo "<br/>";


//do while
$i = 0;

do   {
        echo $i . "<br/>";
        $i++;
    } while ($i < 10); {
}


echo "<br/>";

for ($i = 0; $i < 100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "-FizzBuzz <br/>";
    } else if ($i % 3 === 0) {
        echo $i . "-Fizz <br/>";
    } else if ($i % 5 === 0) {
        echo $i . "-Buzz <br/>";
    } else {
        echo $i . "<br/>";
    }
}

echo "<br/>";

$clientes = array('Pedro', 'Juan', 'Karen');

foreach ($clientes as $cliente) {
    echo $cliente . "<br/>";
}

echo count ($clientes);

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ($cliente as $key => $valor) {
    echo $key . " - " . $valor . "<br/>";
}


$hola = [
    'nombre' => 'Carlos',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach ($hola as $llave => $valor ) {
    echo $llave . "-" . $valor . "<br/>";
}

include 'includes/footer.php';
