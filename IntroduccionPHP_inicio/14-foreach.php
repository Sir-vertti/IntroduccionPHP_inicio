<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor',
        'precio' => 400,
        'disponible' => false
    ]
];

foreach ($productos as $producto) { ?>
   echo <li>
        <p>Producto: <?php echo $producto ['nombre'];?></p>
        <p>Precio: <?php echo "$" . $producto ['precio'];?></p>
        <p> <?php echo($producto ['disponible'])? 'Disponible' : 'No Disponible' ?></p> //!ESTA ES LA MANERA DE HACERLO MAS CORTA

        <!-- <?php //!ESTA ES LA OTRA MANERA DE HACERLO PERO MAS LARGA
            if ($producto ['disponible']) {
                echo "<p>Disponible</p>";
            } else {
                echo "<p>No Disponible</p>";
            
            }
        ?> -->
   echo </li>

<?php
    echo "<pre>";
    var_dump($producto);
    echo "</pre>";
    
}

include 'includes/footer.php';