<?php
        include './conexion.php';
        
           
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
                                    <li><a href="Tienda.php" id="Registro">Registro Compras</a></li>
                                    <li><a href="Ventas.php" id="Ventas">Registro Ventas</a></li>
                                    <li><a href="Bodega.php" id="Inventario">Inventario</a></li>
                                    <li><a href="#Pefil" id="Pefil">Pefil</a></li>
                                    <li><a href="index.php" >Cerrar Sesion</a></li>
                                </ul>
                            </nav>
                            <section class="content">
                                <section class="sectiontienda">
                                    <div class="encabezado2">Bodega O Invetario</div>
                                        	<table border="0px" width="100%">	
		<tr>
			<th>Imagen</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Cantidad</th>
			<th>Subtotal</th>
		</tr>	

		<?php
			$re=mysql_query("select * from compras");
			$numeroventa=0;
			while ($f=mysql_fetch_array($re)) {
					if($numeroventa	!=$f['numeroventa']){
						echo '<tr><th>Compra Número: '.$f['numeroventa'].' </th></tr>';
					}
					$numeroventa=$f['numeroventa'];
					echo '<tr>
						<th><img src="../productos/'.$f['imagen'].'" width="100px" heigth="100px" /></td>
						<th>'.$f['nombre'].'</th>
						<th>'.$f['precio'].'</th>
						<th>'.$f['cantidad'].'</th>
						<th>'.$f['subtotal'].'</th>

					</tr>';
			}
		?>
	</table>
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

