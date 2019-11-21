<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');

// controlladores
require_once "controllers/enlaces/enlacesController.php";
require_once "controllers/ingreso/ingresoController.php";
require_once "controllers/admin/adminController.php";
require_once "controllers/categorias/categoriasController.php";
require_once "controllers/productos/productosController.php";
require_once "controllers/proveedores/proveedoresController.php";
require_once "controllers/ventas/VentasController.php";
require_once "controllers/clientes/clientesController.php";

// modelos
require_once "models/enlaces/enlacesModel.php";
require_once "models/ingreso/ingresoModel.php";
require_once "models/admin/adminModel.php";
require_once "models/categorias/categoriasModel.php";
require_once "models/productos/productosModel.php";
require_once "models/proveedores/proveedoresModel.php";
require_once "models/ventas/ventasModel.php";
require_once "models/clientes/clientesModel.php";

$mvc = new MvcController();
$mvc->plantilla();
