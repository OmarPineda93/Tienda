<!DOCTYPE html>
<html lang="es">

<head>
    <!-- codigo generado por el lansador o extencio de Visual estudio code -->
    <!-- codificasion de caracteres -->
    <meta charset="UTF-8">
    <!-- Diseño web Responsive para html 5 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- compativilida para internt exploresr y Edge -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- icono de la pagina -->
    <link rel="shortcut icon" type="image/x-icon" href="../../img/icons/bup.jpg" />
    <!-- titulo -->
    <title>Libreria Dany</title>
    <!-- Hojas de estilo -->
    <link rel="stylesheet" type="text/css" href="../CSS/menu2.css"><!-- Hoja de menu de categorias-->
    <link rel="stylesheet" type="text/css" href="../CSS/index2.css"><!-- Hoja simi global-->
    <link rel="stylesheet" type="text/css" href="../CSS/css-foot.css">
    <!--Fotter-->
    <link rel="stylesheet" type="text/css" href="../CSS/table2.css">
    <!--Tabla de productos-->
    <link rel="stylesheet" type="text/css" href="../CSS/slider.css">
    <!--slideshow automatico -->
    <link rel="stylesheet" href="../CSS/divicion.css">
    <!--separador-->
    <link rel="stylesheet" href="../CSS/carrito.css">
    <!--carrito-->

    <!-- Scritps -->
    <script src="../JS/menu.js"></script>
</head>

<body>

    <header>
        <!--Logo de empresa-->
        <div id="logo">

        </div>
        <!--contendor Global-->
        <div id="conten">
            <!--Menu de categorias-->


            <!--Contenerdor de estilo visual con froma de triangulo y Buscador-->
            <div class="aParent">

                <div class="triangulo_top_left">

                </div>
                <!--Buscador-->
            </div>

            <!--Menu horizontal de botones -->
            <nav class="menu2">

               
                <!--Carrito de Compras-->
                <div id="carrito5" onclick="window.location = 'carrito.php'">
                    <a href="carrito.php">
                        <img id="car" src=" ../Img/administra.png">
                    </a>
                    <p id="total">Administracion</p>
                </div>

            </nav>
            <!--Seccion usuario logeado -->

            <div id="user">
                <a href="../vistas/Carrito.html">
                </a><a href="../vistas/Carrito.html">
                <br>
                    <img id="imguser" src=" ../Img/usuario.png">
                </a>
                <p id="nameuser"> Nombre <br> de <br> Usuario</p>
            </div>
        </div>
    </header>
    
    <div id="separador2">

    </div>
    <div id="separadorc">

    </div>
    <section id="seccar">
        <table id="tbcar1" width="96%">
            <tr align="center" id="enctb">
                 <td width="24%"><b>ID </b></td>
                <td width="24%"><b>Color</b></td>
                <td width="24%"><b>Actualizar</b></td>
                <td width="24%"><b>Eliminar</b></td>

            </tr>
        </table>
        <div id="separador2">

        </div>
<?
 require_once("../Scritp PHP/Conexion.php");
 $ConectarDB = new conexionBD();

$sql = "SELECT * FROM colores";
$result=$ConectarDB->conexion->query($sql);
while($row= mysqli_fetch_row ($result))
{
echo "<div id=\"target\">
<table id=\"tbcar\" width=\"100%\">
    <tr align=\"center\">

        <td width=\"24%\" id=\"tr11\">
        $row[0]
        </td>
        <td width=\"24%\" id=\"tr13\">$row[1]</td>
        <td width=\"24%\" id=\"tr13\">
          <center><a href=\"#\"><img id=\"elim\" src=\"../Img/actualizar.png\" width=10%></a></center>
        </td>
        <td width=\"24%\" id=\"tr13\">
            <center><a href=\"#\"><img id=\"elim\" src=\"../Img/eliminar.png\" width=10%></a></center>
        </td>
    </tr>
</table>
</div>";


}
?>

        

        


    </section>
    <div id="separador3">

    </div>

 

    <!-- Pie de pagina -->

</body>

</html>