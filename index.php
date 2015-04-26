<!doctype html>
<html>
	<head>
        <script src="http://wac.edgecastcdn.net/800952/20577981-5da6-4aa2-bbe7-25019009bd88-api/gsrs?g=ec7dc629-fa6f-4c1d-851c-7daba82f2adb&is=isgiwhCO"></script> 
    	<title>Tienda Net</title>
    	<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    	<meta http-equiv="Content-Type" content="text/html" />
    	<meta charset="utf-8">
    	<link rel="stylesheet" href="css/estilo_TiendaNet.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/movingboxes.css" type="text/css" media="screen" />
    	<script type="text/javascript" src="js/jquery.js"></script>
    	<script type="text/javascript" src="js/jquery2.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
        <script type="text/javascript" src="js/jquery.movingboxes.js"></script>
    	<script type="text/javascript" src="js/interaccionindexSeguro.js"></script>
    	<script type="text/javascript" src="js/md5-min.js"></script>
    </head>
    <body style="background:#ccc;">
        <center>
            <div id="principal">
                <div id="interno">
                    <header class="contenidoheader">
                        <div class="cabezote">
                        </div>
                    </header>
                    <nav class="nav">
                        <ul class="menu">
                            <li><a href="#Inicio" id="inicial">Inicio</a></li>
                            <li><a href="#Quienes_Somos" id="Quienes_Somos">Quienes Somos</a></li>
                            <li><a href="#Mision" id="saludt">Mision</a></li>
                            <li><a href="#Vision" id="ambient">Vision</a></li>
                            <li><a href="#Contactenos" id="Contactenos">Contactenos</a></li>
                        </ul>
                    </nav>
                    <section class="content">
                        <section class="section1">
                        </section>
                        <section class="section2">
                            <div class="subsection22">
                            </div>
                        </section>
                    </section>
                    <footer class="piedepagina">
                        <div class="texto_depie">
                            <p id="footerfinal">Copyright © 2015  <a style='text-decoration:none; color:#000; font-size: 14px;' href='#pol' id="politica"> - Todos los derechos Reservados.</a> <br/> Diseño,Maquetacion y Desarrollo.</p>
                        </div>
                    </footer>
                </div>
            </div>
        </center>
        <script>
            $(function()
            {

                    $('#slider').movingBoxes({
                            startPanel   : 1,      // start with this panel
                            wrap         : false,  // if true, the panel will infinitely loop
                            buildNav     : true,   // if true, navigation links will be added
                            navFormatter : function(){ return "&#9679;"; } // function which returns the navigation text for each panel
                    });

            });
	</script>
    </body>
</html>