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
    <!--separador-->
    <link rel="stylesheet" href="../CSS/carrito.css">
    <!--carrito-->
    <link rel="stylesheet" type="text/css" href="../CSS/adminfrm.css">
    <link rel="stylesheet" type="text/css" href="../CSS/formulario.css">
    <script src="../JS/verfrm.js"></script>
    <script src="../JS/verfrm1.js"></script>
    <!-- Scritps -->
    <script src="../JS/menu.js"></script>
</head>

<body>

    <header style=" height: 260px;  background-color: #ffffff;">

        <!--contendor Global-->
        <div id="conten">
    
        <!--Logo de empresa-->
        <div id="logo">
                

                <img src="../Img/icons/logo.png" alt="" srcset="" width="30%" height="80%" id="logo1">
                <h1 id="textp">Panel de Administracion</h1> 
            </div>
            <!--Menu horizontal de botones -->
            <nav class="menu2" >
                <div id="navegacion">
                    <nav id="colorNav2">
                        <ul id="ulu2">
                            <li class="gren2">
                                <a href="../Index.html">
                                    <p>Inicio</p>
                                </a>
                                <ul>
                                </ul>
                            </li>
                            <li class="red2">
                                <p for="btn2" href="#">Información</p>
                                <ul>
                                </ul>
                            </li>
                            <li class="purple2">
                                <p href="#">Sesión</p>
                                <ul>
                                    <li><a href="#">Iniciar Sesión</a></li>
                                    <li><a href="#">Registrate</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--Carrito de Compras-->


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



    <div id="factura">
            <aside id="marcas">
          <div id="tbtnadmidn">
              <p>Productos.</p>
                <input type="button" value="" id="btnprod" onclick="mostrarfrm4()" >
                <br>
                <br>
                <p>Provedores.</p>
                <input type="button" value="" id="btnprod-1" onclick="mostrarfrm5()" >
                <br>
                <br>
                <p>Clientes.</p>
                <input type="button" value="" id="btnprod-2" onclick="mostrarfrm6()" >
          </div>

            </aside>
                <section id="contfac" >
                    <div id="facturat" >
                            <div id="base" >   
                                    <div id="navegacion4">
                                            <nav id="colorNav">
                                                <ul>
                                                    <li >
                                                    <input id="1" class="red" type="button" value="Colores" onclick="mostrarfrm1()" >
                                                    </li>
                                                    <li >
                                                        <input id="2" class="blue" type="button" value="Marca" onclick="mostrarfrm2()"> 
                                                    </li>
                                                    <li >
                                                        <input id="3" class="purple" type="button" value="Precentacion" onclick="mostrarfrm3()" > 
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>         
                            </div>
                            
                            <div id="adminfrm1" >   

                                
                                            <form class="form_reg" action="guardar.php" method="POST">
                                                    
                                                    <input class="input" type="text" placeholder="
                                                    Codigo de color" required autofocus>
                                
                                                    <input class="input" type="text" placeholder="
                                                    Color" required autofocus>
                                                    
                                                    <div class="btn_form">
                                                        <input class="btn_submit" type="submit" value="Eliminar">
                                                        <input class="btn_submit" type="submit" value="Agregar">
                                                    </div>
                                                </form> 
                                   
                                                
                    
                           </div>
 
                                <div id="adminfrm2" >   
                                    <form class="form_reg" action="guardar.php" method="POST">

                                        <input class="input" type="text" placeholder="
                                        Codigo de Marca" required autofocus>
                    
                                        <input class="input" type="text" placeholder="
                                        Nombre de la Marca" required autofocus>
                                        
                                        <div class="btn_form">
                                            <input class="btn_submit" type="submit" value="Eliminar">
                                            <input class="btn_submit" type="submit" value="Agregar">
                                        </div>
                                    </form> 
                                </div>

                                <div id="adminfrm3" > 
                                    <form class="form_reg" action="guardar.php" method="POST">

                                        <input class="input" type="text" placeholder="
                                        Codigo de Presentacion" required autofocus>
                    
                                        <input class="input" type="text" placeholder="
                                        Presentacion" required autofocus>
                                        <input class="input" type="text" placeholder="
                                        Cantidad" required autofocus>

                                        <div class="btn_form">
                                            <input class="btn_submit" type="submit" value="Eliminar">
                                            <input class="btn_submit" type="submit" value="Agregar">
                                        </div>
                                    </form> 
                            
                                </div>
                                <div id="adminfrm4" > 
                                        <!-- Divicion de estilo visual-->
    <div id="divicion">
            <div class="circulo">
            </div>
            <div class="linea">
            </div>
        </div>
        <!--titulo-->
        <section class="section1">
            <h3>Ingresar Productos</h3>
        </section>
        <!-- Divicion contratia de estilo visual-->
        <div id="divicion2">
            <div class="linea2">
            </div>
            <div class="circulo2">
            </div>
        </div>
                                        <div id="contenedor1" >   
                                                <div id="contenedor4">
                                                    <form class="form_reg" action="guardar.php" method="POST">
                                    
                                                        <input class="input" type="text" placeholder="
                                                        Codigo" required autofocus>
                                    
                                                        <input class="input" type="text" placeholder="
                                                        Color" required autofocus>
                                       
                                                        <input class="input" type="email" placeholder="
                                                        Presentacion" required>
                                       
                                                        <input class="input" type="tel" placeholder="
                                                        Nombre de Producto" required>
                                       
                                                        <input class="input" type="text" placeholder="
                                                        Precio de Compra" required>
                                       
                                                        <input class="input" type="number" placeholder="
                                                        Existencia" required>
                                       
                                                        <input class="input" type="password" placeholder="
                                                        Sucursal" required >
                                       
                                                        <div class="btn_form">
                                                            <input class="btn_submit" type="submit" value="Ingresar">
                                                            <input class="btn_submit" type="submit" value="Cancelar">
                                                        </div>
                                                    </form> 
                                                </div>
                                            </div>
                                    </div>

                                    <div id="adminfrm5" > 
                                          <!-- Divicion de estilo visual-->
    <div id="divicion">
            <div class="circulo">
            </div>
            <div class="linea">
            </div>
        </div>
        <!--titulo-->
        <section class="section1">
            <h3>Ingresar Proveedor</h3>
        </section>
        <!-- Divicion contratia de estilo visual-->
        <div id="divicion2">
            <div class="linea2">
            </div>
            <div class="circulo2">
            </div>
        </div>
                                            <div id="contenedor1" >   
                                                    <div id="contenedor4">
                                                        <form class="form_reg" action="guardar.php" method="POST">

                                                            <input class="input" type="text" placeholder="
                                                            Nombre del proveedor" required autofocus>
                                        
                                                            <input class="input" type="text" placeholder="
                                                            Nombre del ejecutivo" required autofocus>
                                           
                                                            <input class="input" type="email" placeholder="
                                                            NCR" required>
                                           
                                                            <input class="input" type="tel" placeholder="
                                                            Direccion" required>
                                           
                                                            <input class="input" type="text" placeholder="
                                                            Telefono" required>
                                           
                                                            <input class="input" type="number" placeholder="
                                                            Celular" required>
                                           
                                                            <input class="input" type="password" placeholder="
                                                            E-mail" required >
                                           
                                                            <div class="btn_form">
                                                                <input class="btn_submit" type="submit" value="Agregar">
                                                                <input class="btn_submit" type="submit" value="Cancelar">
                                                            </div>
                                                        </form> 
                                                    </div>
                                                </div>
                                        </div>

                                        <div id="adminfrm6" > 
                                              <!-- Divicion de estilo visual-->
    <div id="divicion">
            <div class="circulo">
            </div>
            <div class="linea">
            </div>
        </div>
        <!--titulo-->
        <section class="section1">
            <h3>Modificar Estatus de Clistes</h3>
        </section>
        <!-- Divicion contratia de estilo visual-->
        <div id="divicion2">
            <div class="linea2">
            </div>
            <div class="circulo2">
            </div>
        </div>
                                                <div id="contenedor1" >   
                                                        <div id="contenedor4">
                                                            <form class="form_reg" action="guardar.php" method="POST">
                                            
                                                                <input class="input" type="text" placeholder="
                                                                Codigo" required autofocus>
                                            
                                                                <input class="input" type="text" placeholder="
                                                                Color" required autofocus>
                                               
                                                                <input class="input" type="email" placeholder="
                                                                Presentacion" required>
                                               
                                                                <input class="input" type="tel" placeholder="
                                                                Nombre de Producto" required>
                                               
                                                                <input class="input" type="text" placeholder="
                                                                Precio de Compra" required>
                                               
                                                                <input class="input" type="number" placeholder="
                                                                Existencia" required>
                                               
                                                                <input class="input" type="password" placeholder="
                                                                Sucursal" required >
                                               
                                                                <div class="btn_form">
                                                                    <input class="btn_submit" type="submit" value="Ingresar">
                                                                    <input class="btn_submit" type="submit" value="Cancelar">
                                                                </div>
                                                            </form> 
                                                        </div>
                                                    </div>
                                            </div>
                    </div>

                    </section>
    </div>

</body>
</html>