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
    <link rel="shortcut icon" type="image/x-icon" href="../Img/icons/bup.jpg" />
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
            <nav class="contenedor-menu" id="contenedor-menu">
                <div class="accordion arrows">

                    <nav class="box">
                        <input type="button" name="accordion" id="btn" onclick="mostrarmenu()">
                        <label class="box-title1" for="btn"> <img align="left" style=" position: relative; top: 6px; left: 10px; opacity: 85%;"
                                src="../Img/menu.png"> Categorias</label>
                    </nav>

                    <div id="menu">
                        <input type="radio" name="accordion" id="cb1">

                        <section class="box">
                            <label class="box-title" for="cb1">Escritura</label>
                            <label class="box-close" for="acc-close"></label>
                            <div class="box-content">

                                <table>

                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="cuadernos_libretas.php">
                                                    Cuadernos y libretas
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="lapices_boligrafos.php">
                                                    lapices y Boligrafos
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="extras1.php">
                                                    Extras
                                                </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </section>

                        <input type="radio" name="accordion" id="cb2">
                        <section class="box">
                            <label class="box-title" for="cb2">Manualidades</label>
                            <label class="box-close" for="acc-close"></label>
                            <div class="box-content">

                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="papeleria.php">
                                                    Papeleria
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="foamy.php"> Foamy</a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="materialDecorativo.php">Material Decorativo</a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="coloreo.php">Coloreo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="pegamento.php">Pegamentos y Adecivos</a>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="extras2.php"> Extras</a>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </section>

                        <input type="radio" name="accordion" id="cb3">
                        <section class="box">
                            <label class="box-title" for="cb3">Libros</label>
                            <label class="box-close" for="acc-close"></label>
                            <div class="box-content">

                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="librosTexto.php">
                                                    Libros de Texto
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="obras.php"> Obras literias</a>

                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </section>

                        <!--        <input type="radio" name="accordion" id="cb4">
                        <section class="box">
                            <label class="box-title" for="cb4">Item 3</label>
                            <label class="box-close" for="acc-close"></label>
                            <div class="box-content">

                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    Cuadernos
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Libretas
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </section>

                        <input type="radio" name="accordion" id="cb5">
                        <section class="box">
                            <label class="box-title" for="cb5">Item 3</label>
                            <label class="box-close" for="acc-close"></label>
                            <div class="box-content">

                                <table>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    Cuadernos
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div style=" width: 100% ; height: 1px ;background:rgb(128, 133, 138)"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Libretas
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </section> -->
                        <input type="radio" name="accordion" id="acc-close">
                    </div>
                </div>
            </nav>

            <!--Contenerdor de estilo visual con froma de triangulo y Buscador-->
            <div class="aParent">

                <div class="triangulo_top_left">

                </div>
                <!--Buscador-->
                <nav class="search">
                    <input type="text" class="searchTerm" placeholder="Buscar">
                    <input type="button" class="searchButton" placeholder="Buscar">
                    <i class="fa fa-search"></i>
                </nav>
            </div>

            <!--Menu horizontal de botones -->
            <nav class="menu2">
                <div id="navegacion">
                    <nav id="colorNav2">
                        <ul id="ulu2">
                            <li class="gren2">
                                <a href="../index.php">
                                    <p>Inicio</p>
                                </a>
                                <ul>
                                </ul>
                            </li>
                            <li class="red2">
                                <a href="infromacion.php">
                                    <p for="btn2"> Información</p>
                                </a>
                                <ul>
                                </ul>
                            </li>
                            <li class="purple2">
                                <p href="#">Sesión</p>
                                <ul>
                                    <li><a href="login.php">Iniciar Sesión</a></li>
                                    <li><a href="registrarse.php">Registrate</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--Carrito de Compras-->
                <div id="carrito2">
                    <a href="carrito.php">
                    </a><a href="carrito.php">
                        <img id="car" src=" ../Img/carrito4.png">
                    </a>
                    <p id="total">Carrito <br> $00.00</p>
                </div>


            </nav>
            <!--Seccion usuario logeado -->

            <div id="user">
                <a href="../vistas/Carrito.html">
                </a><a href="../vistas/Carrito.html">
                    <img id="imguser" src=" ../Img/usuario.png">
                </a>
                <p id="nameuser"> Nombre <br> de <br> Usuario</p>
            </div>
        </div>
    </header>

    <div id="separador">

    </div>
    <div id="separador">

    </div>

    <!--titulo-->
    <section class="section1">
        <h3>Nuestros Productos</h3>
    </section>
    <!-- Divicion contratia de estilo visual-->
    <div id="divicion2">
        <div class="linea2">
        </div>
        <div class="circulo2">
        </div>
    </div>


    <!-- Tabla de productos -->
    <section id="manta" style=" width: 100% ; ">

        <table align="center">

            <tr>

                <td>

                    <div class="profile">

                        <img SRC=" ../Img/foamy1.jpg" />

                        <h1>
                            Papel Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $0.75
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>

                <td>

                    <div class="profile">

                        <img SRC=" ../Img/cepilloFoami.jpg" />

                        <h1>
                            Cepillo para Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>

                <td>

                    <div class="profile">

                        <img SRC=" ../Img/foamiDecorado.jpg" />

                        <h1>
                            Decoraciones de Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.00 a $3.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>

                <td>

                    <div class="profile">

                        <img SRC=" ../Img/cuadernoFoami.jpg" />

                        <h1>
                            Agenda decorado con foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.50
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>

            </tr>
            <tr>
                <td colspan="4">
                    <div id="divicion">
                        <div class="circulo">
                        </div>
                        <div class="linea">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>

                <td>

                    <div class="profile">

                        <img SRC=" ../Img/cajaFoami.jpg" />

                        <h1>
                            Caja de Foami para Regalos
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $2.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>

                <td>

                    <div class="profile">

                        <img SRC=" ../Img/foamiBrillantina.jpg" />

                        <h1>
                            Foami con Brillantina
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.50
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>

                <td>

                    <div class="profile">

                        <img SRC=" ../Img/foamiAlfombra.jpg" />

                        <h1>
                            Foami para decorar salas
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $3.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>

                <td>

                    <div class="profile">

                        <img SRC="  ../Img/bloqueFoami.jpg" />

                        <h1>
                            Bloques de Foami para Construir
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $3.50
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>

            </tr>
            <tr>
                <td colspan="4">
                    <div id="divicion2">
                        <div class="linea2">
                        </div>
                        <div class="circulo2">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>

                <td>

                    <div class="profile">

                        <img SRC="  ../Img/gorraFoami.jpg" />

                        <h1>
                            Gorras hechas con Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $2.50
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC="  ../Img/zapatoFoami.jpg" />

                        <h1>
                            Zapato hecho de Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.25
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC="  ../Img/portaRetratosFoami.jpg" />

                        <h1>
                            Porta Retratos hecho de Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.50
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC="   ../Img/centroFoami.jpg" />

                        <h1>
                            Centro de mesa de Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $3.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>


            </tr>
            <tr>
                <td colspan="4">
                    <div id="divicion">
                        <div class="circulo">
                        </div>
                        <div class="linea">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>

                <td>

                    <div class="profile">

                        <img SRC="../Img/carteraFoami.jpg" />

                        <h1>
                            Carteras hechas de Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $3.25
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC="../Img/libroFoami.jpg" />

                        <h1>
                            Libro para crear manualidades con Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $2.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC="../Img/foami6mm.jpg" />

                        <h1>
                            Foami de 6mm
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.25
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC=" ../Img/pliegoFoami.jpg" />

                        <h1>
                            Pliegos de papel Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $2.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>


            </tr>
            <tr>
                <td colspan="4">
                    <div id="divicion2">
                        <div class="linea2">
                        </div>
                        <div class="circulo2">
                        </div>
                    </div>
                </td>
            </tr>
            <tr>

                <td>

                    <div class="profile">

                        <img SRC="../Img/foamiMulti.jpg" />

                        <h1>
                            Foami multicolor
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.25
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC="../Img/cosmetiqueraFoami.jpg" />

                        <h1>
                            Cosmetiquera hecha de Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $3.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC="../Img/cajasGrandesFoami.jpg" />

                        <h1>
                            Caja Grande hecha de Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $4.50
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>
                <td>

                    <div class="profile">

                        <img SRC="../Img/fundaFoami.jpg" />

                        <h1>
                            Fudas hechas de Foami
                        </h1>

                        <div class="bar">

                            <span class="one"></span><span class="two"></span><span class="three"></span><span class="four"></span><span
                                class="five"></span>

                        </div>

                        <h2>
                            $1.75 a $3.00
                        </h2>

                        <input type="button" class="btn" value="Añadir al Carrito">

                    </div>

                </td>


            </tr>
            <tr>
                <td colspan="4">
                    <div id="divicion">
                        <div class="circulo">
                        </div>
                        <div class="linea">
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </section>



    <!-- Pie de pagina -->
    <footer class="pied" ;>
        <table id="piedf">
            <tr>
                <td rowspan="4">
                    <h2>Información de Contacto</h2>
                    <div id="line">

                    </div>
                    <h4>Dirección</h4>
                    79 Av. Norte, Col. Escalón, San Salvador.
                    <h4>Teléfono</h4>
                    (503) 2222-2222
                    <h4>Correo</h4>
                    correo@correo.com.sv <br />
                    <table>
                        <tr>
                            <td>
                                <a href="#" title=""><img src="./Img/facebook.png" alt="Facebook" /></a>
                            </td>
                            <td>
                                <a href="#" title=""><img src="./Img/instagram.png" alt="Instagram" /></a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td colspan="4">
                    <h2>Suscripción</h2>
                    <div id="line">

                    </div>
                    <table width="100%">
                        <tr>
                            <td>
                                Obtenga toda la informacion acerca de nuestros productos, <br> ofertas y más.
                            </td>
                            <td>
                                <input id="suscripcionEmail" type="email" name="" value="" placeholder="Tu dirección de correo aqui" /><input
                                    id="suscripcionEnviar" type="submit" name="name" value="Sing In" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <hr />
                </td>
            </tr>
            <tr>
                <td>
                    <table id="td2">
                        <thead class="center">
                            <tr>
                                <td>
                                    Mi cuenta
                                </td>
                                <td>
                                    Pagos y Envios
                                </td>
                                <td>
                                    Información
                                </td>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="center">
                                    <ul>
                                        <li><a href="#">Iniciar sesión</a></li>
                                        <li><a href="#">Carrito</a></li>
                                        <li><a href="#">Mis compras</a></li>
                                    </ul>
                                </td>
                                <td class="center">
                                    <ul>
                                        <li><a href="#">Cotizaciones</a></li>
                                        <li><a href="#">Costos</a></li>
                                    </ul>
                                </td>
                                <td class="center">
                                    <ul>
                                        <li><a href="#">Promociones</a></li>
                                        <li><a href="#">Ventas por mayoreo</a></li>
                                        <li><a href="#">Ofertas</a></li>
                                    </ul>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    &copy; UTEC 2018. All Rights Reserved.
                </td>
            </tr>
        </table>
    </footer>


</body>

</html>