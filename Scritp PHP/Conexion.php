<?php
class conexionBD {
    public $conexion;
    private $server = "localhost";
    private   $usuario = "root";
    private    $pass = "";
    private    $baseDeDatos = "Libreria";

    public function __construct()
    {
    $this->conexion = new mysqli($this->server,
                                $this->usuario,
                                $this->pass,
                                $this->baseDeDatos);
    }

    public function conectarDB()
    {
        if ($this->conexion ->connect_errno) {
        echo "<script type=\"text/javascript\">alert(\"No Se Puede Conectar a La Base de Datos\");</script>"; 
        }else{
        echo "<script type=\"text/javascript\">alert(\"Conexion a la base de datos con exito\");</script>"; 
        }
    }

    public function salirDB()
    {
        $this->conexion->close();    
    }













}

?>


