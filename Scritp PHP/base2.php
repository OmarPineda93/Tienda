<?php


 class conexionBD {
   public $conexion;
private $server = "localhost";
private   $usuario = "root";
private    $pass = "";
private    $baseDeDatos = "db_inmobiliaria";

public function __construct()
{
  $this->conexion = new mysqli($this->server,
                              $this->usuario,
                              $this->pass);
  
}

  public function conectarDB()
  {
    if ($this->conexion ->connect_errno) {
      echo "<script type=\"text/javascript\">alert(\"No Se Puede Conectar a La Base de Datos\");</script>"; 
      exit;
    }else{
      echo "<script type=\"text/javascript\">alert(\"Conexion a la base de datos con exito\");</script>"; 
    }
  }

  public function salirDB()
  {


      $this->conexion->close();
    
  }


  public function crearDB()
  {

    $this->conectarDB();
    // sql query with CREATE DATABASE
    $sql = "create database Libreria";
    $this->conexion->query($sql);
    
        $this->conexion = new mysqli($this->server,
          $this->usuario,
          $this->pass,
          "Libreria");

          $sql = "CREATE TABLE factura(\n"

    . "    serie INT AUTO_INCREMENT,\n"

    . "    cod_factura VARCHAR(8),\n"

    . "    PRIMARY KEY(serie, cod_factura),\n"

    . "    fecha_fac DATE,\n"

    . "    id_sucursal INT,\n"

    . "    NRC_dueño VARCHAR(20),\n"

    . "    id_emplado INT,\n"

    . "    id_cliente INT,\n"

    . "    descrip VARCHAR(60),\n"

    . "    descuento NUMERIC(4, 2),\n"

    . "    total NUMERIC(7, 2),\n"

    . "    iva NUMERIC(5, 2),\n"

    . "    estado VARCHAR(30),\n"

    . "    venta_Exenta NUMERIC(5, 2),\n"

    . "    venta_Gravada NUMERIC(5, 2),\n"

    . "    id_pago INT \n"

    . ")";

       

            $this->conexion->query($sql);



        $this->conexion->close();


  }



  function ejecutarSQL()
  {
    $queries = explode(';', file_get_contents("Base de Datos/Tienda.sql"));
    foreach($queries as $query)
    {
      if($query != '')
      {
          $this->conexion->query($query);
      }
    }
  }


}

$crearDB = new conexionBD;
$crearDB->crearDB();




?>


