<?php
echo 'estoy en ventas';
    ?>
<!doctype html>
<html>
    <head> 
        <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
        <title>Tienda Net</title>
        <meta http-equiv="Content-Type" content="text/html" />
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/estilo_TiendaNet.css" type="text/css" media="screen" />
<!--        <link rel="stylesheet" href="css/estilos.css" type="text/css" media="screen" />-->
        <link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" type="text/css" media="screen" />
        <link type="text/css"  href="css/jquery.datepick.css" rel="stylesheet" media="screen" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <!--<script type="text/javascript" src="js/interaccionTienda.js"></script>-->
        <script type="text/javascript" src="js/amcharts.js"></script>
        <script type="text/javascript" src="js/serial.js"></script>
        <script type="text/javascript" src="js/light.js"></script>
        <script type="text/javascript" src="js/md5-min.js"></script>
        <script type="text/javascript" src="captcha/jquery.captcha.js"></script>
        <link href="captcha/captcha.css" rel="stylesheet" type="text/css"/>
    </head>
	<body style="background:#ccc;">
            <center>
                <div id="principal">
                    <div id="interno">
                        <header class="contenidoheader">
                        </header>
                            <nav class="nav">
                                <ul class="menu">
                                    <li><a href="#Registros" id="Registro">Registro Compras</a></li>
                                    <li><a href="Ventas.php" id="Ventas">Registro Ventas</a></li>
                                    <li><a href="Bodega.php" id="Ventas">Inventario</a></li>
                                    <li><a href="#Pefil" id="Pefil">Pefil</a></li>
                                    <li><a href="../index.php" >Cerrar Sesion</a></li>
                                </ul>
                            </nav>
                            <section class="content">
                                <section class="sectiontienda">
                                    <?php
                                        include './conexion.php';
                                        $re=mysql_query("select * from productos")or die(mysql_error());
                                            while ($f=mysql_fetch_array($re)) 
                                            {
                                                ?>
                                                    <div class="producto">
                                                            <center>
                                                                <img src="../productos/<?php echo $f['imagen'];?>"><br>
                                                                <span><?php echo $f['nombre'];?></span><br>
                                                                 <span><?php echo $f['precio'];?></span><br>
                                                                 <a class="añadir" style="color:#4A4A4A"href="./carritodecompras.php?id=<?php  echo $f['id'];?>">Añadir al Carrito</a>       
                                                            </center>
                                                    </div>
                                                <?php
                                            }
                                    ?>
                                </section>
                            </section>
                            <footer class="piedepagina">
                                <div class="texto_depie">
                                     <p id="footerfinal">Copyright © 2015  <a style='text-decoration:none; color:#ff741B; font-size: 14px;' href='#pol' id="politica"> - Todos los derechos Reservados.</a> <br/> Diseño,Maquetacion y Desarrollo.</p>
                                 </div>
                            </footer>
                    </div>
                </div>
            </center>
	</body>
</html>
	
	
        