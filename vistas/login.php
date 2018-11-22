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
    <link rel="stylesheet" type="text/css" href="../CSS/css-foot.css"> <!--Fotter-->
    <link rel="stylesheet" type="text/css" href="../CSS/table2.css"> <!--Tabla de productos-->
    <link rel="stylesheet" href="../CSS/divicion.css">

    <!--slideshow automatico -->
    <link rel="stylesheet" href="../CSS/divicion.css">
    <!--separador-->
    <link rel="stylesheet" href="../CSS/carrito.css">
    <!--carrito-->
    <link rel="stylesheet" href="../CSS/css-login.css">

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
                                                <a href="../vistas/Cuadernos_Libretas.html">
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
                                                <a href="../vistas/lapices_boligrafos.html">
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
                                                <a href="#">
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
                                                <a href="../vistas/Papeleria.html">
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
                                                <a href="../vistas/foamy.html"> Foamy</a>

                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../vistas/materialDecorativo.html">Material Decorativo</a>

                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../vistas/Coloreo.html">Coloreo</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../vistas/Pegamentos.html">Pegamentos y Adecivos</a>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>
                                                <div id="sep"></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="../vistas/extras2.html"> Extras</a>

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
                                                <a href="../vistas/librosTexto.html">
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
                                                <a href="../vistas/Obras.html"> Obras literias</a>

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
                <div id="navegacion2">
                    <nav id="colorNav">
                        <ul id="ulu">
                            <li class="red">
                                <a href="../vistas/Infromacion.html">
                                    <p for="btn2"> Información</p>
                                </a>
                                <ul>
                                </ul>
                            </li>
                            <li class="purple">
                                <p href="#">Sesión</p>
                                <ul>
                                    <li><a href="../vistas/Login.html">Iniciar Sesión</a></li>
                                    <li><a href="../vistas/Registrar.html">Registrate</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--Carrito de Compras-->
                <a href="../vistas/Carrito.html">
                    <div id="carrito"><a href="../vistas/Carrito.html">
                        </a><a href="../vistas/Carrito.html">
                            <img src="../Img/carrito2.png">
                        </a>
                        <p>Carrito <br> $00.00</p>
                    </div>
                </a>
                <!--Seccion usuario logeado -->

                <div id="user">
                    <a href="#">
                    </a><a href="#">
                        <img id="imguser" src="../img/usuario.png">
                    </a>
                    <p id="nameuser"> Nombre <br> de <br> Usuario</p>
                </div>

            </nav>
            <!--Seccion usuario logeado -->

            <div id="user">
                <a href="../Vistas/Carrito.html">
                </a><a href="../Vistas/Carrito.html">
                    <img id="imguser" src="../img/usuario.png">
                </a>
                <p id="nameuser"> Nombre <br> de <br> Usuario</p>
            </div>
        </div>
    </header>
    <div id="separadorc">

    </div>
    <div id="separadorc">

    </div>

    <!-- Divicion de estilo visual-->
    <div id="divicion">
        <div class="circulo">
        </div>
        <div class="linea">
        </div>
    </div>
    <!--titulo-->
    <section class="section1">
        <h3>Inicia Sesion</h3>
    </section>
    <!-- Divicion contratia de estilo visual-->
    <div id="divicion2">
        <div class="linea2">
        </div>
        <div class="circulo2">
        </div>
    </div>
    <div id="separadorc">

    </div>
    <section>
        <div class="base">
            <div class="Content">
                <div>
                    <!--<img src="icon.svg" id="icon" alt="User Icon" />-->
                    <img src="../Img/login.PNG" alt="Login" />
                </div>
                <form name="login" action="validar.php" method="POST">
                    <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>
                    <input type="submit" value="Acceder">
                </form>
                <div class="Footer">
                    <a href="#">Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </section>
    <div id="separadorc">

    </div>
    <!-- Divicion de estilo visual-->
    <div id="divicion">
        <div class="circulo">
        </div>
        <div class="linea">
        </div>
    </div>

    <div id="separadorc">

    </div>
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
                                <a href="#" title=""><img src="../Img/facebook.png" alt="Facebook" /></a>
                            </td>
                            <td>
                                <a href="#" title=""><img src="../Img/instagram.png" alt="Instagram" /></a>
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