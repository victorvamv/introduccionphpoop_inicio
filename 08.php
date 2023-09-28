<?php include 'includes/header.php';
require 'vendor/autoload.php';
// Incluir las otras clases 

// require 'clases/Clientes.php';
// require 'clases/Detalles.php';

use App\Clientes;
use App\Detalles;
// Incluir las otras clases

$detalles = new Detalles();
$clientes = new Clientes();

include 'includes/footer.php';