<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
					$arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysql_query("select * from productos where id=".$_GET['id']);
						while ($f=mysql_fetch_array($re)) {
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$imagen=$f['imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'Nombre'=>$nombre,
										'Precio'=>$precio,
										'Imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}




	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from productos where id=".$_GET['id']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$imagen=$f['imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'Nombre'=>$nombre,
							'Precio'=>$precio,
							'Imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
            <meta charset="utf-8"/>
            <title>Carrito de Compras</title>
            <link rel="stylesheet" type="text/css" href="../css/estilo_TiendaNet.css">
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
            <script type="text/javascript"  src="../js/jquery.js"></script>
            <script type="text/javascript"  src="../js/jquery.numeric.js"></script>
            <script type="text/javascript"  src="../js/scripts.js"></script>
            <script type="text/javascript"  href="../js/scripts.js"></script>
    </head>
    <body>
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
                                            $total=0;
                                            if(isset($_SESSION['carrito'])){
                                            $datos=$_SESSION['carrito'];

                                            $total=0;
                                            for($i=0;$i<count($datos);$i++){

                            ?>
                                                    <div class="producto">
                                                            <center>
                                                                <img src="../productos/<?php echo $datos[$i]['Imagen'];?>"><br>
                                                                <span style="font-size:15px;" ><?php echo $datos[$i]['Nombre'];?></span><br>
                                                                <span style="font-size: 15px;">Precio: <?php echo $datos[$i]['Precio'];?></span><br>
                                                                <span style="font-size: 15px;">Cantidad: 
                                                                            <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"
                                                                            data-precio="<?php echo $datos[$i]['Precio'];?>"
                                                                            data-id="<?php echo $datos[$i]['Id'];?>"
                                                                            class="cantidad">
                                                                    </span><br>
                                                                    <span class="subtotal">Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['Precio'];?></span><br>

                                                            </center>
                                                    </div>
                                            <?php
                                                    $total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
                                            }

                                            }else{
                                                    echo '<center><h2>No has añadido ningun producto</h2></center>';
                                            }
                                            echo '<center><h2 id=total >Total:'.$total.'</h2></center>';
                                            if($total!=0){
                                                echo '<a href="compras.php" class="aceptar">Comprar</a>';
                                            }

                                    ?>
                                <a class="VolverT" href="Tienda.php" >Volver a Carrito</a>
                        </section>        
                    </section>
                </div>  
            </div>    
        </center>
    </body>
</html>