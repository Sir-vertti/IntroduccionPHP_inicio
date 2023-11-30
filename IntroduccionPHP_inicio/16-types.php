<?php

declare(strict_types=1); // Para que PHP sea estricto en los tipos de datos que se pasan a las funciones
include 'includes/header.php';


function usuarioAutenticado(bool $autenticado) : ?string { //!string indica que el tipo de dato que se va a retornar es un string o null
    if ($autenticado) {
        return 'El usuario esta autenticado';
    } else {
        return 'El usuario no esta autenticado';
    }
}

$usuario = usuarioAutenticado(true);
echo $usuario;



include 'includes/footer.php';